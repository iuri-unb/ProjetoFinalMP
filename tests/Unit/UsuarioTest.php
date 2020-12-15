<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testFindById()
    {
        $usuarios = new Usuario();
        $usuario = $usuarios->findById(1);
        $this->assertEquals("Nome do usuario", $usuario->nome)
    }
}
