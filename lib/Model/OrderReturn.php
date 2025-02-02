<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * OrderReturn Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class OrderReturn implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'uid' => 'string',
        'source_order_id' => 'string',
        'return_line_items' => '\SquareConnect\Model\OrderReturnLineItem[]',
        'return_service_charges' => '\SquareConnect\Model\OrderReturnServiceCharge[]',
        'return_taxes' => '\SquareConnect\Model\OrderReturnTax[]',
        'return_discounts' => '\SquareConnect\Model\OrderReturnDiscount[]',
        'rounding_adjustment' => '\SquareConnect\Model\OrderRoundingAdjustment',
        'return_amounts' => '\SquareConnect\Model\OrderMoneyAmounts'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'uid' => 'uid',
        'source_order_id' => 'source_order_id',
        'return_line_items' => 'return_line_items',
        'return_service_charges' => 'return_service_charges',
        'return_taxes' => 'return_taxes',
        'return_discounts' => 'return_discounts',
        'rounding_adjustment' => 'rounding_adjustment',
        'return_amounts' => 'return_amounts'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'uid' => 'setUid',
        'source_order_id' => 'setSourceOrderId',
        'return_line_items' => 'setReturnLineItems',
        'return_service_charges' => 'setReturnServiceCharges',
        'return_taxes' => 'setReturnTaxes',
        'return_discounts' => 'setReturnDiscounts',
        'rounding_adjustment' => 'setRoundingAdjustment',
        'return_amounts' => 'setReturnAmounts'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'uid' => 'getUid',
        'source_order_id' => 'getSourceOrderId',
        'return_line_items' => 'getReturnLineItems',
        'return_service_charges' => 'getReturnServiceCharges',
        'return_taxes' => 'getReturnTaxes',
        'return_discounts' => 'getReturnDiscounts',
        'rounding_adjustment' => 'getRoundingAdjustment',
        'return_amounts' => 'getReturnAmounts'
    );
  
    /**
      * $uid Unique ID that identifies the return only within this order.
      * @var string
      */
    protected $uid;
    /**
      * $source_order_id Order which contains the original sale of these returned line items. This will be unset for unlinked returns.
      * @var string
      */
    protected $source_order_id;
    /**
      * $return_line_items Collection of line items which are being returned.
      * @var \SquareConnect\Model\OrderReturnLineItem[]
      */
    protected $return_line_items;
    /**
      * $return_service_charges Collection of service charges which are being returned.
      * @var \SquareConnect\Model\OrderReturnServiceCharge[]
      */
    protected $return_service_charges;
    /**
      * $return_taxes Collection of references to taxes being returned for an order, including the total applied tax amount to be returned. The taxes must reference a top-level tax ID from the source order.
      * @var \SquareConnect\Model\OrderReturnTax[]
      */
    protected $return_taxes;
    /**
      * $return_discounts Collection of references to discounts being returned for an order, including the total applied discount amount to be returned. The discounts must reference a top-level discount ID from the source order.
      * @var \SquareConnect\Model\OrderReturnDiscount[]
      */
    protected $return_discounts;
    /**
      * $rounding_adjustment A positive or negative rounding adjustment to the total value being returned. Commonly used to apply Cash Rounding when the minimum unit of account is smaller than the lowest physical denomination of currency.
      * @var \SquareConnect\Model\OrderRoundingAdjustment
      */
    protected $rounding_adjustment;
    /**
      * $return_amounts Aggregate monetary value being returned by this Return entry.
      * @var \SquareConnect\Model\OrderMoneyAmounts
      */
    protected $return_amounts;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["uid"])) {
              $this->uid = $data["uid"];
            } else {
              $this->uid = null;
            }
            if (isset($data["source_order_id"])) {
              $this->source_order_id = $data["source_order_id"];
            } else {
              $this->source_order_id = null;
            }
            if (isset($data["return_line_items"])) {
              $this->return_line_items = $data["return_line_items"];
            } else {
              $this->return_line_items = null;
            }
            if (isset($data["return_service_charges"])) {
              $this->return_service_charges = $data["return_service_charges"];
            } else {
              $this->return_service_charges = null;
            }
            if (isset($data["return_taxes"])) {
              $this->return_taxes = $data["return_taxes"];
            } else {
              $this->return_taxes = null;
            }
            if (isset($data["return_discounts"])) {
              $this->return_discounts = $data["return_discounts"];
            } else {
              $this->return_discounts = null;
            }
            if (isset($data["rounding_adjustment"])) {
              $this->rounding_adjustment = $data["rounding_adjustment"];
            } else {
              $this->rounding_adjustment = null;
            }
            if (isset($data["return_amounts"])) {
              $this->return_amounts = $data["return_amounts"];
            } else {
              $this->return_amounts = null;
            }
        }
    }
    /**
     * Gets uid
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }
  
    /**
     * Sets uid
     * @param string $uid Unique ID that identifies the return only within this order.
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }
    /**
     * Gets source_order_id
     * @return string
     */
    public function getSourceOrderId()
    {
        return $this->source_order_id;
    }
  
    /**
     * Sets source_order_id
     * @param string $source_order_id Order which contains the original sale of these returned line items. This will be unset for unlinked returns.
     * @return $this
     */
    public function setSourceOrderId($source_order_id)
    {
        $this->source_order_id = $source_order_id;
        return $this;
    }
    /**
     * Gets return_line_items
     * @return \SquareConnect\Model\OrderReturnLineItem[]
     */
    public function getReturnLineItems()
    {
        return $this->return_line_items;
    }
  
    /**
     * Sets return_line_items
     * @param \SquareConnect\Model\OrderReturnLineItem[] $return_line_items Collection of line items which are being returned.
     * @return $this
     */
    public function setReturnLineItems($return_line_items)
    {
        $this->return_line_items = $return_line_items;
        return $this;
    }
    /**
     * Gets return_service_charges
     * @return \SquareConnect\Model\OrderReturnServiceCharge[]
     */
    public function getReturnServiceCharges()
    {
        return $this->return_service_charges;
    }
  
    /**
     * Sets return_service_charges
     * @param \SquareConnect\Model\OrderReturnServiceCharge[] $return_service_charges Collection of service charges which are being returned.
     * @return $this
     */
    public function setReturnServiceCharges($return_service_charges)
    {
        $this->return_service_charges = $return_service_charges;
        return $this;
    }
    /**
     * Gets return_taxes
     * @return \SquareConnect\Model\OrderReturnTax[]
     */
    public function getReturnTaxes()
    {
        return $this->return_taxes;
    }
  
    /**
     * Sets return_taxes
     * @param \SquareConnect\Model\OrderReturnTax[] $return_taxes Collection of references to taxes being returned for an order, including the total applied tax amount to be returned. The taxes must reference a top-level tax ID from the source order.
     * @return $this
     */
    public function setReturnTaxes($return_taxes)
    {
        $this->return_taxes = $return_taxes;
        return $this;
    }
    /**
     * Gets return_discounts
     * @return \SquareConnect\Model\OrderReturnDiscount[]
     */
    public function getReturnDiscounts()
    {
        return $this->return_discounts;
    }
  
    /**
     * Sets return_discounts
     * @param \SquareConnect\Model\OrderReturnDiscount[] $return_discounts Collection of references to discounts being returned for an order, including the total applied discount amount to be returned. The discounts must reference a top-level discount ID from the source order.
     * @return $this
     */
    public function setReturnDiscounts($return_discounts)
    {
        $this->return_discounts = $return_discounts;
        return $this;
    }
    /**
     * Gets rounding_adjustment
     * @return \SquareConnect\Model\OrderRoundingAdjustment
     */
    public function getRoundingAdjustment()
    {
        return $this->rounding_adjustment;
    }
  
    /**
     * Sets rounding_adjustment
     * @param \SquareConnect\Model\OrderRoundingAdjustment $rounding_adjustment A positive or negative rounding adjustment to the total value being returned. Commonly used to apply Cash Rounding when the minimum unit of account is smaller than the lowest physical denomination of currency.
     * @return $this
     */
    public function setRoundingAdjustment($rounding_adjustment)
    {
        $this->rounding_adjustment = $rounding_adjustment;
        return $this;
    }
    /**
     * Gets return_amounts
     * @return \SquareConnect\Model\OrderMoneyAmounts
     */
    public function getReturnAmounts()
    {
        return $this->return_amounts;
    }
  
    /**
     * Sets return_amounts
     * @param \SquareConnect\Model\OrderMoneyAmounts $return_amounts Aggregate monetary value being returned by this Return entry.
     * @return $this
     */
    public function setReturnAmounts($return_amounts)
    {
        $this->return_amounts = $return_amounts;
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
