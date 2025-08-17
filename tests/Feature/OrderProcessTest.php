<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderProcessTest extends TestCase
{
    
    use RefreshDatabase;

    public function test_a_user_order_can_be_processed()
    {
        $product = factory(Product::class)->create();

        $stock = factory(Stock::class)->create([
            'product_id' => $product->id
        ]);

        $response = $this->post("/order/{$product->id}/process", [
            'payment_method' => 'stripe'
        ])->assertOk()->json();

        $this->assertArrayHasKey('payment_message', $response);
        $this->assertArrayHasKey('discounted_price', $response);
        $this->assertArrayHasKey('original_price', $response);
        $this->assertArrayHasKey('message', $response);

        $this->assertDatabaseHas('stocks', [
            'quantity' => $stock->quantity - 1
        ]);
    }

    public function test_an_exception_is_thrown_when_product_is_out_of_stock()
    {
        $this->expectException(ValidationException::class);

        $product = factory(Product::class)->create();

        $stock = factory(Stock::class)->create([
            'product_id' => $product->id,
            'quantity' => 0
        ]);

        $this->withoutExceptionHandling()->post("/order/{$product->id}/process", [
            'payment_method' => 'stripe'
        ]);
    }
}
