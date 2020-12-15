<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Produto;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProdutoTest extends TestCase
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
        $produtos = new Produto();
        $produto = $produtos->findById(1);
        $this->assertEquals("Nome do Produto", $produto->nome)
    }
}
