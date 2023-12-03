<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
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


    public function test_product_store()
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

    public function test_product_create()
    {
        $response = $this->get(route('products.create'));
        $response->assertStatus(200)
                ->assertViewIs('admin.product.create')
                ->assertSeeText(['Title','Size', 'Price','Create','Cancel']);
    }

    public function test_product_edit()
    {
        $product = Product::factory()->create();
        $response = $this->get(route('products.edit',$product->id));
        $response->assertStatus(200)
            ->assertViewIs('admin.product.edit')
            ->assertSeeText([
            'Title','Size','Price','Update','Cancel'
            ]);
    }

    public function test_product_update()
    {
        $product = Product::factory()->create();
        $data = [
            'title' => 'update title',
            'size' => 'update size',
            'price' => 1000
        ];
        $response = $this->put(route('products.update',$product->id),$data);
        $response->assertStatus(302)
            ->assertSessionHas('success')
            ->assertRedirectToRoute('products.index');
        $this->assertDatabaseHas('products',$data + ['id' => $product->id]);

    }

    public function test_product_delete()
    {
        $product = Product::factory()->create();
        $response = $this->json('DELETE', route('products.destroy',$product->id));
        $response->assertStatus(200)
            ->assertJson([
                'message' => 1
            ]);
        $this->assertDatabaseMissing('products',['id' => $product->id]);
    }
}
