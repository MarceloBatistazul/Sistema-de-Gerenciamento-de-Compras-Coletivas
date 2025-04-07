<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Criar 10 moradores
        \App\Models\Resident::factory(10)->create();

        // Criar 5 produtos
        \App\Models\Product::factory(5)->create();

        // Criar 3 compras coletivas
        \App\Models\CollectivePurchase::factory(3)->create();

        // Criar pedidos e relacionamentos
        \App\Models\Order::factory(20)->create()->each(function ($order) {
            // Adicionar produtos ao pedido
            $products = \App\Models\Product::inRandomOrder()->limit(3)->get();
            foreach ($products as $product) {
                $order->products()->attach($product->id, [
                    'quantity' => rand(1, 5),
                    'unit_price' => $product->price
                ]);
            }

            // Criar pagamento
            $order->payment()->create([
                'amount' => $order->products->sum(function ($product) {
                    return $product->pivot->quantity * $product->pivot->unit_price;
                }),
                'method' => ['cash', 'pix', 'transfer'][rand(0, 2)],
                'status' => ['pending', 'paid', 'canceled'][rand(0, 2)],
                'payment_date' => now()->subDays(rand(1, 30))
            ]);
        });
    }
}