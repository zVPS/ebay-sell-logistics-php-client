# # ShippingQuoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orders** | [**\Ebay\Sell\Logistics\Model\Order[]**](Order.md) | A seller-defined list that contains information about the orders in the package. This allows sellers to include information about the line items in the package with the shipment information. A package can contain any number of line items from one or more orders, providing they all ship in the same package. Maximum list size: 10 | [optional]
**package_specification** | [**\Ebay\Sell\Logistics\Model\PackageSpecification**](PackageSpecification.md) |  | [optional]
**ship_from** | [**\Ebay\Sell\Logistics\Model\Contact**](Contact.md) |  | [optional]
**ship_to** | [**\Ebay\Sell\Logistics\Model\Contact**](Contact.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
