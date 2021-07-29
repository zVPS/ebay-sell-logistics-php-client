<?php
/**
 * PurchasedRate
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
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Logistics\Model;

use \ArrayAccess;
use \Ebay\Sell\ObjectSerializer;

/**
 * PurchasedRate Class Doc Comment
 *
 * @category Class
 * @description The \&quot;rate\&quot; that has been selected and purchased for the shipment, as referenced by the &lt;b&gt;rateId&lt;/b&gt; value.
 * @package  Ebay\Sell
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PurchasedRate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PurchasedRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_options' => '\Ebay\Sell\Logistics\Model\AdditionalOption[]',
        'base_shipping_cost' => '\Ebay\Sell\Logistics\Model\Amount',
        'destination_time_zone' => 'string',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'pickup_networks' => 'string[]',
        'pickup_slot_id' => 'string',
        'pickup_type' => 'string',
        'rate_id' => 'string',
        'shipping_carrier_code' => 'string',
        'shipping_carrier_name' => 'string',
        'shipping_quote_id' => 'string',
        'shipping_service_code' => 'string',
        'shipping_service_name' => 'string',
        'total_shipping_cost' => '\Ebay\Sell\Logistics\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_options' => null,
        'base_shipping_cost' => null,
        'destination_time_zone' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'pickup_networks' => null,
        'pickup_slot_id' => null,
        'pickup_type' => null,
        'rate_id' => null,
        'shipping_carrier_code' => null,
        'shipping_carrier_name' => null,
        'shipping_quote_id' => null,
        'shipping_service_code' => null,
        'shipping_service_name' => null,
        'total_shipping_cost' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_options' => 'additionalOptions',
        'base_shipping_cost' => 'baseShippingCost',
        'destination_time_zone' => 'destinationTimeZone',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'pickup_networks' => 'pickupNetworks',
        'pickup_slot_id' => 'pickupSlotId',
        'pickup_type' => 'pickupType',
        'rate_id' => 'rateId',
        'shipping_carrier_code' => 'shippingCarrierCode',
        'shipping_carrier_name' => 'shippingCarrierName',
        'shipping_quote_id' => 'shippingQuoteId',
        'shipping_service_code' => 'shippingServiceCode',
        'shipping_service_name' => 'shippingServiceName',
        'total_shipping_cost' => 'totalShippingCost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_options' => 'setAdditionalOptions',
        'base_shipping_cost' => 'setBaseShippingCost',
        'destination_time_zone' => 'setDestinationTimeZone',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'pickup_networks' => 'setPickupNetworks',
        'pickup_slot_id' => 'setPickupSlotId',
        'pickup_type' => 'setPickupType',
        'rate_id' => 'setRateId',
        'shipping_carrier_code' => 'setShippingCarrierCode',
        'shipping_carrier_name' => 'setShippingCarrierName',
        'shipping_quote_id' => 'setShippingQuoteId',
        'shipping_service_code' => 'setShippingServiceCode',
        'shipping_service_name' => 'setShippingServiceName',
        'total_shipping_cost' => 'setTotalShippingCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_options' => 'getAdditionalOptions',
        'base_shipping_cost' => 'getBaseShippingCost',
        'destination_time_zone' => 'getDestinationTimeZone',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'pickup_networks' => 'getPickupNetworks',
        'pickup_slot_id' => 'getPickupSlotId',
        'pickup_type' => 'getPickupType',
        'rate_id' => 'getRateId',
        'shipping_carrier_code' => 'getShippingCarrierCode',
        'shipping_carrier_name' => 'getShippingCarrierName',
        'shipping_quote_id' => 'getShippingQuoteId',
        'shipping_service_code' => 'getShippingServiceCode',
        'shipping_service_name' => 'getShippingServiceName',
        'total_shipping_cost' => 'getTotalShippingCost'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['additional_options'] = isset($data['additional_options']) ? $data['additional_options'] : null;
        $this->container['base_shipping_cost'] = isset($data['base_shipping_cost']) ? $data['base_shipping_cost'] : null;
        $this->container['destination_time_zone'] = isset($data['destination_time_zone']) ? $data['destination_time_zone'] : null;
        $this->container['max_estimated_delivery_date'] = isset($data['max_estimated_delivery_date']) ? $data['max_estimated_delivery_date'] : null;
        $this->container['min_estimated_delivery_date'] = isset($data['min_estimated_delivery_date']) ? $data['min_estimated_delivery_date'] : null;
        $this->container['pickup_networks'] = isset($data['pickup_networks']) ? $data['pickup_networks'] : null;
        $this->container['pickup_slot_id'] = isset($data['pickup_slot_id']) ? $data['pickup_slot_id'] : null;
        $this->container['pickup_type'] = isset($data['pickup_type']) ? $data['pickup_type'] : null;
        $this->container['rate_id'] = isset($data['rate_id']) ? $data['rate_id'] : null;
        $this->container['shipping_carrier_code'] = isset($data['shipping_carrier_code']) ? $data['shipping_carrier_code'] : null;
        $this->container['shipping_carrier_name'] = isset($data['shipping_carrier_name']) ? $data['shipping_carrier_name'] : null;
        $this->container['shipping_quote_id'] = isset($data['shipping_quote_id']) ? $data['shipping_quote_id'] : null;
        $this->container['shipping_service_code'] = isset($data['shipping_service_code']) ? $data['shipping_service_code'] : null;
        $this->container['shipping_service_name'] = isset($data['shipping_service_name']) ? $data['shipping_service_name'] : null;
        $this->container['total_shipping_cost'] = isset($data['total_shipping_cost']) ? $data['total_shipping_cost'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets additional_options
     *
     * @return \Ebay\Sell\Logistics\Model\AdditionalOption[]|null
     */
    public function getAdditionalOptions()
    {
        return $this->container['additional_options'];
    }

    /**
     * Sets additional_options
     *
     * @param \Ebay\Sell\Logistics\Model\AdditionalOption[]|null $additional_options An list of additional, optional features that have been purchased for the shipment.
     *
     * @return self
     */
    public function setAdditionalOptions($additional_options)
    {
        $this->container['additional_options'] = $additional_options;

        return $this;
    }

    /**
     * Gets base_shipping_cost
     *
     * @return \Ebay\Sell\Logistics\Model\Amount|null
     */
    public function getBaseShippingCost()
    {
        return $this->container['base_shipping_cost'];
    }

    /**
     * Sets base_shipping_cost
     *
     * @param \Ebay\Sell\Logistics\Model\Amount|null $base_shipping_cost base_shipping_cost
     *
     * @return self
     */
    public function setBaseShippingCost($base_shipping_cost)
    {
        $this->container['base_shipping_cost'] = $base_shipping_cost;

        return $this;
    }

    /**
     * Gets destination_time_zone
     *
     * @return string|null
     */
    public function getDestinationTimeZone()
    {
        return $this->container['destination_time_zone'];
    }

    /**
     * Sets destination_time_zone
     *
     * @param string|null $destination_time_zone The time zone of the destination according to Time Zone Database. For example, &quot;America/Los_Angeles&quot;.
     *
     * @return self
     */
    public function setDestinationTimeZone($destination_time_zone)
    {
        $this->container['destination_time_zone'] = $destination_time_zone;

        return $this;
    }

    /**
     * Gets max_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['max_estimated_delivery_date'];
    }

    /**
     * Sets max_estimated_delivery_date
     *
     * @param string|null $max_estimated_delivery_date A string value representing maximum (latest) estimated delivery time, formatted as an ISO 8601 string, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[HH]:[MM]:[SS].[SSS]Z Example: 2018-08-20T07:09:00.000Z
     *
     * @return self
     */
    public function setMaxEstimatedDeliveryDate($max_estimated_delivery_date)
    {
        $this->container['max_estimated_delivery_date'] = $max_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets min_estimated_delivery_date
     *
     * @return string|null
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['min_estimated_delivery_date'];
    }

    /**
     * Sets min_estimated_delivery_date
     *
     * @param string|null $min_estimated_delivery_date A string value representing minimum (earliest) estimated delivery time, formatted as an ISO 8601ISO 8601 UTC string.
     *
     * @return self
     */
    public function setMinEstimatedDeliveryDate($min_estimated_delivery_date)
    {
        $this->container['min_estimated_delivery_date'] = $min_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets pickup_networks
     *
     * @return string[]|null
     */
    public function getPickupNetworks()
    {
        return $this->container['pickup_networks'];
    }

    /**
     * Sets pickup_networks
     *
     * @param string[]|null $pickup_networks A list of pickup networks compatible with the shipping service.
     *
     * @return self
     */
    public function setPickupNetworks($pickup_networks)
    {
        $this->container['pickup_networks'] = $pickup_networks;

        return $this;
    }

    /**
     * Gets pickup_slot_id
     *
     * @return string|null
     */
    public function getPickupSlotId()
    {
        return $this->container['pickup_slot_id'];
    }

    /**
     * Sets pickup_slot_id
     *
     * @param string|null $pickup_slot_id This unique eBay-assigned ID value is returned only if the shipment has been configured for a scheduled pickup.
     *
     * @return self
     */
    public function setPickupSlotId($pickup_slot_id)
    {
        $this->container['pickup_slot_id'] = $pickup_slot_id;

        return $this;
    }

    /**
     * Gets pickup_type
     *
     * @return string|null
     */
    public function getPickupType()
    {
        return $this->container['pickup_type'];
    }

    /**
     * Sets pickup_type
     *
     * @param string|null $pickup_type The type of pickup or drop off configured for the shipment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPickupType($pickup_type)
    {
        $this->container['pickup_type'] = $pickup_type;

        return $this;
    }

    /**
     * Gets rate_id
     *
     * @return string|null
     */
    public function getRateId()
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id
     *
     * @param string|null $rate_id The eBay-generated ID of the shipping rate that the seller has chosen to purchase for the shipment.
     *
     * @return self
     */
    public function setRateId($rate_id)
    {
        $this->container['rate_id'] = $rate_id;

        return $this;
    }

    /**
     * Gets shipping_carrier_code
     *
     * @return string|null
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code
     *
     * @param string|null $shipping_carrier_code The ID code for the carrier that was selected for the package shipment.
     *
     * @return self
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

        return $this;
    }

    /**
     * Gets shipping_carrier_name
     *
     * @return string|null
     */
    public function getShippingCarrierName()
    {
        return $this->container['shipping_carrier_name'];
    }

    /**
     * Sets shipping_carrier_name
     *
     * @param string|null $shipping_carrier_name The name of the shipping carrier.
     *
     * @return self
     */
    public function setShippingCarrierName($shipping_carrier_name)
    {
        $this->container['shipping_carrier_name'] = $shipping_carrier_name;

        return $this;
    }

    /**
     * Gets shipping_quote_id
     *
     * @return string|null
     */
    public function getShippingQuoteId()
    {
        return $this->container['shipping_quote_id'];
    }

    /**
     * Sets shipping_quote_id
     *
     * @param string|null $shipping_quote_id The unique eBay-generated ID of the shipping quote from which the seller selected a shipping rate (rateId).
     *
     * @return self
     */
    public function setShippingQuoteId($shipping_quote_id)
    {
        $this->container['shipping_quote_id'] = $shipping_quote_id;

        return $this;
    }

    /**
     * Gets shipping_service_code
     *
     * @return string|null
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code
     *
     * @param string|null $shipping_service_code String ID code for the shipping service selected for the package shipment. This is a service that the shipping carrier supplies.
     *
     * @return self
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        $this->container['shipping_service_code'] = $shipping_service_code;

        return $this;
    }

    /**
     * Gets shipping_service_name
     *
     * @return string|null
     */
    public function getShippingServiceName()
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name
     *
     * @param string|null $shipping_service_name The name of the shipping service.
     *
     * @return self
     */
    public function setShippingServiceName($shipping_service_name)
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

        return $this;
    }

    /**
     * Gets total_shipping_cost
     *
     * @return \Ebay\Sell\Logistics\Model\Amount|null
     */
    public function getTotalShippingCost()
    {
        return $this->container['total_shipping_cost'];
    }

    /**
     * Sets total_shipping_cost
     *
     * @param \Ebay\Sell\Logistics\Model\Amount|null $total_shipping_cost total_shipping_cost
     *
     * @return self
     */
    public function setTotalShippingCost($total_shipping_cost)
    {
        $this->container['total_shipping_cost'] = $total_shipping_cost;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

