<?php

namespace Database\Seeders;

use App\Models\Administrador;
use App\Models\Equipo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //llenado de los datos del administrador
        $admin = new User();
        $admin->name = 'MairymB Perez';
        $admin->email = 'mairymperez@gmail.com';
        $admin->password = Hash::make('admin123');
        $admin->save();

        //llenado de los datos del administrador
        $admin = new Administrador();
        $admin->usuario = 'admin';
        $admin->nombre = 'administrador';
        $admin->rpe = 'b08aq';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('qwerty123-');
        $admin->save();

    }
}
