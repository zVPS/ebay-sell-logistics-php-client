<?php
/**
 * PhoneNumberTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell\Logistics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Logistics API
 *
 * Note: This is a (Limited Release) API available only to select developers approved by business units. The Logistics API resources offer the following capabilities: shipping_quote &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package. shipment &ndash; Creates a &quot;shipment&quot; for the selected shipping rate. Call createShippingQuote to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. Select one of the live rates and using its associated rateId, create a &quot;shipment&quot; for the package by calling createFromShippingQuote. Creating a shipment completes an agreement, and the cost of the base service and any added shipping options are summed into the returned totalShippingCost value. This action also generates a shipping label that you can use to ship the package. The total cost of the shipment is incurred when the package is shipped using the supplied shipping label. Important! Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.
 *
 * The version of the OpenAPI document: v1_beta.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Ebay\Sell\Logistics\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * PhoneNumberTest Class Doc Comment
 *
 * @category    Class
 * @description This complex type contains a string field representing a telephone number.
 * @package     Ebay\Sell\Logistics
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class PhoneNumberTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "PhoneNumber"
     */
    public function testPhoneNumber()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "phone_number"
     */
    public function testPropertyPhoneNumber()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
