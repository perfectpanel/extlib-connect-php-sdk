<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1PaymentItemization Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1PaymentItemization implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'quantity' => 'float',
        'itemization_type' => 'string',
        'item_detail' => '\SquareConnect\Model\V1PaymentItemDetail',
        'notes' => 'string',
        'item_variation_name' => 'string',
        'total_money' => '\SquareConnect\Model\V1Money',
        'single_quantity_money' => '\SquareConnect\Model\V1Money',
        'gross_sales_money' => '\SquareConnect\Model\V1Money',
        'discount_money' => '\SquareConnect\Model\V1Money',
        'net_sales_money' => '\SquareConnect\Model\V1Money',
        'taxes' => '\SquareConnect\Model\V1PaymentTax[]',
        'discounts' => '\SquareConnect\Model\V1PaymentDiscount[]',
        'modifiers' => '\SquareConnect\Model\V1PaymentModifier[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'quantity' => 'quantity',
        'itemization_type' => 'itemization_type',
        'item_detail' => 'item_detail',
        'notes' => 'notes',
        'item_variation_name' => 'item_variation_name',
        'total_money' => 'total_money',
        'single_quantity_money' => 'single_quantity_money',
        'gross_sales_money' => 'gross_sales_money',
        'discount_money' => 'discount_money',
        'net_sales_money' => 'net_sales_money',
        'taxes' => 'taxes',
        'discounts' => 'discounts',
        'modifiers' => 'modifiers'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'itemization_type' => 'setItemizationType',
        'item_detail' => 'setItemDetail',
        'notes' => 'setNotes',
        'item_variation_name' => 'setItemVariationName',
        'total_money' => 'setTotalMoney',
        'single_quantity_money' => 'setSingleQuantityMoney',
        'gross_sales_money' => 'setGrossSalesMoney',
        'discount_money' => 'setDiscountMoney',
        'net_sales_money' => 'setNetSalesMoney',
        'taxes' => 'setTaxes',
        'discounts' => 'setDiscounts',
        'modifiers' => 'setModifiers'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'itemization_type' => 'getItemizationType',
        'item_detail' => 'getItemDetail',
        'notes' => 'getNotes',
        'item_variation_name' => 'getItemVariationName',
        'total_money' => 'getTotalMoney',
        'single_quantity_money' => 'getSingleQuantityMoney',
        'gross_sales_money' => 'getGrossSalesMoney',
        'discount_money' => 'getDiscountMoney',
        'net_sales_money' => 'getNetSalesMoney',
        'taxes' => 'getTaxes',
        'discounts' => 'getDiscounts',
        'modifiers' => 'getModifiers'
    );
  
    /**
      * $name The item's name.
      * @var string
      */
    protected $name;
    /**
      * $quantity The quantity of the item purchased. This can be a decimal value.
      * @var float
      */
    protected $quantity;
    /**
      * $itemization_type The type of purchase that the itemization represents, such as an ITEM or CUSTOM_AMOUNT See [V1PaymentItemizationItemizationType](#type-v1paymentitemizationitemizationtype) for possible values
      * @var string
      */
    protected $itemization_type;
    /**
      * $item_detail Details of the item, including its unique identifier and the identifier of the item variation purchased.
      * @var \SquareConnect\Model\V1PaymentItemDetail
      */
    protected $item_detail;
    /**
      * $notes Notes entered by the merchant about the item at the time of payment, if any.
      * @var string
      */
    protected $notes;
    /**
      * $item_variation_name The name of the item variation purchased, if any.
      * @var string
      */
    protected $item_variation_name;
    /**
      * $total_money The total cost of the item, including all taxes and discounts.
      * @var \SquareConnect\Model\V1Money
      */
    protected $total_money;
    /**
      * $single_quantity_money The cost of a single unit of this item.
      * @var \SquareConnect\Model\V1Money
      */
    protected $single_quantity_money;
    /**
      * $gross_sales_money The total cost of the itemization and its modifiers, not including taxes or discounts.
      * @var \SquareConnect\Model\V1Money
      */
    protected $gross_sales_money;
    /**
      * $discount_money The total of all discounts applied to the itemization. This value is always negative or zero.
      * @var \SquareConnect\Model\V1Money
      */
    protected $discount_money;
    /**
      * $net_sales_money The sum of gross_sales_money and discount_money.
      * @var \SquareConnect\Model\V1Money
      */
    protected $net_sales_money;
    /**
      * $taxes All taxes applied to this itemization.
      * @var \SquareConnect\Model\V1PaymentTax[]
      */
    protected $taxes;
    /**
      * $discounts All discounts applied to this itemization.
      * @var \SquareConnect\Model\V1PaymentDiscount[]
      */
    protected $discounts;
    /**
      * $modifiers All modifier options applied to this itemization.
      * @var \SquareConnect\Model\V1PaymentModifier[]
      */
    protected $modifiers;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["quantity"])) {
              $this->quantity = $data["quantity"];
            } else {
              $this->quantity = null;
            }
            if (isset($data["itemization_type"])) {
              $this->itemization_type = $data["itemization_type"];
            } else {
              $this->itemization_type = null;
            }
            if (isset($data["item_detail"])) {
              $this->item_detail = $data["item_detail"];
            } else {
              $this->item_detail = null;
            }
            if (isset($data["notes"])) {
              $this->notes = $data["notes"];
            } else {
              $this->notes = null;
            }
            if (isset($data["item_variation_name"])) {
              $this->item_variation_name = $data["item_variation_name"];
            } else {
              $this->item_variation_name = null;
            }
            if (isset($data["total_money"])) {
              $this->total_money = $data["total_money"];
            } else {
              $this->total_money = null;
            }
            if (isset($data["single_quantity_money"])) {
              $this->single_quantity_money = $data["single_quantity_money"];
            } else {
              $this->single_quantity_money = null;
            }
            if (isset($data["gross_sales_money"])) {
              $this->gross_sales_money = $data["gross_sales_money"];
            } else {
              $this->gross_sales_money = null;
            }
            if (isset($data["discount_money"])) {
              $this->discount_money = $data["discount_money"];
            } else {
              $this->discount_money = null;
            }
            if (isset($data["net_sales_money"])) {
              $this->net_sales_money = $data["net_sales_money"];
            } else {
              $this->net_sales_money = null;
            }
            if (isset($data["taxes"])) {
              $this->taxes = $data["taxes"];
            } else {
              $this->taxes = null;
            }
            if (isset($data["discounts"])) {
              $this->discounts = $data["discounts"];
            } else {
              $this->discounts = null;
            }
            if (isset($data["modifiers"])) {
              $this->modifiers = $data["modifiers"];
            } else {
              $this->modifiers = null;
            }
        }
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The item's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param float $quantity The quantity of the item purchased. This can be a decimal value.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Gets itemization_type
     * @return string
     */
    public function getItemizationType()
    {
        return $this->itemization_type;
    }
  
    /**
     * Sets itemization_type
     * @param string $itemization_type The type of purchase that the itemization represents, such as an ITEM or CUSTOM_AMOUNT See [V1PaymentItemizationItemizationType](#type-v1paymentitemizationitemizationtype) for possible values
     * @return $this
     */
    public function setItemizationType($itemization_type)
    {
        $this->itemization_type = $itemization_type;
        return $this;
    }
    /**
     * Gets item_detail
     * @return \SquareConnect\Model\V1PaymentItemDetail
     */
    public function getItemDetail()
    {
        return $this->item_detail;
    }
  
    /**
     * Sets item_detail
     * @param \SquareConnect\Model\V1PaymentItemDetail $item_detail Details of the item, including its unique identifier and the identifier of the item variation purchased.
     * @return $this
     */
    public function setItemDetail($item_detail)
    {
        $this->item_detail = $item_detail;
        return $this;
    }
    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }
  
    /**
     * Sets notes
     * @param string $notes Notes entered by the merchant about the item at the time of payment, if any.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * Gets item_variation_name
     * @return string
     */
    public function getItemVariationName()
    {
        return $this->item_variation_name;
    }
  
    /**
     * Sets item_variation_name
     * @param string $item_variation_name The name of the item variation purchased, if any.
     * @return $this
     */
    public function setItemVariationName($item_variation_name)
    {
        $this->item_variation_name = $item_variation_name;
        return $this;
    }
    /**
     * Gets total_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getTotalMoney()
    {
        return $this->total_money;
    }
  
    /**
     * Sets total_money
     * @param \SquareConnect\Model\V1Money $total_money The total cost of the item, including all taxes and discounts.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->total_money = $total_money;
        return $this;
    }
    /**
     * Gets single_quantity_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getSingleQuantityMoney()
    {
        return $this->single_quantity_money;
    }
  
    /**
     * Sets single_quantity_money
     * @param \SquareConnect\Model\V1Money $single_quantity_money The cost of a single unit of this item.
     * @return $this
     */
    public function setSingleQuantityMoney($single_quantity_money)
    {
        $this->single_quantity_money = $single_quantity_money;
        return $this;
    }
    /**
     * Gets gross_sales_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getGrossSalesMoney()
    {
        return $this->gross_sales_money;
    }
  
    /**
     * Sets gross_sales_money
     * @param \SquareConnect\Model\V1Money $gross_sales_money The total cost of the itemization and its modifiers, not including taxes or discounts.
     * @return $this
     */
    public function setGrossSalesMoney($gross_sales_money)
    {
        $this->gross_sales_money = $gross_sales_money;
        return $this;
    }
    /**
     * Gets discount_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getDiscountMoney()
    {
        return $this->discount_money;
    }
  
    /**
     * Sets discount_money
     * @param \SquareConnect\Model\V1Money $discount_money The total of all discounts applied to the itemization. This value is always negative or zero.
     * @return $this
     */
    public function setDiscountMoney($discount_money)
    {
        $this->discount_money = $discount_money;
        return $this;
    }
    /**
     * Gets net_sales_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getNetSalesMoney()
    {
        return $this->net_sales_money;
    }
  
    /**
     * Sets net_sales_money
     * @param \SquareConnect\Model\V1Money $net_sales_money The sum of gross_sales_money and discount_money.
     * @return $this
     */
    public function setNetSalesMoney($net_sales_money)
    {
        $this->net_sales_money = $net_sales_money;
        return $this;
    }
    /**
     * Gets taxes
     * @return \SquareConnect\Model\V1PaymentTax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }
  
    /**
     * Sets taxes
     * @param \SquareConnect\Model\V1PaymentTax[] $taxes All taxes applied to this itemization.
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
        return $this;
    }
    /**
     * Gets discounts
     * @return \SquareConnect\Model\V1PaymentDiscount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }
  
    /**
     * Sets discounts
     * @param \SquareConnect\Model\V1PaymentDiscount[] $discounts All discounts applied to this itemization.
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * Gets modifiers
     * @return \SquareConnect\Model\V1PaymentModifier[]
     */
    public function getModifiers()
    {
        return $this->modifiers;
    }
  
    /**
     * Sets modifiers
     * @param \SquareConnect\Model\V1PaymentModifier[] $modifiers All modifier options applied to this itemization.
     * @return $this
     */
    public function setModifiers($modifiers)
    {
        $this->modifiers = $modifiers;
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
