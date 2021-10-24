# # PaymentRequestResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Checkout assigned transaction ID for the payment. |
**href** | **string** | Unique URL to hosted payment gateway |
**terms** | **string** | Text containing a link to the terms of payment | [optional]
**groups** | [**\Paytrail\Payment\Model\PaymentMethodGroupData[]**](PaymentMethodGroupData.md) | Contains data about the payment method groups. Contains only the groups found in the response&#39;s providers. | [optional]
**providers** | [**\Paytrail\Payment\Model\PaymentMethodProvider[]**](PaymentMethodProvider.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
