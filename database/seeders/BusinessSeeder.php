<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Business;

class BusinessSeeder extends Seeder
{
    public function run()
    {
        $businesses = [
            [
                'name' => 'Blue Ocean Cafe',
                'slug' => Str::slug('Blue Ocean Cafe'),
                'description' => 'A cozy seaside cafe offering premium coffee, fresh pastries, and stunning ocean views.',
                'tagline' => 'Coffee with a view',
                'logo' => 'logos/blue-ocean.png',
                'cover_image' => 'covers/blue-ocean.jpg',
                'email' => 'info@blueoceancafe.com',
                'phone' => '+94711234567',
                'whatsapp' => '+94718999999',
                'website' => 'https://blueoceancafe.com',
                'address_line1' => '123 Marine Drive',
                'address_line2' => null,
                'city' => 'Colombo',
                'district' => 'Colombo',
                'country' => 'Sri Lanka',
                'postal_code' => '00300',
                'latitude' => 6.927079,
                'longitude' => 79.861244,
                'user_id' => 1,
                'employees_count' => 12,
                'founded_year' => 2018,
                'registration_number' => 'BOC-REG-2020',
                'opening_hours' => json_encode([
                    'mon' => '8:00-22:00',
                    'tue' => '8:00-22:00',
                    'wed' => '8:00-22:00',
                    'thu' => '8:00-22:00',
                    'fri' => '8:00-23:00',
                    'sat' => '9:00-23:00',
                    'sun' => '9:00-20:00',
                ]),
                'social_links' => json_encode([
                    'facebook' => 'https://facebook.com/blueoceancafe',
                    'instagram' => 'https://instagram.com/blueoceancafe'
                ]),
                'services' => json_encode(['Dine-in', 'Takeaway', 'Delivery']),
                'features' => json_encode(['Wifi', 'Parking', 'Ocean View']),
                'is_verified' => true,
                'status' => 'active',
                'views_count' => 1240,
                'reviews_count' => 54,
                'rating' => 4.5,
                'meta_title' => 'Blue Ocean Cafe',
                'meta_description' => 'A top-rated cafe in Colombo with ocean views.',
                'meta_keywords' => 'cafe, colombo, ocean view'
            ],

            [
                'name' => 'TechWave Solutions',
                'slug' => Str::slug('TechWave Solutions'),
                'description' => 'Full-stack software agency delivering cloud-powered digital products.',
                'tagline' => 'Digital solutions for the next era',
                'logo' => 'logos/techwave.png',
                'cover_image' => 'covers/techwave.jpg',
                'email' => 'hello@techwave.com',
                'phone' => '+94775554433',
                'whatsapp' => '+94770001122',
                'website' => 'https://techwave.com',
                'address_line1' => '45 Silicon Avenue',
                'address_line2' => 'Tech Zone',
                'city' => 'Malabe',
                'district' => 'Colombo',
                'country' => 'Sri Lanka',
                'postal_code' => '10115',
                'latitude' => 6.907600,
                'longitude' => 79.971400,
                'user_id' => 1,
                'employees_count' => 25,
                'founded_year' => 2016,
                'registration_number' => 'TW-REG-2016',
                'opening_hours' => json_encode([
                    'mon' => '9:00-18:00',
                    'tue' => '9:00-18:00',
                    'wed' => '9:00-18:00',
                    'thu' => '9:00-18:00',
                    'fri' => '9:00-17:00',
                    'sat' => null,
                    'sun' => null,
                ]),
                'social_links' => json_encode([
                    'linkedin' => 'https://linkedin.com/company/techwave',
                    'twitter' => 'https://x.com/techwave'
                ]),
                'services' => json_encode(['Web Development', 'Mobile Apps', 'Cloud Consulting']),
                'features' => json_encode(['ISO Certified', '24/7 Support']),
                'is_verified' => true,
                'status' => 'active',
                'views_count' => 3100,
                'reviews_count' => 87,
                'rating' => 4.8,
                'meta_title' => 'TechWave Solutions',
                'meta_description' => 'Industry-leading software agency in Sri Lanka.',
                'meta_keywords' => 'software, agency, web development'
            ]
        ];

        foreach ($businesses as $data) {
            Business::firstOrCreate(
                ['name' =>  $data['name']],
                $data
            );
        }
    }
}
