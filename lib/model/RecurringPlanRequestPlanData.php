<?php

/**
 * PHP SDK for Unlimit API v3. All rights reserved.
 */

namespace Cardpay\model;

use \ArrayAccess;
use \Cardpay\ObjectSerializer;

class RecurringPlanRequestPlanData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecurringPlanRequestPlanData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'float',
        'currency' => 'string',
        'interval' => 'int',
        'name' => 'string',
        'period' => 'string',
        'pricing_model' => 'string',
        'quantity' => '\Cardpay\model\PlanQuantity[]',
        'retries' => 'int',
        'retry' => '\Cardpay\model\PlanRetry',
        'subscription_decline_logic' => '\Cardpay\model\PlanSubscriptionDeclineLogic'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'currency' => null,
        'interval' => 'int32',
        'name' => null,
        'period' => null,
        'pricing_model' => null,
        'quantity' => null,
        'retries' => 'int32',
        'retry' => null,
        'subscription_decline_logic' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'currency' => 'currency',
        'interval' => 'interval',
        'name' => 'name',
        'period' => 'period',
        'pricing_model' => 'pricing_model',
        'quantity' => 'quantity',
        'retries' => 'retries',
        'retry' => 'retry',
        'subscription_decline_logic' => 'subscription_decline_logic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'interval' => 'setInterval',
        'name' => 'setName',
        'period' => 'setPeriod',
        'pricing_model' => 'setPricingModel',
        'quantity' => 'setQuantity',
        'retries' => 'setRetries',
        'retry' => 'setRetry',
        'subscription_decline_logic' => 'setSubscriptionDeclineLogic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'interval' => 'getInterval',
        'name' => 'getName',
        'period' => 'getPeriod',
        'pricing_model' => 'getPricingModel',
        'quantity' => 'getQuantity',
        'retries' => 'getRetries',
        'retry' => 'getRetry',
        'subscription_decline_logic' => 'getSubscriptionDeclineLogic'
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
        return self::$swaggerModelName;
    }

    const PERIOD_MINUTE = 'minute';
    const PERIOD_DAY = 'day';
    const PERIOD_WEEK = 'week';
    const PERIOD_MONTH = 'month';
    const PERIOD_YEAR = 'year';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_MINUTE,
            self::PERIOD_DAY,
            self::PERIOD_WEEK,
            self::PERIOD_MONTH,
            self::PERIOD_YEAR,
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['pricing_model'] = isset($data['pricing_model']) ? $data['pricing_model'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['retries'] = isset($data['retries']) ? $data['retries'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : null;
        $this->container['subscription_decline_logic'] = isset($data['subscription_decline_logic']) ? $data['subscription_decline_logic'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        if (($this->container['interval'] > 365)) {
            $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 365.";
        }

        if (($this->container['interval'] < 1)) {
            $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 25)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 25.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!preg_match("/^[A-Za-z0-9!@#<>№\"$%^&*()_+=~|;:,\\'\\-\/\\.\\?\\s]+$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9!@#<>№\"$%^&*()_+=~|;:,\\'\\-\/\\.\\?\\s]+$/.";
        }

        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'period', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['pricing_model']) && !preg_match("/FIXED|TIERED|VOLUME/", $this->container['pricing_model'])) {
            $invalidProperties[] = "invalid value for 'pricing_model', must be conform to the pattern /FIXED|TIERED|VOLUME/.";
        }

        if (!is_null($this->container['retries']) && ($this->container['retries'] > 15)) {
            $invalidProperties[] = "invalid value for 'retries', must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['retries']) && ($this->container['retries'] < 1)) {
            $invalidProperties[] = "invalid value for 'retries', must be bigger than or equal to 1.";
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
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The amount charged per period defined in plan in selected currency with dot as a decimal separator, limit is defined by payment method and transaction details.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
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
     * @param string $currency [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217) currency code of plan
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval The frequency interval of period, can be 1-365 depending on selected period value. Maximum value of period + interval can be 365 days / 52 weeks / 12 months / 1 year. From 1 to 60 minutes - for **sandbox** environment and testing purpose only
     *
     * @return $this
     */
    public function setInterval($interval)
    {

        if (($interval > 365)) {
            throw new \InvalidArgumentException('invalid value for $interval when calling RecurringPlanRequestPlanData., must be smaller than or equal to 365.');
        }
        if (($interval < 1)) {
            throw new \InvalidArgumentException('invalid value for $interval when calling RecurringPlanRequestPlanData., must be bigger than or equal to 1.');
        }

        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Plan name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 25)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RecurringPlanRequestPlanData., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RecurringPlanRequestPlanData., must be bigger than or equal to 0.');
        }
        if ((!preg_match("/^[A-Za-z0-9!@#<>№\"$%^&*()_+=~|;:,\\'\\-\/\\.\\?\\s]+$/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling RecurringPlanRequestPlanData., must conform to the pattern /^[A-Za-z0-9!@#<>№\"$%^&*()_+=~|;:,\\'\\-\/\\.\\?\\s]+$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period Initial period of recurring, can be `day`, `week`, `month`, `year`. Additional period: `minute` - for **sandbox** and testing purpose only.
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $allowedValues = $this->getPeriodAllowableValues();
        if (!in_array($period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'period', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets pricing_model
     *
     * @return string
     */
    public function getPricingModel()
    {
        return $this->container['pricing_model'];
    }

    /**
     * Sets pricing_model
     *
     * @param string $pricing_model Parameter regulates the price calculation pricing_model depending on the number of units Possible values: `FIXED` `TIERED` `VOLUME` By default - `FIXED`
     *
     * @return $this
     */
    public function setPricingModel($pricing_model)
    {

        if (!is_null($pricing_model) && (!preg_match("/FIXED|TIERED|VOLUME/", $pricing_model))) {
            throw new \InvalidArgumentException("invalid value for $pricing_model when calling RecurringPlanRequestPlanData., must conform to the pattern /FIXED|TIERED|VOLUME/.");
        }

        $this->container['pricing_model'] = $pricing_model;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \Cardpay\model\PlanQuantity[]
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \Cardpay\model\PlanQuantity[] $quantity Array with units quantity. Mandatory if `pricing_model` is `TIERED` or `VOLUME`
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return int
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param int $retries Number of daily basis retry attempts in case of payment has not been captured successfully, from 1 to 15 attempts can be specified.
     *
     * @return $this
     */
    public function setRetries($retries)
    {

        if (!is_null($retries) && ($retries > 15)) {
            throw new \InvalidArgumentException('invalid value for $retries when calling RecurringPlanRequestPlanData., must be smaller than or equal to 15.');
        }
        if (!is_null($retries) && ($retries < 1)) {
            throw new \InvalidArgumentException('invalid value for $retries when calling RecurringPlanRequestPlanData., must be bigger than or equal to 1.');
        }

        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets retry
     *
     * @return \Cardpay\model\PlanRetry
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry
     *
     * @param \Cardpay\model\PlanRetry $retry Structure for establishing the logic of retries for subscription based on created plan
     *
     * @return $this
     */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;

        return $this;
    }

    /**
     * Gets subscription_decline_logic
     *
     * @return \Cardpay\model\PlanSubscriptionDeclineLogic
     */
    public function getSubscriptionDeclineLogic()
    {
        return $this->container['subscription_decline_logic'];
    }

    /**
     * Sets subscription_decline_logic
     *
     * @param \Cardpay\model\PlanSubscriptionDeclineLogic $subscription_decline_logic Subscription decline logic
     *
     * @return $this
     */
    public function setSubscriptionDeclineLogic($subscription_decline_logic)
    {
        $this->container['subscription_decline_logic'] = $subscription_decline_logic;

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
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

