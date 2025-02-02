<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Coordinates Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Coordinates implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'latitude' => 'float',
        'longitude' => 'float'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'latitude' => 'latitude',
        'longitude' => 'longitude'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude'
    );
  
    /**
      * $latitude The latitude of the coordinate expressed in degrees.
      * @var float
      */
    protected $latitude;
    /**
      * $longitude The longitude of the coordinate expressed in degrees.
      * @var float
      */
    protected $longitude;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["latitude"])) {
              $this->latitude = $data["latitude"];
            } else {
              $this->latitude = null;
            }
            if (isset($data["longitude"])) {
              $this->longitude = $data["longitude"];
            } else {
              $this->longitude = null;
            }
        }
    }
    /**
     * Gets latitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
  
    /**
     * Sets latitude
     * @param float $latitude The latitude of the coordinate expressed in degrees.
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Gets longitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
  
    /**
     * Sets longitude
     * @param float $longitude The longitude of the coordinate expressed in degrees.
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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
