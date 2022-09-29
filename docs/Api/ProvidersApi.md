# Paytrail\Payment\ProvidersApi

All URIs are relative to https://services.paytrail.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGroupedPaymentProviders()**](ProvidersApi.md#getGroupedPaymentProviders) | **GET** /merchants/grouped-payment-providers | List grouped merchant payment methods |
| [**getPaymentProviders()**](ProvidersApi.md#getPaymentProviders) | **GET** /merchants/payment-providers | List merchant payment methods |


## `getGroupedPaymentProviders()`

```php
getGroupedPaymentProviders($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups, $language): \Paytrail\Payment\Model\GroupedPaymentProvidersResponse
```

List grouped merchant payment methods

Similar to the /merchants/payment-providers, but in addition of a flat list of providers, it returns payment group data containing localized names, icon URLs and grouped providers, and a localized text with a link to the terms of payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = GET; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload
$amount = 500; // int | Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased.
$groups = array('groups_example'); // string[] | Comma separated list of payment method groups to include in the reply.
$language = 'language_example'; // string | Language code of the language the terms of payment and the payment group names will be localized in. Defaults to FI if left undefined

try {
    $result = $apiInstance->getGroupedPaymentProviders($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getGroupedPaymentProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |
| **amount** | **int**| Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. | [optional] |
| **groups** | [**string[]**](../Model/string.md)| Comma separated list of payment method groups to include in the reply. | [optional] |
| **language** | **string**| Language code of the language the terms of payment and the payment group names will be localized in. Defaults to FI if left undefined | [optional] |

### Return type

[**\Paytrail\Payment\Model\GroupedPaymentProvidersResponse**](../Model/GroupedPaymentProvidersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentProviders()`

```php
getPaymentProviders($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups): \Paytrail\Payment\Model\BasePaymentMethodProvider[]
```

List merchant payment methods

Returns the payment methods available for merchant without creating a new payment to the system. Useful for displaying payment provider icons during different phases of checkout before finally actually creating the payment request when customer decides to pay

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\ProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = GET; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload
$amount = 500; // int | Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased.
$groups = array('groups_example'); // string[] | Comma separated list of payment method groups to include in the reply.

try {
    $result = $apiInstance->getPaymentProviders($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvidersApi->getPaymentProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |
| **amount** | **int**| Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. | [optional] |
| **groups** | [**string[]**](../Model/string.md)| Comma separated list of payment method groups to include in the reply. | [optional] |

### Return type

[**\Paytrail\Payment\Model\BasePaymentMethodProvider[]**](../Model/BasePaymentMethodProvider.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
