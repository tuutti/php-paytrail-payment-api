# # Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit_price** | **int** | Unit price of an item in currency minor unit, eg. EUR cents. VAT included. |
**units** | **int** | Number of units |
**vat_percentage** | **int** | Item VAT percentage |
**product_code** | **string** | Merchant specific product code |
**delivery_date** | [**\DateTime**](\DateTime.md) | Estimated delivery date | [optional]
**description** | **string** | Merchant specific product description | [optional]
**category** | **string** | Item product category | [optional]
**merchant** | **string** | Submerchant ID. Required for shop-in-shop payments, leave out from normal payments. | [optional]
**stamp** | **string** | Submerchant specific unique stamp. Required for shop-in-shop payments, leave out from normal payments. | [optional]
**reference** | **string** | Submerchant reference for the item. Required for shop-in-shop payments, leave out from normal payments. | [optional]
**order_id** | **string** | Order ID. Used for eg. Collector payments order ID. If not given, merchant reference is used instead. | [optional]
**commission** | [**\Paytrail\Payment\Model\ItemCommission**](ItemCommission.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
