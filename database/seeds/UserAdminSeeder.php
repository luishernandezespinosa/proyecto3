<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //1ª forma de crear usuario con objeto user
        //lo creo, lleno los atributos igual columnas bd
        //y por último save()
/*
        $user = new User;
        $user->firstName = 'Luis';
        $user->lastName = 'Hdez';
        $user->password = bcrypt(123);
        $user->email = 'iescierva.carlos@gmail.com';
        $user->rol = 'Administrador';
        $user->token = bcrypt(date('YmdHms'));

        $user->save();
*/



    }
}
