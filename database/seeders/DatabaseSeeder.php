<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Exercise;
use App\Models\Plan;
use Illuminate\Database\Seeder;

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

        $plan1 = new Plan([
            'name' => 'Oberkörper',
        ]);
        $plan1->save();
        $plan = new Plan([
            'name' => 'Beine',
        ]);

        $plan->save();

        $ubung = new Exercise([
            'name' => 'Test1',
            'description' => 'Test',
            'sets' => '3',
            'repetitions' => '12',
            'plan_id' => '1',
        ]);
        $ubung->save();

        $ubung2 = new Exercise([
            'name' => 'Test2',
            'description' => 'Test',
            'sets' => '3',
            'repetitions' => '12',
            'plan_id' => '2',
        ]);
        $ubung2->save();

        $ubung3 = new Exercise([
            'name' => 'Test3',
            'description' => 'Test',
            'sets' => '3',
            'repetitions' => '12',
            'plan_id' => '1',
        ]);
        $ubung3->save();

        $ubung4 = new Exercise([
            'name' => 'Test4',
            'description' => 'Test',
            'sets' => '3',
            'repetitions' => '12',
            'plan_id' => '2',
        ]);
        $ubung4->save();
    }
}
