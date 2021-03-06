<?php
/**
 * PaymentRequest
 *
 * PHP version 7.2
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

namespace Paytrail\Payment\Model;

use \ArrayAccess;
use \Paytrail\Payment\ObjectSerializer;

/**
 * PaymentRequest Class Doc Comment
 *
 * @category Class
 * @description Payment request payload
 * @package  Paytrail\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stamp' => 'string',
        'reference' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'language' => 'string',
        'order_id' => 'string',
        'items' => '\Paytrail\Payment\Model\Item[]',
        'customer' => '\Paytrail\Payment\Model\Customer',
        'delivery_address' => '\Paytrail\Payment\Model\Address',
        'invoicing_address' => '\Paytrail\Payment\Model\Address',
        'manual_invoice_activation' => 'bool',
        'redirect_urls' => '\Paytrail\Payment\Model\Callbacks',
        'callback_urls' => '\Paytrail\Payment\Model\Callbacks',
        'callback_delay' => 'int',
        'groups' => 'string[]',
        'use_prices_without_vat' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'stamp' => null,
        'reference' => null,
        'amount' => 'int64',
        'currency' => null,
        'language' => null,
        'order_id' => null,
        'items' => null,
        'customer' => null,
        'delivery_address' => null,
        'invoicing_address' => null,
        'manual_invoice_activation' => null,
        'redirect_urls' => null,
        'callback_urls' => null,
        'callback_delay' => null,
        'groups' => null,
        'use_prices_without_vat' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'stamp' => 'stamp',
        'reference' => 'reference',
        'amount' => 'amount',
        'currency' => 'currency',
        'language' => 'language',
        'order_id' => 'orderId',
        'items' => 'items',
        'customer' => 'customer',
        'delivery_address' => 'deliveryAddress',
        'invoicing_address' => 'invoicingAddress',
        'manual_invoice_activation' => 'manualInvoiceActivation',
        'redirect_urls' => 'redirectUrls',
        'callback_urls' => 'callbackUrls',
        'callback_delay' => 'callbackDelay',
        'groups' => 'groups',
        'use_prices_without_vat' => 'usePricesWithoutVat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stamp' => 'setStamp',
        'reference' => 'setReference',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'language' => 'setLanguage',
        'order_id' => 'setOrderId',
        'items' => 'setItems',
        'customer' => 'setCustomer',
        'delivery_address' => 'setDeliveryAddress',
        'invoicing_address' => 'setInvoicingAddress',
        'manual_invoice_activation' => 'setManualInvoiceActivation',
        'redirect_urls' => 'setRedirectUrls',
        'callback_urls' => 'setCallbackUrls',
        'callback_delay' => 'setCallbackDelay',
        'groups' => 'setGroups',
        'use_prices_without_vat' => 'setUsePricesWithoutVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stamp' => 'getStamp',
        'reference' => 'getReference',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'language' => 'getLanguage',
        'order_id' => 'getOrderId',
        'items' => 'getItems',
        'customer' => 'getCustomer',
        'delivery_address' => 'getDeliveryAddress',
        'invoicing_address' => 'getInvoicingAddress',
        'manual_invoice_activation' => 'getManualInvoiceActivation',
        'redirect_urls' => 'getRedirectUrls',
        'callback_urls' => 'getCallbackUrls',
        'callback_delay' => 'getCallbackDelay',
        'groups' => 'getGroups',
        'use_prices_without_vat' => 'getUsePricesWithoutVat'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const CURRENCY_EUR = 'EUR';
    const LANGUAGE_FI = 'FI';
    const LANGUAGE_SV = 'SV';
    const LANGUAGE_EN = 'EN';
    const GROUPS_MOBILE = 'mobile';
    const GROUPS_BANK = 'bank';
    const GROUPS_CREDITCARD = 'creditcard';
    const GROUPS_CREDIT = 'credit';
    const GROUPS_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_EUR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_FI,
            self::LANGUAGE_SV,
            self::LANGUAGE_EN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupsAllowableValues()
    {
        return [
            self::GROUPS_MOBILE,
            self::GROUPS_BANK,
            self::GROUPS_CREDITCARD,
            self::GROUPS_CREDIT,
            self::GROUPS_OTHER,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['stamp'] = $data['stamp'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['delivery_address'] = $data['delivery_address'] ?? null;
        $this->container['invoicing_address'] = $data['invoicing_address'] ?? null;
        $this->container['manual_invoice_activation'] = $data['manual_invoice_activation'] ?? null;
        $this->container['redirect_urls'] = $data['redirect_urls'] ?? null;
        $this->container['callback_urls'] = $data['callback_urls'] ?? null;
        $this->container['callback_delay'] = $data['callback_delay'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
        $this->container['use_prices_without_vat'] = $data['use_prices_without_vat'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['stamp'] === null) {
            $invalidProperties[] = "'stamp' can't be null";
        }
        if ((mb_strlen($this->container['stamp']) > 200)) {
            $invalidProperties[] = "invalid value for 'stamp', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ((mb_strlen($this->container['reference']) > 200)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 99999999)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 99999999.";
        }

        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currency', must be one of '%s'",
                $this->container['currency'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language', must be one of '%s'",
                $this->container['language'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['order_id']) && (mb_strlen($this->container['order_id']) > 60)) {
            $invalidProperties[] = "invalid value for 'order_id', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['redirect_urls'] === null) {
            $invalidProperties[] = "'redirect_urls' can't be null";
        }
        if (!is_null($this->container['callback_delay']) && ($this->container['callback_delay'] > 900)) {
            $invalidProperties[] = "invalid value for 'callback_delay', must be smaller than or equal to 900.";
        }

        if (!is_null($this->container['callback_delay']) && ($this->container['callback_delay'] < 0)) {
            $invalidProperties[] = "invalid value for 'callback_delay', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets stamp
     *
     * @return string
     */
    public function getStamp()
    {
        return $this->container['stamp'];
    }

    /**
     * Sets stamp
     *
     * @param string $stamp Merchant specific unique stamp
     *
     * @return self
     */
    public function setStamp($stamp)
    {
        if ((mb_strlen($stamp) > 200)) {
            throw new \InvalidArgumentException('invalid length for $stamp when calling PaymentRequest., must be smaller than or equal to 200.');
        }

        $this->container['stamp'] = $stamp;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Merchant reference for the payment
     *
     * @return self
     */
    public function setReference($reference)
    {
        if ((mb_strlen($reference) > 200)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling PaymentRequest., must be smaller than or equal to 200.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Total amount of the payment (sum of items), VAT should be included in amount unless `usePricesWithoutVat` is set to true
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount > 99999999)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentRequest., must be smaller than or equal to 99999999.');
        }
        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentRequest., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currency', must be one of '%s'",
                    $currency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Alpha-2 language code for the payment process
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'language', must be one of '%s'",
                    $language,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Order ID. Used for eg. Collector payments order ID. If not given, merchant reference is used instead.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (!is_null($order_id) && (mb_strlen($order_id) > 60)) {
            throw new \InvalidArgumentException('invalid length for $order_id when calling PaymentRequest., must be smaller than or equal to 60.');
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Paytrail\Payment\Model\Item[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Paytrail\Payment\Model\Item[] $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Paytrail\Payment\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Paytrail\Payment\Model\Customer $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \Paytrail\Payment\Model\Address|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \Paytrail\Payment\Model\Address|null $delivery_address delivery_address
     *
     * @return self
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets invoicing_address
     *
     * @return \Paytrail\Payment\Model\Address|null
     */
    public function getInvoicingAddress()
    {
        return $this->container['invoicing_address'];
    }

    /**
     * Sets invoicing_address
     *
     * @param \Paytrail\Payment\Model\Address|null $invoicing_address invoicing_address
     *
     * @return self
     */
    public function setInvoicingAddress($invoicing_address)
    {
        $this->container['invoicing_address'] = $invoicing_address;

        return $this;
    }

    /**
     * Gets manual_invoice_activation
     *
     * @return bool|null
     */
    public function getManualInvoiceActivation()
    {
        return $this->container['manual_invoice_activation'];
    }

    /**
     * Sets manual_invoice_activation
     *
     * @param bool|null $manual_invoice_activation If paid with invoice payment method, the invoice will not be activated automatically immediately. Currently only supported with Collector.
     *
     * @return self
     */
    public function setManualInvoiceActivation($manual_invoice_activation)
    {
        $this->container['manual_invoice_activation'] = $manual_invoice_activation;

        return $this;
    }

    /**
     * Gets redirect_urls
     *
     * @return \Paytrail\Payment\Model\Callbacks
     */
    public function getRedirectUrls()
    {
        return $this->container['redirect_urls'];
    }

    /**
     * Sets redirect_urls
     *
     * @param \Paytrail\Payment\Model\Callbacks $redirect_urls redirect_urls
     *
     * @return self
     */
    public function setRedirectUrls($redirect_urls)
    {
        $this->container['redirect_urls'] = $redirect_urls;

        return $this;
    }

    /**
     * Gets callback_urls
     *
     * @return \Paytrail\Payment\Model\Callbacks|null
     */
    public function getCallbackUrls()
    {
        return $this->container['callback_urls'];
    }

    /**
     * Sets callback_urls
     *
     * @param \Paytrail\Payment\Model\Callbacks|null $callback_urls callback_urls
     *
     * @return self
     */
    public function setCallbackUrls($callback_urls)
    {
        $this->container['callback_urls'] = $callback_urls;

        return $this;
    }

    /**
     * Gets callback_delay
     *
     * @return int|null
     */
    public function getCallbackDelay()
    {
        return $this->container['callback_delay'];
    }

    /**
     * Sets callback_delay
     *
     * @param int|null $callback_delay Callback delay in seconds. If callback URLs and delay are provided, callbacks will be called after the delay.
     *
     * @return self
     */
    public function setCallbackDelay($callback_delay)
    {

        if (!is_null($callback_delay) && ($callback_delay > 900)) {
            throw new \InvalidArgumentException('invalid value for $callback_delay when calling PaymentRequest., must be smaller than or equal to 900.');
        }
        if (!is_null($callback_delay) && ($callback_delay < 0)) {
            throw new \InvalidArgumentException('invalid value for $callback_delay when calling PaymentRequest., must be bigger than or equal to 0.');
        }

        $this->container['callback_delay'] = $callback_delay;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups Optionally return only payment methods for selected groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $allowedValues = $this->getGroupsAllowableValues();
        if (!is_null($groups) && array_diff($groups, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'groups', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets use_prices_without_vat
     *
     * @return bool|null
     */
    public function getUsePricesWithoutVat()
    {
        return $this->container['use_prices_without_vat'];
    }

    /**
     * Sets use_prices_without_vat
     *
     * @param bool|null $use_prices_without_vat If true, `amount` and `items.unitPrice` should be sent to API without VAT, and final VAT-included prices are calculated by Paytrail's system (with prices rounded to closest cent). Also, when true, items must be included.
     *
     * @return self
     */
    public function setUsePricesWithoutVat($use_prices_without_vat)
    {
        $this->container['use_prices_without_vat'] = $use_prices_without_vat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


