<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\Concerns\actingAs;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ASessionValuesTest extends TestCase
{
    use DatabaseTransactions;
    
    function test_auth_preliminar_value()
    {
        // Having
        $user = User::create([
                'name' => 'Jane Doe',
                'email' => 'jdoe@gmail.com',
                'password'  => bcrypt('secret')
            ]);
        // Check database
        $this->assertDatabaseHas('users',[
            'name' => 'Jane Doe',
            'email' => 'jdoe@gmail.com'
        ]);

        // Acting
        $this->get('/login')
            ->assertStatus(200);

        $response = $this->actingAs($user, 'web')
            ->get('/home')
            ->assertStatus(200);
    }
}
