<?php

namespace App\Caixa;

class Loteria{

    // URL BASE DA API DE LOTERIAS DA CAIXA
    const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';
    
    /*
    * Método resposável por obter os resuldados das loterias da caixa
    * @param string $loteria
    * @param integer $concuso
    * @return array
    */ 
    public static function consultarResultado($loteria, $concurso = null){

        //ENDPOINT COMPLETO
        $endpoint = self::URL_BASE.'/'.$loteria.'/'.$concurso; 

        //INICIA O CURL
        $curl = curl_init();

        // CONFIGURA O CULR
        curl_setopt_array($curl,[
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        // EXECUTA O CURL
        $response = curl_exec($curl);

        // FECHA O CURL
        curl_close($curl);

        // RETORNA OS DADOS EM ARRAY
        return strlen($response) ? json_decode($response, true) : [];
    }
}