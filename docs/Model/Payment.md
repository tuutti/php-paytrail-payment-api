# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Transaction ID | [optional]
**status** | **string** | Transaction status |
**amount** | **int** |  |
**currency** | **string** |  |
**stamp** | **string** |  |
**reference** | **string** |  |
**created_at** | **string** |  |
**href** | **string** | If transaction is in status &#39;new&#39;, link to the hosted payment gateway | [optional]
**provider** | **string** | If processed, the name of the payment method provider | [optional]
**filing_code** | **string** | If paid, the filing code issued by the payment method provider if any | [optional]
**paid_at** | **string** | Timestamp when the transaction was paid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
