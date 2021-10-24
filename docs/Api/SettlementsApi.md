# Paytrail\Payment\SettlementsApi

All URIs are relative to https://services.paytrail.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listSettlementIds()**](SettlementsApi.md#listSettlementIds) | **GET** /settlements | List settlement IDs


## `listSettlementIds()`

```php
listSettlementIds($start_date, $end_date, $bank_reference, $limit, $submerchant, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature): \Paytrail\Payment\Model\SettlementIdItem[]
```

List settlement IDs

Returns settlement IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\SettlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = 2019-01-01; // \DateTime | Filter out settlements created before given date.
$end_date = 2019-01-01; // \DateTime | Filter out settlements created after given date.
$bank_reference = 1234567890-1111; // string | Only include settlements with the given bank reference
$limit = 1; // int | Limit the number of settlement IDs returned
$submerchant = 695874; // int | Get submerchant's payment report
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->listSettlementIds($start_date, $end_date, $bank_reference, $limit, $submerchant, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementsApi->listSettlementIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Filter out settlements created before given date. | [optional]
 **end_date** | **\DateTime**| Filter out settlements created after given date. | [optional]
 **bank_reference** | **string**| Only include settlements with the given bank reference | [optional]
 **limit** | **int**| Limit the number of settlement IDs returned | [optional]
 **submerchant** | **int**| Get submerchant&#39;s payment report | [optional]
 **checkout_account** | **int**| Merchant ID | [optional]
 **checkout_algorithm** | **string**| HMAC algorithm | [optional]
 **checkout_method** | **string**| HTTP method of the request | [optional]
 **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional]
 **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional]

### Return type

[**\Paytrail\Payment\Model\SettlementIdItem[]**](../Model/SettlementIdItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
