<?php 
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\ValidacaoCadastral;

final class ValidacaoCadastralTest extends TestCase
{
    public function testCpf(): void
    {
        $this->assertEquals(
            [
                    "nome" => "validacao cadastral",
                    "cpf" => "298.803.420-62",
                    "credit" => 100,
                    "status" => 1
            ],
            json_decode(ValidacaoCadastral::get('28a7976f9df7b08f87dcce30be04e60e', '29880342062'),true)
        );
    }

    public function testCnpj(): void
    {
        $this->assertEquals(
            [
                "fantasia"=> "validacao cadastral",
                "razao"=> "validacao cadastral",
                "cnpj"=> "18.611.939/0001-58",
                "credit"=> 100,
                "status"=> 1
                ],
            json_decode(ValidacaoCadastral::get('28a7976f9df7b08f87dcce30be04e60e', '18611939000158'), true)
        );
    }
}