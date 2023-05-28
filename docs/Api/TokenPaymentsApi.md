# Paytrail\Payment\TokenPaymentsApi

All URIs are relative to https://services.paytrail.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCardForm()**](TokenPaymentsApi.md#addCardForm) | **POST** /tokenization/addcard-form | Request a redirect to card addition form |
| [**requestTokenForTokenizationId()**](TokenPaymentsApi.md#requestTokenForTokenizationId) | **POST** /tokenization/{checkout-tokenization-id} | Request a card token for given tokenization id |
| [**tokenCitAuthorizationHold()**](TokenPaymentsApi.md#tokenCitAuthorizationHold) | **POST** /payments/token/cit/authorization-hold | Request customer initiated transaction authorization hold on token |
| [**tokenCitCharge()**](TokenPaymentsApi.md#tokenCitCharge) | **POST** /payments/token/cit/charge | Request customer initiated transaction charge on token |
| [**tokenCommit()**](TokenPaymentsApi.md#tokenCommit) | **POST** /payments/{transactionId}/token/commit | Request committing (charging) of previously created authorization hold on token |
| [**tokenMitAuthorizationHold()**](TokenPaymentsApi.md#tokenMitAuthorizationHold) | **POST** /payments/token/mit/authorization-hold | Request merchant initiated transaction authorization hold on token |
| [**tokenMitCharge()**](TokenPaymentsApi.md#tokenMitCharge) | **POST** /payments/token/mit/charge | Request merchant initiated transaction charge on token |
| [**tokenRevert()**](TokenPaymentsApi.md#tokenRevert) | **POST** /payments/{transactionId}/token/revert | Revert (removal) of previously created authorization hold on token |


## `addCardForm()`

```php
addCardForm($add_card_form_request)
```

Request a redirect to card addition form

Request a redirect to card addition form. This will redirect user to the card addition form, then back to Checkout servers, and finally to merchant's redirect url.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\TokenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$add_card_form_request = new \Paytrail\Payment\Model\AddCardFormRequest(); // \Paytrail\Payment\Model\AddCardFormRequest | Add card payload

try {
    $apiInstance->addCardForm($add_card_form_request);
} catch (Exception $e) {
    echo 'Exception when calling TokenPaymentsApi->addCardForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_card_form_request** | [**\Paytrail\Payment\Model\AddCardFormRequest**](../Model/AddCardFormRequest.md)| Add card payload | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestTokenForTokenizationId()`

```php
requestTokenForTokenizationId($checkout_tokenization_id, $get_token_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $checkout_tokenization_id2, $signature): \Paytrail\Payment\Model\TokenizationRequestResponse
```

Request a card token for given tokenization id

Use checkout-tokenization-id received from /tokenization/addcard-form redirect to request a token which can be used for payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\TokenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$checkout_tokenization_id = 93ee8d18-10db-410b-92ac-7d6e49369ce3; // string | Tokenization id received from /tokenization/addcard-form
$get_token_request = new \Paytrail\Payment\Model\GetTokenRequest(); // \Paytrail\Payment\Model\GetTokenRequest | Tokenization request payload
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$checkout_tokenization_id2 = 93ee8d18-10db-410b-92ac-7d6e49369ce3; // string | Tokenization id received from /tokenization/addcard-form
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->requestTokenForTokenizationId($checkout_tokenization_id, $get_token_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $checkout_tokenization_id2, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenPaymentsApi->requestTokenForTokenizationId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_tokenization_id** | **string**| Tokenization id received from /tokenization/addcard-form | |
| **get_token_request** | [**\Paytrail\Payment\Model\GetTokenRequest**](../Model/GetTokenRequest.md)| Tokenization request payload | |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **checkout_tokenization_id2** | **string**| Tokenization id received from /tokenization/addcard-form | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |

### Return type

[**\Paytrail\Payment\Model\TokenizationRequestResponse**](../Model/TokenizationRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenCitAuthorizationHold()`

```php
tokenCitAuthorizationHold($token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature): \Paytrail\Payment\Model\TokenMITPaymentResponse
```

Request customer initiated transaction authorization hold on token

Request customer initiated transaction authorization hold on token. CIT authorization holds can sometimes require further 3DS authentication step-up. See detailed documentation at https://checkoutfinland.github.io/psp-api/#/?id=customer-initiated-transactions-cit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\TokenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_payment_request = new \Paytrail\Payment\Model\TokenPaymentRequest(); // \Paytrail\Payment\Model\TokenPaymentRequest | CIT authorization hold payload
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->tokenCitAuthorizationHold($token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenPaymentsApi->tokenCitAuthorizationHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_payment_request** | [**\Paytrail\Payment\Model\TokenPaymentRequest**](../Model/TokenPaymentRequest.md)| CIT authorization hold payload | |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |

### Return type

[**\Paytrail\Payment\Model\TokenMITPaymentResponse**](../Model/TokenMITPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenCitCharge()`

```php
tokenCitCharge($token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature): \Paytrail\Payment\Model\TokenMITPaymentResponse
```

Request customer initiated transaction charge on token

Request customer initiated transaction charge on token. CIT charges can sometimes require further 3DS authentication step-up. See detailed documentation at https://checkoutfinland.github.io/psp-api/#/?id=customer-initiated-transactions-cit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\TokenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_payment_request = new \Paytrail\Payment\Model\TokenPaymentRequest(); // \Paytrail\Payment\Model\TokenPaymentRequest | CIT Charge payload
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->tokenCitCharge($token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenPaymentsApi->tokenCitCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_payment_request** | [**\Paytrail\Payment\Model\TokenPaymentRequest**](../Model/TokenPaymentRequest.md)| CIT Charge payload | |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |

### Return type

[**\Paytrail\Payment\Model\TokenMITPaymentResponse**](../Model/TokenMITPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenCommit()`

```php
tokenCommit($transaction_id, $token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_transaction_id, $checkout_timestamp, $checkout_nonce, $signature): \Paytrail\Payment\Model\TokenMITPaymentResponse
```

Request committing (charging) of previously created authorization hold on token

Request committing of previously created authorization hold. The final amount committed can either equal or be less than the authorization hold. The committed amount may not exceed the authorization hold. The final items may differ from the ones used when creating the authorization hold.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\TokenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 93ee8d18-10db-410b-92ac-7d6e49369ce3; // string | The transaction ID
$token_payment_request = new \Paytrail\Payment\Model\TokenPaymentRequest(); // \Paytrail\Payment\Model\TokenPaymentRequest | CIT commit payload
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_transaction_id = 93ee8d18-10db-410b-92ac-7d6e49369ce3; // string | The same transaction ID as in route
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->tokenCommit($transaction_id, $token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_transaction_id, $checkout_timestamp, $checkout_nonce, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenPaymentsApi->tokenCommit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| The transaction ID | |
| **token_payment_request** | [**\Paytrail\Payment\Model\TokenPaymentRequest**](../Model/TokenPaymentRequest.md)| CIT commit payload | |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_transaction_id** | **string**| The same transaction ID as in route | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |

### Return type

[**\Paytrail\Payment\Model\TokenMITPaymentResponse**](../Model/TokenMITPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenMitAuthorizationHold()`

```php
tokenMitAuthorizationHold($token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature): \Paytrail\Payment\Model\TokenMITPaymentResponse
```

Request merchant initiated transaction authorization hold on token

Request merchant initiated transaction authorization hold on token. This method should be used when creating an authorization hold on the customer's card in a context, where the customer is not actively participating in the transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\TokenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_payment_request = new \Paytrail\Payment\Model\TokenPaymentRequest(); // \Paytrail\Payment\Model\TokenPaymentRequest | MIT Charge payload
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->tokenMitAuthorizationHold($token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenPaymentsApi->tokenMitAuthorizationHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_payment_request** | [**\Paytrail\Payment\Model\TokenPaymentRequest**](../Model/TokenPaymentRequest.md)| MIT Charge payload | |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |

### Return type

[**\Paytrail\Payment\Model\TokenMITPaymentResponse**](../Model/TokenMITPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenMitCharge()`

```php
tokenMitCharge($token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature): \Paytrail\Payment\Model\TokenMITPaymentResponse
```

Request merchant initiated transaction charge on token

Request merchant initiated transaction charge on token. This method should be used when charging the customer's card in a context, where the customer is not actively participating in the transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\TokenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_payment_request = new \Paytrail\Payment\Model\TokenPaymentRequest(); // \Paytrail\Payment\Model\TokenPaymentRequest | MIT Charge payload
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->tokenMitCharge($token_payment_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenPaymentsApi->tokenMitCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_payment_request** | [**\Paytrail\Payment\Model\TokenPaymentRequest**](../Model/TokenPaymentRequest.md)| MIT Charge payload | |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |

### Return type

[**\Paytrail\Payment\Model\TokenMITPaymentResponse**](../Model/TokenMITPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenRevert()`

```php
tokenRevert($transaction_id, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_transaction_id, $checkout_timestamp, $checkout_nonce, $signature): \Paytrail\Payment\Model\TokenMITPaymentResponse
```

Revert (removal) of previously created authorization hold on token

Request committing of previously created authorization hold. A successful revert will remove the authorization hold from the payer's bank account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\TokenPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 93ee8d18-10db-410b-92ac-7d6e49369ce3; // string | The transaction ID
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_transaction_id = 93ee8d18-10db-410b-92ac-7d6e49369ce3; // string | The same transaction ID as in route
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$checkout_nonce = 39da40b8-5fb0-499c-869d-35e575b9a6cd; // string | Unique random identifier
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->tokenRevert($transaction_id, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_transaction_id, $checkout_timestamp, $checkout_nonce, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenPaymentsApi->tokenRevert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| The transaction ID | |
| **checkout_account** | **int**| Merchant ID | [optional] |
| **checkout_algorithm** | **string**| HMAC algorithm | [optional] |
| **checkout_method** | **string**| HTTP method of the request | [optional] |
| **checkout_transaction_id** | **string**| The same transaction ID as in route | [optional] |
| **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional] |
| **checkout_nonce** | **string**| Unique random identifier | [optional] |
| **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional] |

### Return type

[**\Paytrail\Payment\Model\TokenMITPaymentResponse**](../Model/TokenMITPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
