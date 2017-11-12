<?php

namespace Tests\Browser\unit;

use App\Acceso;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class A02Accesos01Test extends DuskTestCase
{
    use DatabaseMigrations;

    function test_edit_an_acceso()
    {
        $this->artisan('db:seed');
        $this->browse(function(Browser $browser)
        {
            $user_admin = User::find(2);      // 2: Administrador
            $user_mody = User::find(4);      // 4: Docente a modificar
            $browser->loginAs($user_admin)    
                    ->visit('/home')
                    ->assertPathIs('/home')
                    ->select('facultad_id','1')
                    ->select('sede_id','1')
                    ->press('Acceder')
                    //->pause(10000)
                    ->waitForText('Inicio')
                    ->assertSee('Usuarios')
                    ->visit('/administrador/user/index')
                    ->assertPathIs('/administrador/user/index')
                    ->visit("/administrador/acceso/edit/{$user_mody->id}")
                    //->pause(60000+60000)
                    ->assertSee('Modificar Accesos de Usuario')
                    ->waitForText('Modificar Accesos de Usuario')
                    ->select('type_id',2)
                    ->press('Grabar modificaciones')
                    ->assertSee('Se ha modificado el usuario: ' . $user_mody->id . ' : ' . $user_mody->datauser->wdoc2 . " " . $user_mody->datauser->wdoc3 . ", " . $user_mody->datauser->wdoc1 . ' de forma exitosa')
                    ;

        });
    }
}
