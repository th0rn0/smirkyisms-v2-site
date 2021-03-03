<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TeamPrivacyPermission::create([
        	'name' => "Full",
        	'value' => "full",
        	'description' => "Accessible to anyone"
        ]);
       \App\Models\TeamPrivacyPermission::create([
        	'name' => "Passworded",
        	'value' => "pass",
        	'description' => "Accessible to anyone with the password"
        ]);
        \App\Models\TeamPrivacyPermission::create([
        	'name' => "Private",
        	'value' => "priv",
        	'description' => "Only Accessible to Team Members"
        ]);
        \App\Models\TeamPrivacyPermission::create([
        	'name' => "Private with Links",
        	'value' => "link",
        	'description' => "Only Accessible to Team Members or anyone with a direct link"
        ]);
    }
}
