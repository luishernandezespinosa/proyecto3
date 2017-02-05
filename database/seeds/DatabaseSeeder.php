<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      //  $this->call(UserAdminSeeder::class);
      //  $this->call(UserAlumnoSeeder::class);
       // $this->call(UserMasiveSeeder::class);
        $this->call(UserConFactorySeeder::class);
    }
}
