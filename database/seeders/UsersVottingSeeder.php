<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersVottingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            $data = [
                'event_id' => $faker->numberBetween(1, 4),
                'name' => $faker->name,
                'notelpon' => '+62' . $faker->numerify('##########'),
                'token' => $this->genetateToken(),
                'progress' => $faker->randomElement(['completed', 'pending']),
            ];

            DB::table('usersVotting')->insert($data);
        }
    }

    private function genetateToken()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $randomString = '';

        for ($i = 0; $i < 6; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
}
