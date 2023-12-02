<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;
    public function test_product_lists(): void
    {
        Product::factory()->count(10)->create();
        $response = $this->withHeaders([
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get(route('get.product'));

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'draw',
            'recordsTotal',
            'recordsFiltered',
            'data' => [
                '*' => [
                    'row_id',
                    'title',
                    'size',
                    'price'
                ]
            ]
        ]);

        $data = $response->json();
        $this->assertEquals(0, $data['draw']);
        $this->assertEquals(10, $data['recordsTotal']);
        $this->assertEquals(10, $data['recordsFiltered']);
    }


    public function test_product_create()
    {
        $data = [
            'title' => 'testing',
            'size' => 'Small',
            'price' => 100,
        ];

        $response = $this->post(route('products.store'),$data);

        $response->assertStatus(302)
            ->assertSessionHas('success')
            ->assertRedirectToRoute('products.index');

        $this->assertDatabaseCount('products',1);
    }
}
