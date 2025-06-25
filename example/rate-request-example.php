<?php

// Comment out or remove the autoload.php require since we'll use composer's autoloader directly
require_once __DIR__ . '/../vendor/autoload.php';

use ShipperHQ\WS\Client\WebServiceClient;
use ShipperHQ\WS\Rate\Request\RateRequest;
use ShipperHQ\WS\Rate\Request\CustomerDetails;
use ShipperHQ\WS\Rate\Request\Checkout\Cart;

// Load environment variables
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    $envVars = parse_ini_file($envFile);
    if ($envVars === false) {
        throw new Exception("Error loading .env file");
    }
} else {
    throw new Exception(".env file not found");
}

// Create a new web service client
$client = new WebServiceClient();

// Set up credentials from environment variables
$credentials = new \stdClass();
$credentials->apiKey = $envVars['SHIPPERHQ_API_KEY'] ?? null;
$credentials->password = $envVars['SHIPPERHQ_PASSWORD'] ?? null;

if (!$credentials->apiKey || !$credentials->password) {
    throw new Exception("API credentials not found in .env file");
}

// Create a new rate request
$rateRequest = new RateRequest();
$rateRequest->credentials = $credentials;

// Set site details
$siteDetails = new \stdClass();
$siteDetails->ecommerceCart = "Magento 2 Community";
$siteDetails->environmentScope = "LIVE";
$siteDetails->appVersion = "30.0.0";
$rateRequest->siteDetails = $siteDetails;

// Add cart details
$cart = new Cart();
$cart->declaredValue = null;
$cart->freeShipping = false;

// Add cart item
$item = [
    'basePrice' => 1.0,
    'storePrice' => 1.0,
    'taxInclStorePrice' => 1.0,
    'taxInclBasePrice' => 1.0,
    'discountedStorePrice' => 1.0,
    'discountedBasePrice' => 1.0,
    'discountedTaxInclStorePrice' => 1.0,
    'discountedTaxInclBasePrice' => 1.0,
    'weight' => 1,
    'qty' => 1,
    'id' => '1',
    'sku' => 'SKU-1',
    'type' => 'simple',
    'attributes' => [
        ['name' => 'ship_width', 'value' => '14'],
        ['name' => 'ship_height', 'value' => '12'],
        ['name' => 'ship_length', 'value' => '2']
    ],
    'taxPercentage' => 0,
    'discountPercent' => 0,
    'freeShipping' => false,
    'freeMethodWeight' => 1,
    'fixedPrice' => false,
    'fixedWeight' => false,
    'additionalAttributes' => [],
    'legacyAttributes' => [],
    'items' => []
];

$cart->items = [$item];
$cart->sortedItems = [$item];
$rateRequest->cart = $cart;

// Set destination
$destination = new \stdClass();
$destination->country = 'US';
$destination->region = 'SC';
$destination->city = 'lexington';
$destination->street = '941 native rye way';
$destination->zipcode = '29073';
$destination->validateAddress = true;
$rateRequest->destination = $destination;

// Set customer details
$customerDetails = new CustomerDetails();
$rateRequest->customerDetails = $customerDetails;

// Set additional request properties
$rateRequest->cartType = 'STD';
$rateRequest->validateAddress = true;

// Set the ShipperHQ API endpoint
$webServiceURL = 'https://api.shipperhq.com/v1/rates';

try {
    // Send the request and get the response
    $result = $client->sendAndReceive($rateRequest, $webServiceURL);

    // Print the debug information
    echo "Debug Information:\n";
    echo "==================\n";
    echo json_encode($result['debug'], JSON_PRETTY_PRINT) . "\n\n";

    // Print the response
    echo "Response:\n";
    echo "=========\n";
    if (isset($result['result'])) {
        echo json_encode($result['result'], JSON_PRETTY_PRINT) . "\n";
    } else {
        echo "No response received\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
} 