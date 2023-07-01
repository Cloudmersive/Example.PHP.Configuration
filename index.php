<?php

if(isset($_FILES['image']))
{

$file_name = $_FILES['image']['name'];   
$temp_file_location = $_FILES['image']['tmp_name']; 




// Step 1 - Scan for viruses with Cloudmersive Virus Scan

require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'API-KEY-HERE');



$apiInstance = new Swagger\Client\Api\ImageOcrApi(
    new GuzzleHttp\Client(  array('verify'          => false)  ),
    $config
);
$input_file = $temp_file_location; // \SplFileObject | Input file to perform the operation on.

$recognition_mode = "Advanced";
$language = "ENG";
$preprocessing = "Auto";

$result = $apiInstance->imageOcrPost($input_file, $recognition_mode, $language, $preprocessing);



file_put_contents("php://output", $result);
}
?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">         
	<input type="file" name="image" />
	<input type="submit"/>
</form>      