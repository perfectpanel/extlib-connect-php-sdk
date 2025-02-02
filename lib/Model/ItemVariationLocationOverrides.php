<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * ItemVariationLocationOverrides Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class ItemVariationLocationOverrides implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'location_id' => 'string',
        'price_money' => '\SquareConnect\Model\Money',
        'pricing_type' => 'string',
        'track_inventory' => 'bool',
        'inventory_alert_type' => 'string',
        'inventory_alert_threshold' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'location_id' => 'location_id',
        'price_money' => 'price_money',
        'pricing_type' => 'pricing_type',
        'track_inventory' => 'track_inventory',
        'inventory_alert_type' => 'inventory_alert_type',
        'inventory_alert_threshold' => 'inventory_alert_threshold'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'location_id' => 'setLocationId',
        'price_money' => 'setPriceMoney',
        'pricing_type' => 'setPricingType',
        'track_inventory' => 'setTrackInventory',
        'inventory_alert_type' => 'setInventoryAlertType',
        'inventory_alert_threshold' => 'setInventoryAlertThreshold'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'location_id' => 'getLocationId',
        'price_money' => 'getPriceMoney',
        'pricing_type' => 'getPricingType',
        'track_inventory' => 'getTrackInventory',
        'inventory_alert_type' => 'getInventoryAlertType',
        'inventory_alert_threshold' => 'getInventoryAlertThreshold'
    );
  
    /**
      * $location_id The ID of the `Location`.
      * @var string
      */
    protected $location_id;
    /**
      * $price_money The price of the `CatalogItemVariation` at the given `Location`, or blank for variable pricing.
      * @var \SquareConnect\Model\Money
      */
    protected $price_money;
    /**
      * $pricing_type The pricing type (fixed or variable) for the `CatalogItemVariation` at the given `Location`. See [CatalogPricingType](#type-catalogpricingtype) for possible values
      * @var string
      */
    protected $pricing_type;
    /**
      * $track_inventory If `true`, inventory tracking is active for the `CatalogItemVariation` at this `Location`.
      * @var bool
      */
    protected $track_inventory;
    /**
      * $inventory_alert_type Indicates whether the `CatalogItemVariation` displays an alert when its inventory quantity is less than or equal to its `inventory_alert_threshold`. See [InventoryAlertType](#type-inventoryalerttype) for possible values
      * @var string
      */
    protected $inventory_alert_type;
    /**
      * $inventory_alert_threshold If the inventory quantity for the variation is less than or equal to this value and `inventory_alert_type` is `LOW_QUANTITY`, the variation displays an alert in the merchant dashboard.  This value is always an integer.
      * @var int
      */
    protected $inventory_alert_threshold;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
            if (isset($data["price_money"])) {
              $this->price_money = $data["price_money"];
            } else {
              $this->price_money = null;
            }
            if (isset($data["pricing_type"])) {
              $this->pricing_type = $data["pricing_type"];
            } else {
              $this->pricing_type = null;
            }
            if (isset($data["track_inventory"])) {
              $this->track_inventory = $data["track_inventory"];
            } else {
              $this->track_inventory = null;
            }
            if (isset($data["inventory_alert_type"])) {
              $this->inventory_alert_type = $data["inventory_alert_type"];
            } else {
              $this->inventory_alert_type = null;
            }
            if (isset($data["inventory_alert_threshold"])) {
              $this->inventory_alert_threshold = $data["inventory_alert_threshold"];
            } else {
              $this->inventory_alert_threshold = null;
            }
        }
    }
    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
  
    /**
     * Sets location_id
     * @param string $location_id The ID of the `Location`.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets price_money
     * @return \SquareConnect\Model\Money
     */
    public function getPriceMoney()
    {
        return $this->price_money;
    }
  
    /**
     * Sets price_money
     * @param \SquareConnect\Model\Money $price_money The price of the `CatalogItemVariation` at the given `Location`, or blank for variable pricing.
     * @return $this
     */
    public function setPriceMoney($price_money)
    {
        $this->price_money = $price_money;
        return $this;
    }
    /**
     * Gets pricing_type
     * @return string
     */
    public function getPricingType()
    {
        return $this->pricing_type;
    }
  
    /**
     * Sets pricing_type
     * @param string $pricing_type The pricing type (fixed or variable) for the `CatalogItemVariation` at the given `Location`. See [CatalogPricingType](#type-catalogpricingtype) for possible values
     * @return $this
     */
    public function setPricingType($pricing_type)
    {
        $this->pricing_type = $pricing_type;
        return $this;
    }
    /**
     * Gets track_inventory
     * @return bool
     */
    public function getTrackInventory()
    {
        return $this->track_inventory;
    }
  
    /**
     * Sets track_inventory
     * @param bool $track_inventory If `true`, inventory tracking is active for the `CatalogItemVariation` at this `Location`.
     * @return $this
     */
    public function setTrackInventory($track_inventory)
    {
        $this->track_inventory = $track_inventory;
        return $this;
    }
    /**
     * Gets inventory_alert_type
     * @return string
     */
    public function getInventoryAlertType()
    {
        return $this->inventory_alert_type;
    }
  
    /**
     * Sets inventory_alert_type
     * @param string $inventory_alert_type Indicates whether the `CatalogItemVariation` displays an alert when its inventory quantity is less than or equal to its `inventory_alert_threshold`. See [InventoryAlertType](#type-inventoryalerttype) for possible values
     * @return $this
     */
    public function setInventoryAlertType($inventory_alert_type)
    {
        $this->inventory_alert_type = $inventory_alert_type;
        return $this;
    }
    /**
     * Gets inventory_alert_threshold
     * @return int
     */
    public function getInventoryAlertThreshold()
    {
        return $this->inventory_alert_threshold;
    }
  
    /**
     * Sets inventory_alert_threshold
     * @param int $inventory_alert_threshold If the inventory quantity for the variation is less than or equal to this value and `inventory_alert_type` is `LOW_QUANTITY`, the variation displays an alert in the merchant dashboard.  This value is always an integer.
     * @return $this
     */
    public function setInventoryAlertThreshold($inventory_alert_threshold)
    {
        $this->inventory_alert_threshold = $inventory_alert_threshold;
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
