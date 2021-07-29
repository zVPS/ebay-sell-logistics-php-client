<?php
/**
 * ShippingQuoteTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell
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

namespace Ebay\Sell\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * ShippingQuoteTest Class Doc Comment
 *
 * @category    Class
 * @description This complex type describes a \&quot;shipping quote,\&quot; which contains the parameters for a package shipment. The shipping quote contains a list of \&quot;live quotes\&quot; or &lt;i&gt;rates&lt;/i&gt; for the shipment. Rates are offerd by a carrier for a particular service, of set of services, for shipping the package. Included in the shipping quote are the package specifications, the shipment&#39;s origin and destination addresses, and the shipping parameters specified by the seller.  &lt;br&gt;&lt;br&gt;Use the &lt;b&gt;rateId&lt;/b&gt; value to select the specific service you want when you create a shipment by calling &lt;b&gt;createFromShippingQuote&lt;/b&gt;.
 * @package     Ebay\Sell
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ShippingQuoteTest extends TestCase
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
     * Test "ShippingQuote"
     */
    public function testShippingQuote()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "creation_date"
     */
    public function testPropertyCreationDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "expiration_date"
     */
    public function testPropertyExpirationDate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "orders"
     */
    public function testPropertyOrders()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "package_specification"
     */
    public function testPropertyPackageSpecification()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "rates"
     */
    public function testPropertyRates()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "ship_from"
     */
    public function testPropertyShipFrom()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "shipping_quote_id"
     */
    public function testPropertyShippingQuoteId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "ship_to"
     */
    public function testPropertyShipTo()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "warnings"
     */
    public function testPropertyWarnings()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}