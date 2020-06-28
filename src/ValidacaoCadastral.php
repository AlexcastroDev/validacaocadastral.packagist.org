<?php

namespace App;

Class ValidacaoCadastral {
    const BASE_URL = 'https://api.validacaocadastral.com.br/consulta/';
    
    public static function get($token, $document)
    {
        $url = self::BASE_URL . $token . '/' . $document;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}