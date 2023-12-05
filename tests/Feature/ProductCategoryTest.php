<?php

namespace Tests\Feature;

use App\Models\ProductCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductCategoryTest extends TestCase
{
   use RefreshDatabase;
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_category_index()
    {
       ProductCategory::factory()->count(10)->create();
       $response = $this->withHeaders([
           'X-Requested-With' => 'XMLHttpRequest'
       ])->get(route('get.category'));
       $response->assertStatus(200);
       $response->assertJsonStructure([
           'draw',
           'recordsTotal',
           'recordsFiltered',
           'data' => [
               '*' => [
                   'row_id',
                   'name',
                   'description'
               ]
           ]
       ]);
       $data = $response->json();
       $this->assertEquals(0,$data['draw']);
       $this->assertEquals(10,$data['recordsTotal']);
       $this->assertEquals(10,$data['recordsFiltered']);
    }
}
