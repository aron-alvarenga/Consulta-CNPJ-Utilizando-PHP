<?php

namespace App\WebService;

class Speedio
{
  /**
   * URL base da API do Speedio
   * @var string
   */
  const URL_BASE = "https://api-publica.speedio.com.br";

  /**
   * Metodo responsavel por consultar um CNPJ nas APIs do Speedio
   * @param string $cnpj
   * @return array
   */
  public function consultarCNPJ($cnpj)
  {
    // Remove os caracteres invalidos
    $cnpj = preg_replace('/\D/', '', $cnpj);

    // Retorna a execucao da consulta
    return $this->get('/buscarcnpj?cnpj=' . $cnpj);
  }

  /**
   * Metodo responsavel por executar a consulta nas APIs do Speedio
   * @param
   * @return
   */
  public function get($resource)
  {
    // Endpoint completo da API
    $endpoint = self::URL_BASE . $resource;

    // Inicia o CURL
    $curl = curl_init();

    // Configuracoes do CURL
    curl_setopt_array($curl, [
      CURLOPT_URL => $endpoint,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    // Executa a requisicao
    $response = curl_exec($curl);

    // Fecha a conexao
    curl_close($curl);

    // Response em Array
    $responseArray = json_decode($response, true);

    // Retorna o Array com os dados
    return is_array($responseArray) ? $responseArray : [];
  }
}
