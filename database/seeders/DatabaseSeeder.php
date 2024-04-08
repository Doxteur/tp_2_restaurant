<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\StockItem;
use App\Models\Supplier;
use App\Models\User;
use App\Models\Customer;
use App\Models\Reservation;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Customer::create([
            'name' => 'Bob Smith',
            'email' => 'bob@example.com',
            'phone' => '555-2222',
            'loyalty_points' => 50,
        ]);
        Order::create([
            'customer_id' => 1,
            'total_amount' => 50.99,
            'created_at' => now(),
            'updated_at' => now(),
            'table_number' => 1,
        ]);

        MenuItem::create([
            'name' => 'Hamburger',
            'description' => 'Classic beef burger with lettuce, tomato, and cheese',
            'price' => 9.99,
        ]);
        Employee::create([
            'name' => 'John Doe',
            'address' => '123 Main Street',
            'phone' => '555-1234',
            'role' => 'Server',
        ]);

        Reservation::create([
            'customer_id' => 1,
            'table_number' => 5,
            'reservation_date' => Carbon::now()->addDays(3)->toDateString(),
            'reservation_time' => '18:30',
        ]);

        StockItem::create([
            'name' => 'Chicken Breast',
            'quantity' => 50,
            'unit_price' => 3.99,
        ]);


        Supplier::create([
            'name' => 'Meat Suppliers Co.',
            'contact_name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '555-5678',
        ]);


    }
}
