<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cli= new Cliente();
        $cli->nombre='María';
        $cli->apellido='Lamas';
        $cli->email='maria@gmail.com';
        $cli->cp='08025';
        $cli->nick='LaMari';
        $cli->save();

        $cli0= new Cliente();
        $cli0->nombre='Fernando';
        $cli0->apellido='Trueba';
        $cli0->email='fer@gmail.com';
        $cli0->cp='08026';
        $cli0->nick='Fernandito';
        $cli0->save();

        $cli1= new Cliente();
        $cli1->nombre='Lourdes';
        $cli1->apellido='Casamajor';
        $cli1->email='lourdesc@gmail.com';
        $cli1->cp='08027';
        $cli1->nick='Betty';
        $cli1->save();

        $cli2= new Cliente();
        $cli2->nombre='Alejandro';
        $cli2->apellido='Giménez';
        $cli2->email='alexGim@gmail.com';
        $cli2->cp='08028';
        $cli2->nick='alf';
        $cli2->save();

        $cli3= new Cliente();
        $cli3->nombre='Silvia';
        $cli3->apellido='Abril';
        $cli3->email='abrilsilvia@gmail.com';
        $cli3->cp='08029';
        $cli3->nick='pincess';
        $cli3->save();

        $cli4= new Cliente();
        $cli4->nombre='Casimiro';
        $cli4->apellido='Real del Soto';
        $cli4->email='casimiro@hotmail.com';
        $cli4->cp='08030';
        $cli4->nick='casina';
        $cli4->save();
    }
}
