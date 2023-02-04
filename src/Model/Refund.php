<?php
/**
 * Refund
 *
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

namespace Paytrail\Payment\Model;

use \ArrayAccess;
use \Paytrail\Payment\ObjectSerializer;

/**
 * Refund Class Doc Comment
 *
 * @category Class
 * @package  Paytrail\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Refund implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'refund_stamp' => 'string',
        'refund_reference' => 'string',
        'items' => '\Paytrail\Payment\Model\RefundItem[]',
        'callback_urls' => '\Paytrail\Payment\Model\Callbacks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => 'int64',
        'refund_stamp' => null,
        'refund_reference' => null,
        'items' => null,
        'callback_urls' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
		'refund_stamp' => false,
		'refund_reference' => false,
		'items' => false,
		'callback_urls' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'refund_stamp' => 'refundStamp',
        'refund_reference' => 'refundReference',
        'items' => 'items',
        'callback_urls' => 'callbackUrls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'refund_stamp' => 'setRefundStamp',
        'refund_reference' => 'setRefundReference',
        'items' => 'setItems',
        'callback_urls' => 'setCallbackUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'refund_stamp' => 'getRefundStamp',
        'refund_reference' => 'getRefundReference',
        'items' => 'getItems',
        'callback_urls' => 'getCallbackUrls'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('refund_stamp', $data ?? [], null);
        $this->setIfExists('refund_reference', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('callback_urls', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['refund_stamp']) && (mb_strlen($this->container['refund_stamp']) > 200)) {
            $invalidProperties[] = "invalid value for 'refund_stamp', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['refund_reference']) && (mb_strlen($this->container['refund_reference']) > 200)) {
            $invalidProperties[] = "invalid value for 'refund_reference', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['callback_urls'] === null) {
            $invalidProperties[] = "'callback_urls' can't be null";
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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The amount to refund. Required for normal merchant accounts. SiS aggregate can refund the whole purchase by providing just the amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling Refund., must be bigger than or equal to 1.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets refund_stamp
     *
     * @return string|null
     */
    public function getRefundStamp()
    {
        return $this->container['refund_stamp'];
    }

    /**
     * Sets refund_stamp
     *
     * @param string|null $refund_stamp Merchant specific unique stamp for the refund
     *
     * @return self
     */
    public function setRefundStamp($refund_stamp)
    {
        if (is_null($refund_stamp)) {
            throw new \InvalidArgumentException('non-nullable refund_stamp cannot be null');
        }
        if ((mb_strlen($refund_stamp) > 200)) {
            throw new \InvalidArgumentException('invalid length for $refund_stamp when calling Refund., must be smaller than or equal to 200.');
        }

        $this->container['refund_stamp'] = $refund_stamp;

        return $this;
    }

    /**
     * Gets refund_reference
     *
     * @return string|null
     */
    public function getRefundReference()
    {
        return $this->container['refund_reference'];
    }

    /**
     * Sets refund_reference
     *
     * @param string|null $refund_reference Merchant reference for the refund
     *
     * @return self
     */
    public function setRefundReference($refund_reference)
    {
        if (is_null($refund_reference)) {
            throw new \InvalidArgumentException('non-nullable refund_reference cannot be null');
        }
        if ((mb_strlen($refund_reference) > 200)) {
            throw new \InvalidArgumentException('invalid length for $refund_reference when calling Refund., must be smaller than or equal to 200.');
        }

        $this->container['refund_reference'] = $refund_reference;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Paytrail\Payment\Model\RefundItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Paytrail\Payment\Model\RefundItem[]|null $items Item level refund information for SiS refunds.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets callback_urls
     *
     * @return \Paytrail\Payment\Model\Callbacks
     */
    public function getCallbackUrls()
    {
        return $this->container['callback_urls'];
    }

    /**
     * Sets callback_urls
     *
     * @param \Paytrail\Payment\Model\Callbacks $callback_urls callback_urls
     *
     * @return self
     */
    public function setCallbackUrls($callback_urls)
    {
        if (is_null($callback_urls)) {
            throw new \InvalidArgumentException('non-nullable callback_urls cannot be null');
        }
        $this->container['callback_urls'] = $callback_urls;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


