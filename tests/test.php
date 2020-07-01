<?php 
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use H1code\ValidacaoCadastral;

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
                
                    "razao"=> "validacao cadastral",
                    "fantasia"=> "validacao cadastral",
                    'email' => 'validacao@mail.com.br',
                   'cnpj' => "00.000.000/0001-00",
                    "situacao"=> "Ativa",
                    "telefones"=> [
                      "(21) 00000-0000"
                    ],
                    "matrizEndereco"=> [
                      "bairro"=> "validacao cadastra",
                      "cep"=> "validacao cadastra",
                      "logradouro"=> "validacao cadastra",
                      "numero"=> "validacao cadastra",
                      "complemento"=> "validacao cadastra",
                      "cidade"=> "validacao cadastra",
                      "uf"=> "validacao cadastra"
                    ],
                    "status"=> 1,
                    "credit"=> 100
                  
                ],
            json_decode(ValidacaoCadastral::get('28a7976f9df7b08f87dcce30be04e60e', '18611939000158'), true)
        );
    }
}