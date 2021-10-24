# # TokenPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stamp** | **string** | Merchant specific unique stamp |
**reference** | **string** | Merchant reference for the payment |
**amount** | **int** | Total amount of the payment (sum of items), VAT included |
**currency** | **string** |  |
**language** | **string** | Alpha-2 language code for the payment process |
**order_id** | **string** | Order ID. Used for eg. Collector payments order ID. If not given, merchant reference is used instead. | [optional]
**items** | [**\Paytrail\Payment\Model\Item[]**](Item.md) |  |
**customer** | [**\Paytrail\Payment\Model\Customer**](Customer.md) |  |
**delivery_address** | [**\Paytrail\Payment\Model\Address**](Address.md) |  | [optional]
**invoicing_address** | [**\Paytrail\Payment\Model\Address**](Address.md) |  | [optional]
**redirect_urls** | [**\Paytrail\Payment\Model\Callbacks**](Callbacks.md) |  |
**callback_urls** | [**\Paytrail\Payment\Model\Callbacks**](Callbacks.md) |  | [optional]
**callback_delay** | **int** | Callback delay in seconds. If callback URLs and delay are provided, callbacks will be called after the delay. | [optional]
**token** | **string** | Payment card token received from request to /tokenization/{checkout-tokenization-id} |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
