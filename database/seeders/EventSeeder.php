<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create(); // Membuat instance Faker

   
        \App\Models\Event::create([
            'title' => 'Tech Expo 2024',
            'venue' => 'Jakarta Convention Center',
            'date' => '2024-10-10',
            'start_time' => '10:00:00',
            'description' => $faker->text(),
            'booking_url' => null, // Nullable
            'tags' => 'expo, technology',
            'organizer_id' => 1,
            'event_category_id' => 1,
            'image_url' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

  
        \App\Models\Event::create([
            'title' => 'Indonesian Music Festival',
            'venue' => 'Senayan Park',
            'date' => '2024-10-15',
            'start_time' => '19:30:00',
            'description' => $faker->text(),
            'booking_url' => null,
            'tags' => 'concert, music',
            'organizer_id' => 2,
            'event_category_id' => 2,
            'image_url' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

     
        \App\Models\Event::create([
            'title' => 'Global Business Conference',
            'venue' => 'Bali Nusa Dua Convention Center',
            'date' => '2024-10-20',
            'start_time' => '09:00:00',
            'description' => $faker->text(),
            'booking_url' => null,
            'tags' => 'conference, business',
            'organizer_id' => 3,
            'event_category_id' => 3,
            'image_url' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

   
        \App\Models\Event::create([
            'title' => 'Creative Arts Expo',
            'venue' => 'Jakarta Arts Building',
            'date' => '2024-10-25',
            'start_time' => '15:00:00',
            'description' => $faker->text(),
            'booking_url' => null,
            'tags' => 'expo, arts',
            'organizer_id' => 1,
            'event_category_id' => 1,
            'image_url' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

    
        \App\Models\Event::create([
            'title' => 'Java Jazz Festival 2024',
            'venue' => 'Djakarta Theater',
            'date' => '2024-11-01',
            'start_time' => '19:00:00',
            'description' => $faker->text(),
            'booking_url' => null,
            'tags' => 'concert, jazz',
            'organizer_id' => 2,
            'event_category_id' => 2,
            'image_url' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        \App\Models\Event::create([
            'title' => 'EduTech Conference',
            'venue' => 'Surabaya International Expo',
            'date' => '2024-11-05',
            'start_time' => '08:30:00',
            'description' => $faker->text(),
            'booking_url' => null,
            'tags' => 'conference, education',
            'organizer_id' => 3,
            'event_category_id' => 3,
            'image_url' => null,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}