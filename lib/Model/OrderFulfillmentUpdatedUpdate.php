<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * OrderFulfillmentUpdatedUpdate Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class OrderFulfillmentUpdatedUpdate implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'fulfillment_uid' => 'string',
        'old_state' => 'string',
        'new_state' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'fulfillment_uid' => 'fulfillment_uid',
        'old_state' => 'old_state',
        'new_state' => 'new_state'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'fulfillment_uid' => 'setFulfillmentUid',
        'old_state' => 'setOldState',
        'new_state' => 'setNewState'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'fulfillment_uid' => 'getFulfillmentUid',
        'old_state' => 'getOldState',
        'new_state' => 'getNewState'
    );
  
    /**
      * $fulfillment_uid Unique ID that identifies the fulfillment only within this order.
      * @var string
      */
    protected $fulfillment_uid;
    /**
      * $old_state The state of the fulfillment before the change. Will not be populated if the fulfillment is created with this new Order version. See [OrderFulfillmentState](#type-orderfulfillmentstate) for possible values
      * @var string
      */
    protected $old_state;
    /**
      * $new_state The state of the fulfillment after the change. May be equal to old_state if a non-state field was changed on the fulfillment (e.g. tracking number). See [OrderFulfillmentState](#type-orderfulfillmentstate) for possible values
      * @var string
      */
    protected $new_state;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["fulfillment_uid"])) {
              $this->fulfillment_uid = $data["fulfillment_uid"];
            } else {
              $this->fulfillment_uid = null;
            }
            if (isset($data["old_state"])) {
              $this->old_state = $data["old_state"];
            } else {
              $this->old_state = null;
            }
            if (isset($data["new_state"])) {
              $this->new_state = $data["new_state"];
            } else {
              $this->new_state = null;
            }
        }
    }
    /**
     * Gets fulfillment_uid
     * @return string
     */
    public function getFulfillmentUid()
    {
        return $this->fulfillment_uid;
    }
  
    /**
     * Sets fulfillment_uid
     * @param string $fulfillment_uid Unique ID that identifies the fulfillment only within this order.
     * @return $this
     */
    public function setFulfillmentUid($fulfillment_uid)
    {
        $this->fulfillment_uid = $fulfillment_uid;
        return $this;
    }
    /**
     * Gets old_state
     * @return string
     */
    public function getOldState()
    {
        return $this->old_state;
    }
  
    /**
     * Sets old_state
     * @param string $old_state The state of the fulfillment before the change. Will not be populated if the fulfillment is created with this new Order version. See [OrderFulfillmentState](#type-orderfulfillmentstate) for possible values
     * @return $this
     */
    public function setOldState($old_state)
    {
        $this->old_state = $old_state;
        return $this;
    }
    /**
     * Gets new_state
     * @return string
     */
    public function getNewState()
    {
        return $this->new_state;
    }
  
    /**
     * Sets new_state
     * @param string $new_state The state of the fulfillment after the change. May be equal to old_state if a non-state field was changed on the fulfillment (e.g. tracking number). See [OrderFulfillmentState](#type-orderfulfillmentstate) for possible values
     * @return $this
     */
    public function setNewState($new_state)
    {
        $this->new_state = $new_state;
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
