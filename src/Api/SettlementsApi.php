<?php
/**
 * SettlementsApi
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Paytrail\Payment\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Paytrail\Payment\ApiException;
use Paytrail\Payment\Configuration;
use Paytrail\Payment\HeaderSelector;
use Paytrail\Payment\ObjectSerializer;

/**
 * SettlementsApi Class Doc Comment
 *
 * @category Class
 * @package  Paytrail\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SettlementsApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listSettlementIds' => [
            'application/json',
        ],
    ];

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
     * Operation listSettlementIds
     *
     * List settlement IDs
     *
     * @param  \DateTime $start_date Filter out settlements created before given date. (optional)
     * @param  \DateTime $end_date Filter out settlements created after given date. (optional)
     * @param  string $bank_reference Only include settlements with the given bank reference (optional)
     * @param  int $limit Limit the number of settlement IDs returned (optional)
     * @param  int $submerchant Get submerchant&#39;s payment report (optional)
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listSettlementIds'] to see the possible values for this operation
     *
     * @throws \Paytrail\Payment\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Paytrail\Payment\Model\SettlementIdItem[]|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error
     */
    public function listSettlementIds($start_date = null, $end_date = null, $bank_reference = null, $limit = null, $submerchant = null, $checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $signature = null, string $contentType = self::contentTypes['listSettlementIds'][0])
    {
        list($response) = $this->listSettlementIdsWithHttpInfo($start_date, $end_date, $bank_reference, $limit, $submerchant, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature, $contentType);
        return $response;
    }

    /**
     * Operation listSettlementIdsWithHttpInfo
     *
     * List settlement IDs
     *
     * @param  \DateTime $start_date Filter out settlements created before given date. (optional)
     * @param  \DateTime $end_date Filter out settlements created after given date. (optional)
     * @param  string $bank_reference Only include settlements with the given bank reference (optional)
     * @param  int $limit Limit the number of settlement IDs returned (optional)
     * @param  int $submerchant Get submerchant&#39;s payment report (optional)
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listSettlementIds'] to see the possible values for this operation
     *
     * @throws \Paytrail\Payment\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Paytrail\Payment\Model\SettlementIdItem[]|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error|\Paytrail\Payment\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function listSettlementIdsWithHttpInfo($start_date = null, $end_date = null, $bank_reference = null, $limit = null, $submerchant = null, $checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $signature = null, string $contentType = self::contentTypes['listSettlementIds'][0])
    {
        $request = $this->listSettlementIdsRequest($start_date, $end_date, $bank_reference, $limit, $submerchant, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature, $contentType);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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
                    if ('\Paytrail\Payment\Model\SettlementIdItem[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Paytrail\Payment\Model\SettlementIdItem[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\SettlementIdItem[]', []),
                        (string) $response->getBody(),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Paytrail\Payment\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Paytrail\Payment\Model\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\Error', []),
                        (string) $response->getBody(),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Paytrail\Payment\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Paytrail\Payment\Model\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\Error', []),
                        (string) $response->getBody(),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Paytrail\Payment\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Paytrail\Payment\Model\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\Error', []),
                        (string) $response->getBody(),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Paytrail\Payment\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Paytrail\Payment\Model\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Paytrail\Payment\Model\Error', []),
                        (string) $response->getBody(),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Paytrail\Payment\Model\SettlementIdItem[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                (string) $response->getBody(),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Paytrail\Payment\Model\SettlementIdItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Paytrail\Payment\Model\Error',
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
                case 404:
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
     * Operation listSettlementIdsAsync
     *
     * List settlement IDs
     *
     * @param  \DateTime $start_date Filter out settlements created before given date. (optional)
     * @param  \DateTime $end_date Filter out settlements created after given date. (optional)
     * @param  string $bank_reference Only include settlements with the given bank reference (optional)
     * @param  int $limit Limit the number of settlement IDs returned (optional)
     * @param  int $submerchant Get submerchant&#39;s payment report (optional)
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listSettlementIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listSettlementIdsAsync($start_date = null, $end_date = null, $bank_reference = null, $limit = null, $submerchant = null, $checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $signature = null, string $contentType = self::contentTypes['listSettlementIds'][0])
    {
        return $this->listSettlementIdsAsyncWithHttpInfo($start_date, $end_date, $bank_reference, $limit, $submerchant, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listSettlementIdsAsyncWithHttpInfo
     *
     * List settlement IDs
     *
     * @param  \DateTime $start_date Filter out settlements created before given date. (optional)
     * @param  \DateTime $end_date Filter out settlements created after given date. (optional)
     * @param  string $bank_reference Only include settlements with the given bank reference (optional)
     * @param  int $limit Limit the number of settlement IDs returned (optional)
     * @param  int $submerchant Get submerchant&#39;s payment report (optional)
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listSettlementIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listSettlementIdsAsyncWithHttpInfo($start_date = null, $end_date = null, $bank_reference = null, $limit = null, $submerchant = null, $checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $signature = null, string $contentType = self::contentTypes['listSettlementIds'][0])
    {
        $returnType = '\Paytrail\Payment\Model\SettlementIdItem[]';
        $request = $this->listSettlementIdsRequest($start_date, $end_date, $bank_reference, $limit, $submerchant, $checkout_account, $checkout_algorithm, $checkout_method, $checkout_timestamp, $signature, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        (string) $response->getBody(),
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
     * Create request for operation 'listSettlementIds'
     *
     * @param  \DateTime $start_date Filter out settlements created before given date. (optional)
     * @param  \DateTime $end_date Filter out settlements created after given date. (optional)
     * @param  string $bank_reference Only include settlements with the given bank reference (optional)
     * @param  int $limit Limit the number of settlement IDs returned (optional)
     * @param  int $submerchant Get submerchant&#39;s payment report (optional)
     * @param  int $checkout_account Merchant ID (optional)
     * @param  string $checkout_algorithm HMAC algorithm (optional)
     * @param  string $checkout_method HTTP method of the request (optional)
     * @param  \DateTime $checkout_timestamp Current timestamp in ISO 8601 format (optional)
     * @param  string $signature HMAC signature calculated over the request headers and payload (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listSettlementIds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listSettlementIdsRequest($start_date = null, $end_date = null, $bank_reference = null, $limit = null, $submerchant = null, $checkout_account = null, $checkout_algorithm = null, $checkout_method = null, $checkout_timestamp = null, $signature = null, string $contentType = self::contentTypes['listSettlementIds'][0])
    {



        if ($bank_reference !== null && strlen($bank_reference) > 20) {
            throw new \InvalidArgumentException('invalid length for "$bank_reference" when calling SettlementsApi.listSettlementIds, must be smaller than or equal to 20.');
        }
        








        $resourcePath = '/settlements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_date,
            'startDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $end_date,
            'endDate', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $bank_reference,
            'bankReference', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($submerchant !== null) {
            $headerParams['submerchant'] = ObjectSerializer::toHeaderValue($submerchant);
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
        if ($signature !== null) {
            $headerParams['signature'] = ObjectSerializer::toHeaderValue($signature);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
