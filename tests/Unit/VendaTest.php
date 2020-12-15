<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Venda;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VendaTest extends TestCase
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
        $vendas = new Venda();
        $venda = $vendas->findById(1);
        $this->assertEquals("data da venda do produto", $venda->data_criacao)
    }
}
