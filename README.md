# php-paytrail-payment-api

Paytrail Payment API


For more information, please visit [https://github.com/paytrail/api-documentation/issues](https://github.com/paytrail/api-documentation/issues).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/tuutti/php-paytrail-payments-api.git"
    }
  ],
  "require": {
    "tuutti/php-paytrail-payments-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/php-paytrail-payment-api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://services.paytrail.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PaymentReportsApi* | [**requestPaymentReport**](docs/Api/PaymentReportsApi.md#requestpaymentreport) | **POST** /payments/report | Request a payment report
*PaymentReportsApi* | [**requestPaymentReportBySettlementId**](docs/Api/PaymentReportsApi.md#requestpaymentreportbysettlementid) | **POST** /settlements/{settlementId}/payments/report | Request a report of payments contained in a given settlement
*PaymentsApi* | [**activateInvoiceByTransactionId**](docs/Api/PaymentsApi.md#activateinvoicebytransactionid) | **POST** /payments/{transactionId}/activate-invoice | Activate invoice
*PaymentsApi* | [**createPayment**](docs/Api/PaymentsApi.md#createpayment) | **POST** /payments | Create a new open payment
*PaymentsApi* | [**getGroupedPaymentProviders**](docs/Api/PaymentsApi.md#getgroupedpaymentproviders) | **GET** /merchants/grouped-payment-providers | List grouped merchant payment methods
*PaymentsApi* | [**getPaymentByTransactionId**](docs/Api/PaymentsApi.md#getpaymentbytransactionid) | **GET** /payments/{transactionId} | Get a payment by Checkout transaction ID
*PaymentsApi* | [**getPaymentProviders**](docs/Api/PaymentsApi.md#getpaymentproviders) | **GET** /merchants/payment-providers | List merchant payment methods
*PaymentsApi* | [**refundPaymentByTransactionId**](docs/Api/PaymentsApi.md#refundpaymentbytransactionid) | **POST** /payments/{transactionId}/refund | Refund a payment
*ProvidersApi* | [**getGroupedPaymentProviders**](docs/Api/ProvidersApi.md#getgroupedpaymentproviders) | **GET** /merchants/grouped-payment-providers | List grouped merchant payment methods
*ProvidersApi* | [**getPaymentProviders**](docs/Api/ProvidersApi.md#getpaymentproviders) | **GET** /merchants/payment-providers | List merchant payment methods
*SettlementsApi* | [**listSettlementIds**](docs/Api/SettlementsApi.md#listsettlementids) | **GET** /settlements | List settlement IDs
*TokenPaymentsApi* | [**addCardForm**](docs/Api/TokenPaymentsApi.md#addcardform) | **POST** /tokenization/addcard-form | Request a redirect to card addition form
*TokenPaymentsApi* | [**requestTokenForTokenizationId**](docs/Api/TokenPaymentsApi.md#requesttokenfortokenizationid) | **POST** /tokenization/{checkout-tokenization-id} | Request a card token for given tokenization id
*TokenPaymentsApi* | [**tokenCitAuthorizationHold**](docs/Api/TokenPaymentsApi.md#tokencitauthorizationhold) | **POST** /payments/token/cit/authorization-hold | Request customer initiated transaction authorization hold on token
*TokenPaymentsApi* | [**tokenCitCharge**](docs/Api/TokenPaymentsApi.md#tokencitcharge) | **POST** /payments/token/cit/charge | Request customer initiated transaction charge on token
*TokenPaymentsApi* | [**tokenCommit**](docs/Api/TokenPaymentsApi.md#tokencommit) | **POST** /payments/{transactionId}/token/commit | Request committing (charging) of previously created authorization hold on token
*TokenPaymentsApi* | [**tokenMitAuthorizationHold**](docs/Api/TokenPaymentsApi.md#tokenmitauthorizationhold) | **POST** /payments/token/mit/authorization-hold | Request merchant initiated transaction authorization hold on token
*TokenPaymentsApi* | [**tokenMitCharge**](docs/Api/TokenPaymentsApi.md#tokenmitcharge) | **POST** /payments/token/mit/charge | Request merchant initiated transaction charge on token
*TokenPaymentsApi* | [**tokenRevert**](docs/Api/TokenPaymentsApi.md#tokenrevert) | **POST** /payments/{transactionId}/token/revert | Revert (removal) of previously created authorization hold on token

## Models

- [ActivateInvoiceResponse](docs/Model/ActivateInvoiceResponse.md)
- [AddCardFormRequest](docs/Model/AddCardFormRequest.md)
- [Address](docs/Model/Address.md)
- [BasePaymentMethodProvider](docs/Model/BasePaymentMethodProvider.md)
- [Callbacks](docs/Model/Callbacks.md)
- [Card](docs/Model/Card.md)
- [Customer](docs/Model/Customer.md)
- [Error](docs/Model/Error.md)
- [GroupedPaymentProvidersResponse](docs/Model/GroupedPaymentProvidersResponse.md)
- [Item](docs/Model/Item.md)
- [ItemCommission](docs/Model/ItemCommission.md)
- [Payment](docs/Model/Payment.md)
- [PaymentMethodGroupData](docs/Model/PaymentMethodGroupData.md)
- [PaymentMethodGroupDataWithProviders](docs/Model/PaymentMethodGroupDataWithProviders.md)
- [PaymentMethodGroupDataWithProvidersAllOf](docs/Model/PaymentMethodGroupDataWithProvidersAllOf.md)
- [PaymentMethodProvider](docs/Model/PaymentMethodProvider.md)
- [PaymentMethodProviderAllOf](docs/Model/PaymentMethodProviderAllOf.md)
- [PaymentMethodProviderAllOfParameters](docs/Model/PaymentMethodProviderAllOfParameters.md)
- [PaymentReportBySettlementIdRequest](docs/Model/PaymentReportBySettlementIdRequest.md)
- [PaymentReportCallbackJSON](docs/Model/PaymentReportCallbackJSON.md)
- [PaymentReportRequest](docs/Model/PaymentReportRequest.md)
- [PaymentReportRequestResponse](docs/Model/PaymentReportRequestResponse.md)
- [PaymentRequest](docs/Model/PaymentRequest.md)
- [PaymentRequestResponse](docs/Model/PaymentRequestResponse.md)
- [Refund](docs/Model/Refund.md)
- [RefundItem](docs/Model/RefundItem.md)
- [RefundResponse](docs/Model/RefundResponse.md)
- [SettlementIdItem](docs/Model/SettlementIdItem.md)
- [TokenCITPaymentResponse](docs/Model/TokenCITPaymentResponse.md)
- [TokenCustomerDetails](docs/Model/TokenCustomerDetails.md)
- [TokenMITPaymentResponse](docs/Model/TokenMITPaymentResponse.md)
- [TokenPaymentRequest](docs/Model/TokenPaymentRequest.md)
- [TokenizationRequestResponse](docs/Model/TokenizationRequestResponse.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
