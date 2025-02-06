<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Mission;
use App\Models\Landing;
use App\Models\Cosmonaut;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $mission = Mission::create([
            'name' => 'Восток 1',
            'launch_date' => '1961-04-12',
            'launch_site' => 'Космодром Байконур',
            'latitude' => 45.9650000,
            'longitude' => 63.3050000,
            'duration_hours' => 1,
            'duration_minutes' => 48,
            'spacecraft_name' => 'Восток 3KA',
            'manufacturer' => 'OKB-1',
            'crew_capacity' => 1,
        ]);
    
        Landing::create([
            'mission_id' => $mission->id,
            'date' => '1961-04-12',
            'site_name' => 'Смеловка',
            'country' => 'СССР',
            'latitude' => 51.2700000,
            'longitude' => 45.9970000,
            'parachute_landing' => true,
            'impact_velocity_mps' => 7,
        ]);
    
        Cosmonaut::create([
            'mission_id' => $mission->id,
            'name' => 'Юрий Гагарин',
            'birthdate' => '1934-03-09',
            'rank' => 'Старший лейтенант',
            'early_life' => 'Родился в Клушино, Россия.',
            'career' => 'Отобран в отряд космонавтов в 1960 году...',
            'post_flight' => 'Стал международным героем.',
        ]);
    }
}
