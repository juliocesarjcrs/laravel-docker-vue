<?php

namespace Tests\Feature;

use App\Http\Controllers\ProductController;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $collection = collect([
            [
                'id' => 1,
                'nombre' => 'Juan',
            ],
            [
                'id' => 2,
                'nombre' => 'Pedro',
            ],
        ]

        );
        $controller = new ProductController;
        $res = $controller->recorrer($collection);
        // dd($res);
    }
}
