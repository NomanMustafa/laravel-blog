<?php 
namespace App\Facade;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

class PayPal
{
public static function apiContext()
{
    // Suppress DateTime warnings, if not set already
date_default_timezone_set(@date_default_timezone_get());

// Adding Error Reporting for understanding errors properly
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Replace these values by entering your own ClientId and Secret by visiting https://developer.paypal.com/developer/applications/
$clientId = 'Aem5GdHYepRWJWa3uW4eQkfAOQnZIZvh95vea5jHZs5iKAKxifIyH7uf5wvxXHMdEBB1T025RyniPhfM';
$clientSecret = 'EK2RkCFLBWE6c0qSaqcKoXG1X94ShW0EbctXb2XxBZlW554Zp80XW5dWfPcTQUBeohI3yAIgew60l_hX';

/**
 * All default curl options are stored in the array inside the PayPalHttpConfig class. To make changes to those settings
 * for your specific environments, feel free to add them using the code shown below
 * Uncomment below line to override any default curl options.
 */
// \PayPal\Core\PayPalHttpConfig::$defaultCurlOptions[CURLOPT_SSLVERSION] = CURL_SSLVERSION_TLSv1_2;


/** @var \Paypal\Rest\ApiContext $apiContext */
$apiContext = self::getApiContext($clientId, $clientSecret);

return $apiContext;
}
public static function getApiContext($clientId, $clientSecret)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential(
            $clientId,
            $clientSecret
        )
    );

    $apiContext->setConfig(
        array(
            'mode' => 'sandbox',
            'log.LogEnabled' => true,
            'log.FileName' => '../PayPal.log',
            'log.LogLevel' => 'DEBUG', // PLEASE USE `INFO` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
            'cache.enabled' => true,
        )
    );

    return $apiContext;
}

}

?>
