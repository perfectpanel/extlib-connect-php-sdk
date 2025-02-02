<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * TerminalCheckout Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class TerminalCheckout implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'reference_id' => 'string',
        'note' => 'string',
        'device_options' => '\SquareConnect\Model\DeviceCheckoutOptions',
        'deadline_duration' => 'string',
        'status' => 'string',
        'cancel_reason' => 'string',
        'payment_ids' => 'string[]',
        'created_at' => 'string',
        'updated_at' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'amount_money' => 'amount_money',
        'reference_id' => 'reference_id',
        'note' => 'note',
        'device_options' => 'device_options',
        'deadline_duration' => 'deadline_duration',
        'status' => 'status',
        'cancel_reason' => 'cancel_reason',
        'payment_ids' => 'payment_ids',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'amount_money' => 'setAmountMoney',
        'reference_id' => 'setReferenceId',
        'note' => 'setNote',
        'device_options' => 'setDeviceOptions',
        'deadline_duration' => 'setDeadlineDuration',
        'status' => 'setStatus',
        'cancel_reason' => 'setCancelReason',
        'payment_ids' => 'setPaymentIds',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'amount_money' => 'getAmountMoney',
        'reference_id' => 'getReferenceId',
        'note' => 'getNote',
        'device_options' => 'getDeviceOptions',
        'deadline_duration' => 'getDeadlineDuration',
        'status' => 'getStatus',
        'cancel_reason' => 'getCancelReason',
        'payment_ids' => 'getPaymentIds',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    );
  
    /**
      * $id A unique ID for this `TerminalCheckout`
      * @var string
      */
    protected $id;
    /**
      * $amount_money The amount of money (including tax amount) that the Square Terminal device should try to collect.
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $reference_id An optional user-defined reference ID which can be used to associate this TerminalCheckout to another entity in an external system. For example, an order ID generated by a third-party shopping cart. Will also be associated with any payments used to complete the checkout.
      * @var string
      */
    protected $reference_id;
    /**
      * $note An optional note to associate with the checkout, as well any payments used to complete the checkout.
      * @var string
      */
    protected $note;
    /**
      * $device_options Options to control the display and behavior of the Square Terminal device.
      * @var \SquareConnect\Model\DeviceCheckoutOptions
      */
    protected $device_options;
    /**
      * $deadline_duration The duration as an RFC 3339 duration, after which the checkout will be automatically canceled. TerminalCheckouts that are PENDING will be automatically CANCELED and have a cancellation reason of “TIMED\\_OUT”.  Default: 5 minutes from creation  Maximum: 5 minutes
      * @var string
      */
    protected $deadline_duration;
    /**
      * $status The status of the `TerminalCheckout`. Options: PENDING, IN\\_PROGRESS, CANCELED, COMPLETED
      * @var string
      */
    protected $status;
    /**
      * $cancel_reason Present if the status is CANCELED. See [TerminalCheckoutCancelReason](#type-terminalcheckoutcancelreason) for possible values
      * @var string
      */
    protected $cancel_reason;
    /**
      * $payment_ids A list of payments created by this `TerminalCheckout`.
      * @var string[]
      */
    protected $payment_ids;
    /**
      * $created_at The time when the `TerminalCheckout` was created as an RFC 3339 timestamp.
      * @var string
      */
    protected $created_at;
    /**
      * $updated_at The time when the `TerminalCheckout` was last updated as an RFC 3339 timestamp.
      * @var string
      */
    protected $updated_at;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["reference_id"])) {
              $this->reference_id = $data["reference_id"];
            } else {
              $this->reference_id = null;
            }
            if (isset($data["note"])) {
              $this->note = $data["note"];
            } else {
              $this->note = null;
            }
            if (isset($data["device_options"])) {
              $this->device_options = $data["device_options"];
            } else {
              $this->device_options = null;
            }
            if (isset($data["deadline_duration"])) {
              $this->deadline_duration = $data["deadline_duration"];
            } else {
              $this->deadline_duration = null;
            }
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
            }
            if (isset($data["cancel_reason"])) {
              $this->cancel_reason = $data["cancel_reason"];
            } else {
              $this->cancel_reason = null;
            }
            if (isset($data["payment_ids"])) {
              $this->payment_ids = $data["payment_ids"];
            } else {
              $this->payment_ids = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["updated_at"])) {
              $this->updated_at = $data["updated_at"];
            } else {
              $this->updated_at = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id A unique ID for this `TerminalCheckout`
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The amount of money (including tax amount) that the Square Terminal device should try to collect.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }
  
    /**
     * Sets reference_id
     * @param string $reference_id An optional user-defined reference ID which can be used to associate this TerminalCheckout to another entity in an external system. For example, an order ID generated by a third-party shopping cart. Will also be associated with any payments used to complete the checkout.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
        return $this;
    }
    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
  
    /**
     * Sets note
     * @param string $note An optional note to associate with the checkout, as well any payments used to complete the checkout.
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Gets device_options
     * @return \SquareConnect\Model\DeviceCheckoutOptions
     */
    public function getDeviceOptions()
    {
        return $this->device_options;
    }
  
    /**
     * Sets device_options
     * @param \SquareConnect\Model\DeviceCheckoutOptions $device_options Options to control the display and behavior of the Square Terminal device.
     * @return $this
     */
    public function setDeviceOptions($device_options)
    {
        $this->device_options = $device_options;
        return $this;
    }
    /**
     * Gets deadline_duration
     * @return string
     */
    public function getDeadlineDuration()
    {
        return $this->deadline_duration;
    }
  
    /**
     * Sets deadline_duration
     * @param string $deadline_duration The duration as an RFC 3339 duration, after which the checkout will be automatically canceled. TerminalCheckouts that are PENDING will be automatically CANCELED and have a cancellation reason of “TIMED\\_OUT”.  Default: 5 minutes from creation  Maximum: 5 minutes
     * @return $this
     */
    public function setDeadlineDuration($deadline_duration)
    {
        $this->deadline_duration = $deadline_duration;
        return $this;
    }
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status The status of the `TerminalCheckout`. Options: PENDING, IN\\_PROGRESS, CANCELED, COMPLETED
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Gets cancel_reason
     * @return string
     */
    public function getCancelReason()
    {
        return $this->cancel_reason;
    }
  
    /**
     * Sets cancel_reason
     * @param string $cancel_reason Present if the status is CANCELED. See [TerminalCheckoutCancelReason](#type-terminalcheckoutcancelreason) for possible values
     * @return $this
     */
    public function setCancelReason($cancel_reason)
    {
        $this->cancel_reason = $cancel_reason;
        return $this;
    }
    /**
     * Gets payment_ids
     * @return string[]
     */
    public function getPaymentIds()
    {
        return $this->payment_ids;
    }
  
    /**
     * Sets payment_ids
     * @param string[] $payment_ids A list of payments created by this `TerminalCheckout`.
     * @return $this
     */
    public function setPaymentIds($payment_ids)
    {
        $this->payment_ids = $payment_ids;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at The time when the `TerminalCheckout` was created as an RFC 3339 timestamp.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param string $updated_at The time when the `TerminalCheckout` was last updated as an RFC 3339 timestamp.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
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
