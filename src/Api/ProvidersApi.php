<?php
/**
 * ProvidersApi
 * PHP version 7.3
 *
 * @category Class
 * @package  Paytrail\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment API
 *
 * Paytrail Payment API
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Paytrail\Payment\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Paytrail\Payment\ApiException;
use Paytrail\Payment\Configuration;
use Paytrail\Payment\HeaderSelector;
use Paytrail\Payment\ObjectSerializer;

/**
 * ProvidersApi Class Doc Comment
 *
 * @category Class
 * @package  Paytrail\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProvidersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getGroupedPaymentProviders
     *
     * List grouped merchant payment methods
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     * @param  string $language Language code of the language the terms of payment and the payment group names will be localized in. Defaults to FI if left undefined (optional)
     *
     * @throws \Paytrail\Payment\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Paytrail\Payment\Model\GroupedPaymentProvidersResponse|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error
     */
    public function getGroupedPaymentProviders($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null, $language = null)
    {
        list($response) = $this->getGroupedPaymentProvidersWithHttpInfo($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups, $language);
        return $response;
    }

    /**
     * Operation getGroupedPaymentProvidersWithHttpInfo
     *
     * List grouped merchant payment methods
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     * @param  string $language Language code of the language the terms of payment and the payment group names will be localized in. Defaults to FI if left undefined (optional)
     *
     * @throws \Paytrail\Payment\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Paytrail\Payment\Model\GroupedPaymentProvidersResponse|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupedPaymentProvidersWithHttpInfo($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null, $language = null)
    {
        $request = $this->getGroupedPaymentProvidersRequest($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups, $language);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Paytrail\Payment\Model\GroupedPaymentProvidersResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\GroupedPaymentProvidersResponse', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Paytrail\Payment\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\Error', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Paytrail\Payment\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\Error', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Paytrail\Payment\Model\GroupedPaymentProvidersResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $content,
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Paytrail\Payment\Model\GroupedPaymentProvidersResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Paytrail\Payment\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Paytrail\Payment\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getGroupedPaymentProvidersAsync
     *
     * List grouped merchant payment methods
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     * @param  string $language Language code of the language the terms of payment and the payment group names will be localized in. Defaults to FI if left undefined (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupedPaymentProvidersAsync($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null, $language = null)
    {
        return $this->getGroupedPaymentProvidersAsyncWithHttpInfo($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups, $language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGroupedPaymentProvidersAsyncWithHttpInfo
     *
     * List grouped merchant payment methods
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     * @param  string $language Language code of the language the terms of payment and the payment group names will be localized in. Defaults to FI if left undefined (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGroupedPaymentProvidersAsyncWithHttpInfo($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null, $language = null)
    {
        $returnType = '\Paytrail\Payment\Model\GroupedPaymentProvidersResponse';
        $request = $this->getGroupedPaymentProvidersRequest($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups, $language);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getGroupedPaymentProviders'
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     * @param  string $language Language code of the language the terms of payment and the payment group names will be localized in. Defaults to FI if left undefined (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getGroupedPaymentProvidersRequest($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null, $language = null)
    {

        $resourcePath = '/merchants/grouped-payment-providers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($amount !== null) {
            if('form' === 'form' && is_array($amount)) {
                foreach($amount as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['amount'] = $amount;
            }
        }
        // query params
        if (is_array($groups)) {
            $groups = ObjectSerializer::serializeCollection($groups, 'form', true);
        }
        if ($groups !== null) {
            $queryParams['groups'] = $groups;
        }
        // query params
        if ($language !== null) {
            if('form' === 'form' && is_array($language)) {
                foreach($language as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['language'] = $language;
            }
        }

        // header params
        if ($checkout_account !== null) {
            $headerParams['checkout-account'] = ObjectSerializer::toHeaderValue($checkout_account);
        }
        // header params
        if ($checkout_algorithm !== null) {
            $headerParams['checkout-algorithm'] = ObjectSerializer::toHeaderValue($checkout_algorithm);
        }
        // header params
        if ($checkout_method !== null) {
            $headerParams['checkout-method'] = ObjectSerializer::toHeaderValue($checkout_method);
        }
        // header params
        if ($checkout_timestamp !== null) {
            $headerParams['checkout-timestamp'] = ObjectSerializer::toHeaderValue($checkout_timestamp);
        }
        // header params
        if ($checkout_nonce !== null) {
            $headerParams['checkout-nonce'] = ObjectSerializer::toHeaderValue($checkout_nonce);
        }
        // header params
        if ($signature !== null) {
            $headerParams['signature'] = ObjectSerializer::toHeaderValue($signature);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getPaymentProviders
     *
     * List merchant payment methods
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     *
     * @throws \Paytrail\Payment\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Paytrail\Payment\Model\BasePaymentMethodProvider[]|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error
     */
    public function getPaymentProviders($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null)
    {
        list($response) = $this->getPaymentProvidersWithHttpInfo($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups);
        return $response;
    }

    /**
     * Operation getPaymentProvidersWithHttpInfo
     *
     * List merchant payment methods
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     *
     * @throws \Paytrail\Payment\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Paytrail\Payment\Model\BasePaymentMethodProvider[]|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentProvidersWithHttpInfo($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null)
    {
        $request = $this->getPaymentProvidersRequest($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Paytrail\Payment\Model\BasePaymentMethodProvider[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\BasePaymentMethodProvider[]', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Paytrail\Payment\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\Error', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Paytrail\Payment\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\Error', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Paytrail\Payment\Model\BasePaymentMethodProvider[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $content,
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Paytrail\Payment\Model\BasePaymentMethodProvider[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Paytrail\Payment\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Paytrail\Payment\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentProvidersAsync
     *
     * List merchant payment methods
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentProvidersAsync($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null)
    {
        return $this->getPaymentProvidersAsyncWithHttpInfo($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentProvidersAsyncWithHttpInfo
     *
     * List merchant payment methods
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentProvidersAsyncWithHttpInfo($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null)
    {
        $returnType = '\Paytrail\Payment\Model\BasePaymentMethodProvider[]';
        $request = $this->getPaymentProvidersRequest($checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $checkout_nonce, $signature, $amount, $groups);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaymentProviders'
     *
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $checkout_nonce Unique random identifier (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  int $amount Optional amount in minor unit (eg. EUR cents) for the payment providers. Some providers have minimum or maximum amounts that can be purchased. (optional)
     * @param  string[] $groups Comma separated list of payment method groups to include in the reply. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentProvidersRequest($checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $checkout_nonce = null, $signature = null, $amount = null, $groups = null)
    {

        $resourcePath = '/merchants/payment-providers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($amount !== null) {
            if('form' === 'form' && is_array($amount)) {
                foreach($amount as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['amount'] = $amount;
            }
        }
        // query params
        if (is_array($groups)) {
            $groups = ObjectSerializer::serializeCollection($groups, 'form', true);
        }
        if ($groups !== null) {
            $queryParams['groups'] = $groups;
        }

        // header params
        if ($checkout_account !== null) {
            $headerParams['checkout-account'] = ObjectSerializer::toHeaderValue($checkout_account);
        }
        // header params
        if ($checkout_algorithm !== null) {
            $headerParams['checkout-algorithm'] = ObjectSerializer::toHeaderValue($checkout_algorithm);
        }
        // header params
        if ($checkout_method !== null) {
            $headerParams['checkout-method'] = ObjectSerializer::toHeaderValue($checkout_method);
        }
        // header params
        if ($checkout_timestamp !== null) {
            $headerParams['checkout-timestamp'] = ObjectSerializer::toHeaderValue($checkout_timestamp);
        }
        // header params
        if ($checkout_nonce !== null) {
            $headerParams['checkout-nonce'] = ObjectSerializer::toHeaderValue($checkout_nonce);
        }
        // header params
        if ($signature !== null) {
            $headerParams['signature'] = ObjectSerializer::toHeaderValue($signature);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
