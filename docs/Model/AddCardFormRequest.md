# # AddCardFormRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkout_account** | **int** | Merchant ID |
**checkout_algorithm** | **string** | HMAC algorithm |
**checkout_redirect_success_url** | **string** | Merchant&#39;s url for user redirect on successful card addition |
**checkout_redirect_cancel_url** | **string** | Merchant&#39;s url for user redirect on failed card addition |
**checkout_callback_success_url** | **string** | Merchant&#39;s url called on successful card addition | [optional]
**checkout_callback_cancel_url** | **string** | Merchant&#39;s url called on failed card addition | [optional]
**language** | **string** | Alpha-2 language code for the card addition form | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
