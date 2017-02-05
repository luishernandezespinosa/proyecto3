<?php

use Illuminate\Database\Seeder;

class UserConFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Con esto crea 1, y le digo el valor fijo que no quiero que coja del factory
        //y hacemos un Administrador
        factory(App\User::class)->create([

            'firstName' => 'Luis',
            'lastName' =>  'Hdez',
            'password' =>  bcrypt(123),
            'email' =>  'iescierva.carlos@gmail.com',
            'token ' =>  bcrypt(date('YmdHms')),
            'rol' =>  'Administrador',

            
        ]);

        factory(App\User::class)->create([

            'firstName' => 'Pepe',
            'lastName' =>  'Pérez',
            'password' =>  bcrypt(123),
            'email' =>  'iescierva.carlos2@gmail.com',
            'token ' =>  bcrypt(date('YmdHms')),
            'rol' =>  'AlumnoESO',


        ]);

        factory(App\User::class)->create([

            'firstName' => 'Juan',
            'lastName' =>  'Sánchez',
            'password' =>  bcrypt(123),
            'email' =>  'iescierva.carlos3@gmail.com',
            'token ' =>  bcrypt(date('YmdHms')),
            'rol' =>  'AlumnoFP',


        ]);


        
        //con esto genera 100 usuarios, como antes hacíamos el UserMasiveSeeder.php
        
        factory(App\User::class, 100)->create();
    }
}
