<?php

namespace Database\Seeders;

use App\Models\Contact;
use Database\Seeders\ContactSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ContactSeeder::class);
    }
}