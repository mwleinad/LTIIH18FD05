<?php
namespace App\Services;

use App\Models\Purchase;
use Faker;

class PurchaseService {
    function purchase($product) {
        $faker = Faker\Factory::create();

        Purchase::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'product' => $product
        ]);

        return 'Gracias '.$faker->name.' has solicitado el producto '.$product;
    }
}
