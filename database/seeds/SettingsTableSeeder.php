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
          'site_name' => 'Blog cok',
          'address' => 'Ngawi Jawa Timur',
          'contact_number' => '+62 44 55',
          'contact_email' => 'info@blog.cok',
      ]);
    }
}
