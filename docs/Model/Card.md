# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Card type, for example ‘Visa’ | [optional]
**partial_pan** | **string** | Last four digits of the card | [optional]
**expire_year** | **string** | Card expiration year | [optional]
**expire_month** | **string** | Card expiration month | [optional]
**cvc_required** | **string** | Whether the CVC is required for paying with this card. Can be one of yes, no or not_tested. | [optional]
**bin** | **string** | First 2 or 6 digits of the card number. (6 MC/VISA, 2 Amex/Diners) | [optional]
**funding** | **string** | credit, debit or unknown | [optional]
**country_code** | **string** | e.g. FI |
**category** | **string** | business, prepaid or unknown | [optional]
**card_fingerprint** | **string** | Identifies a specific card number. Cards with the same PAN but different expiry dates will have the same PAN fingerprint. Hex string of length 64. | [optional]
**pan_fingerprint** | **string** | Identifies a specific card, including the expiry date. Hex string of length 64. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
