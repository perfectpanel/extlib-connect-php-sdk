<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * OrderMoneyAmounts Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class OrderMoneyAmounts implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'total_money' => '\SquareConnect\Model\Money',
        'tax_money' => '\SquareConnect\Model\Money',
        'discount_money' => '\SquareConnect\Model\Money',
        'tip_money' => '\SquareConnect\Model\Money',
        'service_charge_money' => '\SquareConnect\Model\Money'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'total_money' => 'total_money',
        'tax_money' => 'tax_money',
        'discount_money' => 'discount_money',
        'tip_money' => 'tip_money',
        'service_charge_money' => 'service_charge_money'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'total_money' => 'setTotalMoney',
        'tax_money' => 'setTaxMoney',
        'discount_money' => 'setDiscountMoney',
        'tip_money' => 'setTipMoney',
        'service_charge_money' => 'setServiceChargeMoney'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'total_money' => 'getTotalMoney',
        'tax_money' => 'getTaxMoney',
        'discount_money' => 'getDiscountMoney',
        'tip_money' => 'getTipMoney',
        'service_charge_money' => 'getServiceChargeMoney'
    );
  
    /**
      * $total_money Total money.
      * @var \SquareConnect\Model\Money
      */
    protected $total_money;
    /**
      * $tax_money Money associated with taxes.
      * @var \SquareConnect\Model\Money
      */
    protected $tax_money;
    /**
      * $discount_money Money associated with discounts.
      * @var \SquareConnect\Model\Money
      */
    protected $discount_money;
    /**
      * $tip_money Money associated with tips.
      * @var \SquareConnect\Model\Money
      */
    protected $tip_money;
    /**
      * $service_charge_money Money associated with service charges.
      * @var \SquareConnect\Model\Money
      */
    protected $service_charge_money;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["total_money"])) {
              $this->total_money = $data["total_money"];
            } else {
              $this->total_money = null;
            }
            if (isset($data["tax_money"])) {
              $this->tax_money = $data["tax_money"];
            } else {
              $this->tax_money = null;
            }
            if (isset($data["discount_money"])) {
              $this->discount_money = $data["discount_money"];
            } else {
              $this->discount_money = null;
            }
            if (isset($data["tip_money"])) {
              $this->tip_money = $data["tip_money"];
            } else {
              $this->tip_money = null;
            }
            if (isset($data["service_charge_money"])) {
              $this->service_charge_money = $data["service_charge_money"];
            } else {
              $this->service_charge_money = null;
            }
        }
    }
    /**
     * Gets total_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalMoney()
    {
        return $this->total_money;
    }
  
    /**
     * Sets total_money
     * @param \SquareConnect\Model\Money $total_money Total money.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->total_money = $total_money;
        return $this;
    }
    /**
     * Gets tax_money
     * @return \SquareConnect\Model\Money
     */
    public function getTaxMoney()
    {
        return $this->tax_money;
    }
  
    /**
     * Sets tax_money
     * @param \SquareConnect\Model\Money $tax_money Money associated with taxes.
     * @return $this
     */
    public function setTaxMoney($tax_money)
    {
        $this->tax_money = $tax_money;
        return $this;
    }
    /**
     * Gets discount_money
     * @return \SquareConnect\Model\Money
     */
    public function getDiscountMoney()
    {
        return $this->discount_money;
    }
  
    /**
     * Sets discount_money
     * @param \SquareConnect\Model\Money $discount_money Money associated with discounts.
     * @return $this
     */
    public function setDiscountMoney($discount_money)
    {
        $this->discount_money = $discount_money;
        return $this;
    }
    /**
     * Gets tip_money
     * @return \SquareConnect\Model\Money
     */
    public function getTipMoney()
    {
        return $this->tip_money;
    }
  
    /**
     * Sets tip_money
     * @param \SquareConnect\Model\Money $tip_money Money associated with tips.
     * @return $this
     */
    public function setTipMoney($tip_money)
    {
        $this->tip_money = $tip_money;
        return $this;
    }
    /**
     * Gets service_charge_money
     * @return \SquareConnect\Model\Money
     */
    public function getServiceChargeMoney()
    {
        return $this->service_charge_money;
    }
  
    /**
     * Sets service_charge_money
     * @param \SquareConnect\Model\Money $service_charge_money Money associated with service charges.
     * @return $this
     */
    public function setServiceChargeMoney($service_charge_money)
    {
        $this->service_charge_money = $service_charge_money;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset): mixed
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
