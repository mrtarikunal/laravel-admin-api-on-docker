<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Permission;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleSeeder::class);
         \App\Models\User::factory(20)->create();
         Product::factory(30)->create();
         Order::factory(30)->create()->each(function (Order $order) {
             OrderItem::factory(random_int(1,5))->create([
                 'order_id' => $order->id,
             ]);
         });

        Permission::insert([
            ['name' => 'view_users'],
            ['name' => 'edit_users'],
            ['name' => 'view_roles'],
            ['name' => 'edit_roles'],
            ['name' => 'view_products'],
            ['name' => 'edit_products'],
            ['name' => 'view_orders'],
            ['name' => 'edit_orders'],
        ]);
    }
}
