<?php

namespace Database\Seeders;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use Illuminate\Supprt\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        // \App\Models\Staff::factory()->count(20)->create();
     
        Staff::factory()->count(30)->create();
        
       
    }
}
