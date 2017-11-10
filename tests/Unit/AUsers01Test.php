<?php

namespace Tests\Unit;

use App\Acceso;
use App\DataUser;
use App\Facultad;
use App\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

/** @test */
class AUsers01Test extends TestCase
{
   function test_list_the_users()
   {
      //Having an administrator user
      $user = factory(User::class)->create();
    
      $response = $this->actingAs($user);

      Session::put('facultad_id',1);
      Session::put('sede_id',1);
      Session::put('type_id',5); // Administrador
      Session::put('ctype','Administrador');

      $response = $this->get('administrador/user/index');

      $response->assertStatus(200);
      /*$this->markTestIncomplete(
            'This test has not been implemented yet.'
          );
      */
   }

	function test_create_a_guest_user()
   {
  		//Having an administrator user
  		$admin = factory(User::class)->create();

      $facultad_id = 1;
      $sede_id = 1;
      $type_id = 5;   // Administrador
      $wtype = "Administrador";

      $this->authUser($admin->id, $facultad_id, $sede_id, $type_id);

      $response = $this->actingAs($admin);

      // When
      $newUser = [
          'name'=>'John Doe',
          'email'=> 'jd@gmail.com',
        	'password'=>bcrypt('secret')
         ];

      $cdocente = DataUser::find(1)->newcodigo();
      $response = $this->post('administrador/user/store', $newUser);

      //Then
      $this->assertDatabaseHas('users',[
        'name'=>'John Doe',
        'email'=> 'jd@gmail.com',
      ]);
      
      $user_id = User::where('name','John Doe')->first()->id;
    
      $this->assertDatabaseHas('datausers',[
        'user_id' => $user_id,
     		'wdoc1'=> 'John Doe',
        'cdocente' => $cdocente,
        'email1'=> 'jd@gmail.com'
      ]);

      $this->assertDatabaseHas('accesos',[
        'user_id'=> $user_id,
        'facultad_id' => $facultad_id,
        'sede_id'=> $sede_id,
        'type_id'=> 2
      ]);
	}
}