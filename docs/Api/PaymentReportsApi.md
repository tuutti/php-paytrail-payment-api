# Paytrail\Payment\PaymentReportsApi

All URIs are relative to https://services.paytrail.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**requestPaymentReport()**](PaymentReportsApi.md#requestPaymentReport) | **POST** /payments/report | Request a payment report
[**requestPaymentReportBySettlementId()**](PaymentReportsApi.md#requestPaymentReportBySettlementId) | **POST** /settlements/{settlementId}/payments/report | Request a report of payments contained in a given settlement


## `requestPaymentReport()`

```php
requestPaymentReport($payment_report_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature): \Paytrail\Payment\Model\PaymentReportRequestResponse
```

Request a payment report

Request a report of payments to be sent to the given callback url. Callback schema defined in PaymentReportCallbackJSON.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\PaymentReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payment_report_request = new \Paytrail\Payment\Model\PaymentReportRequest(); // \Paytrail\Payment\Model\PaymentReportRequest | Payment body payload
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->requestPaymentReport($payment_report_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentReportsApi->requestPaymentReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_report_request** | [**\Paytrail\Payment\Model\PaymentReportRequest**](../Model/PaymentReportRequest.md)| Payment body payload |
 **checkout_account** | **int**| Merchant ID | [optional]
 **checkout_algorithm** | **string**| HMAC algorithm | [optional]
 **checkout_method** | **string**| HTTP method of the request | [optional]
 **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional]
 **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional]

### Return type

[**\Paytrail\Payment\Model\PaymentReportRequestResponse**](../Model/PaymentReportRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestPaymentReportBySettlementId()`

```php
requestPaymentReportBySettlementId($settlement_id, $payment_report_by_settlement_id_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature): \Paytrail\Payment\Model\PaymentReportRequestResponse
```

Request a report of payments contained in a given settlement

Request a report of payments contained in a given settlement to be sent to the given callback url. Callback schema defined in PaymentReportCallbackJSON.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Paytrail\Payment\Api\PaymentReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settlement_id = 2397548234; // string | Settlement ID
$payment_report_by_settlement_id_request = new \Paytrail\Payment\Model\PaymentReportBySettlementIdRequest(); // \Paytrail\Payment\Model\PaymentReportBySettlementIdRequest | Payment body payload
$checkout_account = 375917; // int | Merchant ID
$checkout_algorithm = sha512; // string | HMAC algorithm
$checkout_method = POST; // string | HTTP method of the request
$checkout_timestamp = 2018-08-08T10:10:59Z; // \DateTime | Current timestamp in ISO 8601 format
$signature = 'signature_example'; // string | HMAC signature calculated over the request headers and payload

try {
    $result = $apiInstance->requestPaymentReportBySettlementId($settlement_id, $payment_report_by_settlement_id_request, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentReportsApi->requestPaymentReportBySettlementId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settlement_id** | **string**| Settlement ID |
 **payment_report_by_settlement_id_request** | [**\Paytrail\Payment\Model\PaymentReportBySettlementIdRequest**](../Model/PaymentReportBySettlementIdRequest.md)| Payment body payload |
 **checkout_account** | **int**| Merchant ID | [optional]
 **checkout_algorithm** | **string**| HMAC algorithm | [optional]
 **checkout_method** | **string**| HTTP method of the request | [optional]
 **checkout_timestamp** | **\DateTime**| Current timestamp in ISO 8601 format | [optional]
 **signature** | **string**| HMAC signature calculated over the request headers and payload | [optional]

### Return type

[**\Paytrail\Payment\Model\PaymentReportRequestResponse**](../Model/PaymentReportRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
