<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrchestratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\HttpOrchestrationRequest(); // \Swagger\Client\Model\HttpOrchestrationRequest | 

try {
    $result = $apiInstance->orchestratorHttpSimple($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrchestratorApi->orchestratorHttpSimple: ', $e->getMessage(), PHP_EOL;
}

?>