<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Organizer::create([
            'name' => 'Tech Events Co.',
            'description' => 'Organizing tech-related events including conferences and workshops.',
            'facebook_link' => 'http://facebook.com/techevents',
            'x_link' => 'http://techevents.com',
            'website_link' => 'http://techevents.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    
        \App\Models\Organizer::create([
            'name' => 'Art & Culture Group',
            'description' => 'Promoting local artists through various cultural events and exhibitions.',
            'facebook_link' => 'http://facebook.com/artculturegroup',
            'x_link' => 'http://artculturegroup.com',
            'website_link' => 'http://artculturegroup.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    
        \App\Models\Organizer::create([
            'name' => 'Health & Wellness Org.',
            'description' => 'Focused on organizing health fairs, workshops, and wellness retreats.',
            'facebook_link' => 'http://facebook.com/healthwellnessorg',
            'x_link' => 'http://healthwellness.org',
            'website_link' => 'http://healthwellness.org',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    
        \App\Models\Organizer::create([
            'name' => 'Education for All',
            'description' => 'Conducting educational seminars and workshops for students and educators.',
            'facebook_link' => 'http://facebook.com/educationforall',
            'x_link' => 'http://educationforall.com',
            'website_link' => 'http://educationforall.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    
        \App\Models\Organizer::create([
            'name' => 'Music Fest Inc.',
            'description' => 'Hosting music festivals and concerts featuring local and international artists.',
            'facebook_link' => 'http://facebook.com/musicfestinc',
            'x_link' => 'http://musicfestinc.com',
            'website_link' => 'http://musicfestinc.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
    }
    
}
