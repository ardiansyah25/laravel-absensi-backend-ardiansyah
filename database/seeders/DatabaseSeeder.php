<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    User::factory()->create([
      'name'     => 'admin',
      'email'    => 'admin@mail.com',
      'password' => Hash::make('12345678'),
      'role'     => 'admin',
    ]);

    // data dummy untuk company
    Company::create([
      'name'      => 'PT.FIC16',
      'email'     => 'fic16@mail.com',
      'address'   => 'Kecamatan Pulau Burung',
      'latitude'  => '0.4882432',
      'longitude' => '101.4235136',
      'radius_km' => '0.5',
      'time_in'   => '08:00',
      'time_out'  => '17:00',
    ]);

    $this->call([
      AttendanceSeeder::class,
      PermissionSeeder::class,
    ]);
  }
}
