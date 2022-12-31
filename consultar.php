<?php
require __DIR__ . '/vendor/autoload.php';

use \App\WebService\Speedio;

// Nova instancia de Speedio
$objSpeedio = new Speedio;

// CNPJ
$cnpj = '00.000.000.0001-91';

// Consulta o CNPJ nas APIs do Speedio
$resultado = $objSpeedio->consultarCNPJ($cnpj);

// Verifica o resultado
if (empty($resultado)) {
  die('Problemas ao consultar CNPJ');
}

// Verifica o erro da requisicao
if (isset($resultado['error'])) {
  die($resultado['error']);
}

// Imprime os dados de sucesso
echo "Nome Fantasia: " . $resultado['NOME FANTASIA'] . "\n";
echo "Razão Social: " . $resultado['RAZAO SOCIAL'] . "\n";
echo "CNPJ: " . $cnpj . "\n";
echo "Status: " . $resultado['STATUS'] . "\n";
echo "CNAE Principal Descrição: " . $resultado['CNAE PRINCIPAL DESCRICAO'] . "\n";
echo "CNAE Principal Código: " . $resultado['CNAE PRINCIPAL CODIGO'] . "\n";
echo "CEP: " . $resultado['CEP'] . "\n";
echo "Data de Abertura: " . $resultado['DATA ABERTURA'] . "\n";
echo "DDD: " . $resultado['DDD'] . "\n";
echo "Telefone: " . $resultado['TELEFONE'] . "\n";
echo "E-mail: " . $resultado['EMAIL'] . "\n";
echo "Tipo Logradouro: " . $resultado['TIPO LOGRADOURO'] . "\n";
echo "Logradouro: " . $resultado['LOGRADOURO'] . "\n";
echo "Número: " . $resultado['NUMERO'] . "\n";
echo "Complemento: " . $resultado['COMPLEMENTO'] . "\n";
echo "Bairro: " . $resultado['BAIRRO'] . "\n";
echo "Municipio: " . $resultado['MUNICIPIO'] . "\n";
echo "UF: " . $resultado['UF'] . "\n";
