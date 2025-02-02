<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogIdMapping Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CatalogIdMapping implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'client_object_id' => 'string',
        'object_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'client_object_id' => 'client_object_id',
        'object_id' => 'object_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'client_object_id' => 'setClientObjectId',
        'object_id' => 'setObjectId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'client_object_id' => 'getClientObjectId',
        'object_id' => 'getObjectId'
    );
  
    /**
      * $client_object_id The client-supplied, temporary `#`-prefixed ID for a new `CatalogObject`.
      * @var string
      */
    protected $client_object_id;
    /**
      * $object_id The permanent ID for the CatalogObject created by the server.
      * @var string
      */
    protected $object_id;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["client_object_id"])) {
              $this->client_object_id = $data["client_object_id"];
            } else {
              $this->client_object_id = null;
            }
            if (isset($data["object_id"])) {
              $this->object_id = $data["object_id"];
            } else {
              $this->object_id = null;
            }
        }
    }
    /**
     * Gets client_object_id
     * @return string
     */
    public function getClientObjectId()
    {
        return $this->client_object_id;
    }
  
    /**
     * Sets client_object_id
     * @param string $client_object_id The client-supplied, temporary `#`-prefixed ID for a new `CatalogObject`.
     * @return $this
     */
    public function setClientObjectId($client_object_id)
    {
        $this->client_object_id = $client_object_id;
        return $this;
    }
    /**
     * Gets object_id
     * @return string
     */
    public function getObjectId()
    {
        return $this->object_id;
    }
  
    /**
     * Sets object_id
     * @param string $object_id The permanent ID for the CatalogObject created by the server.
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->object_id = $object_id;
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
