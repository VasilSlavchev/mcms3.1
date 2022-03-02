<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "mCMS3.1",
            'address' => 'Bulgaria',
            'contact_number' => '+359 000 000 000',
            'contact_email' => 'info@example.com'
        ]);
    }
}
