# # Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The amount to refund. Required for normal merchant accounts. SiS aggregate can refund the whole purchase by providing just the amount | [optional]
**refund_stamp** | **string** | Merchant specific unique stamp for the refund | [optional]
**refund_reference** | **string** | Merchant reference for the refund | [optional]
**items** | [**\Paytrail\Payment\Model\RefundItem[]**](RefundItem.md) | Item level refund information for SiS refunds. | [optional]
**callback_urls** | [**\Paytrail\Payment\Model\Callbacks**](Callbacks.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
