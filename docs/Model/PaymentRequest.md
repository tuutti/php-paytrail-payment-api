# # PaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stamp** | **string** | Merchant specific unique stamp |
**reference** | **string** | Merchant reference for the payment |
**amount** | **int** | Total amount of the payment (sum of items), VAT should be included in amount unless &#x60;usePricesWithoutVat&#x60; is set to true |
**currency** | **string** |  |
**language** | **string** | Alpha-2 language code for the payment process |
**order_id** | **string** | Order ID. Used for eg. Collector payments order ID. If not given, merchant reference is used instead. | [optional]
**items** | [**\Paytrail\Payment\Model\Item[]**](Item.md) |  |
**customer** | [**\Paytrail\Payment\Model\Customer**](Customer.md) |  |
**delivery_address** | [**\Paytrail\Payment\Model\Address**](Address.md) |  | [optional]
**invoicing_address** | [**\Paytrail\Payment\Model\Address**](Address.md) |  | [optional]
**manual_invoice_activation** | **bool** | If paid with invoice payment method, the invoice will not be activated automatically immediately. Currently only supported with Collector. | [optional]
**redirect_urls** | [**\Paytrail\Payment\Model\Callbacks**](Callbacks.md) |  |
**callback_urls** | [**\Paytrail\Payment\Model\Callbacks**](Callbacks.md) |  | [optional]
**callback_delay** | **int** | Callback delay in seconds. If callback URLs and delay are provided, callbacks will be called after the delay. | [optional]
**groups** | **string[]** | Optionally return only payment methods for selected groups | [optional]
**use_prices_without_vat** | **bool** | If true, &#x60;amount&#x60; and &#x60;items.unitPrice&#x60; should be sent to API without VAT, and final VAT-included prices are calculated by Paytrail&#39;s system (with prices rounded to closest cent). Also, when true, items must be included. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
