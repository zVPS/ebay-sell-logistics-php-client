# OpenAPIClient-php

Note: This is a (Limited Release) API available only to select developers approved by business units. The Logistics API resources offer the following capabilities: shipping_quote &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package. shipment &ndash; Creates a &quot;shipment&quot; for the selected shipping rate. Call createShippingQuote to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. Select one of the live rates and using its associated rateId, create a &quot;shipment&quot; for the package by calling createFromShippingQuote. Creating a shipment completes an agreement, and the cost of the base service and any added shipping options are summed into the returned totalShippingCost value. This action also generates a shipping label that you can use to ship the package. The total cost of the shipment is incurred when the package is shipped using the supplied shipping label. Important! Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github/zvps/ebay-sell-logistics-php-client.git"
    }
  ],
  "require": {
    "zvps/ebay-sell-logistics-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 'shipment_id_example'; // string | This path parameter specifies the unique eBay-assigned ID of the shipment to be canceled. The shipmentId value is generated and returned by a call to createFromShippingQuote.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/logistics/v1_beta*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ShipmentApi* | [**cancelShipment**](docs/Api/ShipmentApi.md#cancelshipment) | **POST** /shipment/{shipmentId}/cancel | 
*ShipmentApi* | [**createFromShippingQuote**](docs/Api/ShipmentApi.md#createfromshippingquote) | **POST** /shipment/create_from_shipping_quote | 
*ShipmentApi* | [**downloadLabelFile**](docs/Api/ShipmentApi.md#downloadlabelfile) | **GET** /shipment/{shipmentId}/download_label_file | 
*ShipmentApi* | [**getShipment**](docs/Api/ShipmentApi.md#getshipment) | **GET** /shipment/{shipmentId} | 
*ShippingQuoteApi* | [**createShippingQuote**](docs/Api/ShippingQuoteApi.md#createshippingquote) | **POST** /shipping_quote | 
*ShippingQuoteApi* | [**getShippingQuote**](docs/Api/ShippingQuoteApi.md#getshippingquote) | **GET** /shipping_quote/{shippingQuoteId} | 

## Models

- [AdditionalOption](docs/Model/AdditionalOption.md)
- [Amount](docs/Model/Amount.md)
- [Contact](docs/Model/Contact.md)
- [ContactAddress](docs/Model/ContactAddress.md)
- [CreateShipmentFromQuoteRequest](docs/Model/CreateShipmentFromQuoteRequest.md)
- [Dimensions](docs/Model/Dimensions.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Order](docs/Model/Order.md)
- [PackageSpecification](docs/Model/PackageSpecification.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PickupSlot](docs/Model/PickupSlot.md)
- [PurchasedRate](docs/Model/PurchasedRate.md)
- [Rate](docs/Model/Rate.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentCancellation](docs/Model/ShipmentCancellation.md)
- [ShippingQuote](docs/Model/ShippingQuote.md)
- [ShippingQuoteRequest](docs/Model/ShippingQuoteRequest.md)
- [Weight](docs/Model/Weight.md)

## Authorization

### Authorization Code

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.logistics**: This scope would allow signed in user to access Logistics information.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1_beta.0.0`
    - Package version: `5.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
