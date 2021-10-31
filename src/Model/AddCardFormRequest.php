<?php
/**
 * AddCardFormRequest
 *
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
 * OpenAPI Generator version: 5.3.0
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
 * AddCardFormRequest Class Doc Comment
 *
 * @category Class
 * @description Add card form request
 * @package  Paytrail\Payment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddCardFormRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddCardFormRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'checkout_account' => 'int',
        'checkout_algorithm' => 'string',
        'checkout_redirect_success_url' => 'string',
        'checkout_redirect_cancel_url' => 'string',
        'checkout_callback_success_url' => 'string',
        'checkout_callback_cancel_url' => 'string',
        'language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'checkout_account' => null,
        'checkout_algorithm' => null,
        'checkout_redirect_success_url' => 'url',
        'checkout_redirect_cancel_url' => 'url',
        'checkout_callback_success_url' => 'url',
        'checkout_callback_cancel_url' => 'url',
        'language' => null
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
        'checkout_account' => 'checkout-account',
        'checkout_algorithm' => 'checkout-algorithm',
        'checkout_redirect_success_url' => 'checkout-redirect-success-url',
        'checkout_redirect_cancel_url' => 'checkout-redirect-cancel-url',
        'checkout_callback_success_url' => 'checkout-callback-success-url',
        'checkout_callback_cancel_url' => 'checkout-callback-cancel-url',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkout_account' => 'setCheckoutAccount',
        'checkout_algorithm' => 'setCheckoutAlgorithm',
        'checkout_redirect_success_url' => 'setCheckoutRedirectSuccessUrl',
        'checkout_redirect_cancel_url' => 'setCheckoutRedirectCancelUrl',
        'checkout_callback_success_url' => 'setCheckoutCallbackSuccessUrl',
        'checkout_callback_cancel_url' => 'setCheckoutCallbackCancelUrl',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkout_account' => 'getCheckoutAccount',
        'checkout_algorithm' => 'getCheckoutAlgorithm',
        'checkout_redirect_success_url' => 'getCheckoutRedirectSuccessUrl',
        'checkout_redirect_cancel_url' => 'getCheckoutRedirectCancelUrl',
        'checkout_callback_success_url' => 'getCheckoutCallbackSuccessUrl',
        'checkout_callback_cancel_url' => 'getCheckoutCallbackCancelUrl',
        'language' => 'getLanguage'
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

    const CHECKOUT_ALGORITHM_SHA256 = 'sha256';
    const CHECKOUT_ALGORITHM_SHA512 = 'sha512';
    const LANGUAGE_FI = 'FI';
    const LANGUAGE_SV = 'SV';
    const LANGUAGE_EN = 'EN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCheckoutAlgorithmAllowableValues()
    {
        return [
            self::CHECKOUT_ALGORITHM_SHA256,
            self::CHECKOUT_ALGORITHM_SHA512,
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
        $this->container['checkout_account'] = $data['checkout_account'] ?? null;
        $this->container['checkout_algorithm'] = $data['checkout_algorithm'] ?? null;
        $this->container['checkout_redirect_success_url'] = $data['checkout_redirect_success_url'] ?? null;
        $this->container['checkout_redirect_cancel_url'] = $data['checkout_redirect_cancel_url'] ?? null;
        $this->container['checkout_callback_success_url'] = $data['checkout_callback_success_url'] ?? null;
        $this->container['checkout_callback_cancel_url'] = $data['checkout_callback_cancel_url'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['checkout_account'] === null) {
            $invalidProperties[] = "'checkout_account' can't be null";
        }
        if ($this->container['checkout_algorithm'] === null) {
            $invalidProperties[] = "'checkout_algorithm' can't be null";
        }
        $allowedValues = $this->getCheckoutAlgorithmAllowableValues();
        if (!is_null($this->container['checkout_algorithm']) && !in_array($this->container['checkout_algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'checkout_algorithm', must be one of '%s'",
                $this->container['checkout_algorithm'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['checkout_redirect_success_url'] === null) {
            $invalidProperties[] = "'checkout_redirect_success_url' can't be null";
        }
        if ($this->container['checkout_redirect_cancel_url'] === null) {
            $invalidProperties[] = "'checkout_redirect_cancel_url' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language', must be one of '%s'",
                $this->container['language'],
                implode("', '", $allowedValues)
            );
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
     * Gets checkout_account
     *
     * @return int
     */
    public function getCheckoutAccount()
    {
        return $this->container['checkout_account'];
    }

    /**
     * Sets checkout_account
     *
     * @param int $checkout_account Merchant ID
     *
     * @return self
     */
    public function setCheckoutAccount($checkout_account)
    {
        $this->container['checkout_account'] = $checkout_account;

        return $this;
    }

    /**
     * Gets checkout_algorithm
     *
     * @return string
     */
    public function getCheckoutAlgorithm()
    {
        return $this->container['checkout_algorithm'];
    }

    /**
     * Sets checkout_algorithm
     *
     * @param string $checkout_algorithm HMAC algorithm
     *
     * @return self
     */
    public function setCheckoutAlgorithm($checkout_algorithm)
    {
        $allowedValues = $this->getCheckoutAlgorithmAllowableValues();
        if (!in_array($checkout_algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'checkout_algorithm', must be one of '%s'",
                    $checkout_algorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['checkout_algorithm'] = $checkout_algorithm;

        return $this;
    }

    /**
     * Gets checkout_redirect_success_url
     *
     * @return string
     */
    public function getCheckoutRedirectSuccessUrl()
    {
        return $this->container['checkout_redirect_success_url'];
    }

    /**
     * Sets checkout_redirect_success_url
     *
     * @param string $checkout_redirect_success_url Merchant's url for user redirect on successful card addition
     *
     * @return self
     */
    public function setCheckoutRedirectSuccessUrl($checkout_redirect_success_url)
    {
        $this->container['checkout_redirect_success_url'] = $checkout_redirect_success_url;

        return $this;
    }

    /**
     * Gets checkout_redirect_cancel_url
     *
     * @return string
     */
    public function getCheckoutRedirectCancelUrl()
    {
        return $this->container['checkout_redirect_cancel_url'];
    }

    /**
     * Sets checkout_redirect_cancel_url
     *
     * @param string $checkout_redirect_cancel_url Merchant's url for user redirect on failed card addition
     *
     * @return self
     */
    public function setCheckoutRedirectCancelUrl($checkout_redirect_cancel_url)
    {
        $this->container['checkout_redirect_cancel_url'] = $checkout_redirect_cancel_url;

        return $this;
    }

    /**
     * Gets checkout_callback_success_url
     *
     * @return string|null
     */
    public function getCheckoutCallbackSuccessUrl()
    {
        return $this->container['checkout_callback_success_url'];
    }

    /**
     * Sets checkout_callback_success_url
     *
     * @param string|null $checkout_callback_success_url Merchant's url called on successful card addition
     *
     * @return self
     */
    public function setCheckoutCallbackSuccessUrl($checkout_callback_success_url)
    {
        $this->container['checkout_callback_success_url'] = $checkout_callback_success_url;

        return $this;
    }

    /**
     * Gets checkout_callback_cancel_url
     *
     * @return string|null
     */
    public function getCheckoutCallbackCancelUrl()
    {
        return $this->container['checkout_callback_cancel_url'];
    }

    /**
     * Sets checkout_callback_cancel_url
     *
     * @param string|null $checkout_callback_cancel_url Merchant's url called on failed card addition
     *
     * @return self
     */
    public function setCheckoutCallbackCancelUrl($checkout_callback_cancel_url)
    {
        $this->container['checkout_callback_cancel_url'] = $checkout_callback_cancel_url;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Alpha-2 language code for the card addition form
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($language) && !in_array($language, $allowedValues, true)) {
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
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


