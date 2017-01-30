<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotesTest extends TestCase
{
    public function test_create_note(){

        // having when then , las 3 partes del test, a veces sin having

        $this->post('notes/create')
            //then
            ->see('Procesando la entrada del formulario');
    }

}
