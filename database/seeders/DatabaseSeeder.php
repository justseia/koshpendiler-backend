<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(1)->create();
         \App\Models\Animal::factory(10)->create();
         \App\Models\AppInfo::factory(10)->create();
         \App\Models\FAQ::factory(10)->create();
         \App\Models\Place::factory(10)->create();
         \App\Models\PrivatePolicy::factory(10)->create();
         \App\Models\TermsConditions::factory(10)->create();

        DB::table('personal_access_tokens')->insert(
            [
                'tokenable_type' => 'App\Models\User',
                'tokenable_id' => '1',
                'name' => 'API TOKEN',
                'token' => '159f7080dfaf68c8496d60dde5d5ca7d909c60b9d60e25b9d23677ea48a6e551',
                'abilities' => '["*"]',
                'last_used_at' => null,
                'expires_at' => null,
                'created_at' => '2023-03-27 20:26:00',
                'updated_at' => '2023-03-27 20:26:00',
            ]
        );
    }
}
