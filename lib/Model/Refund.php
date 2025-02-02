<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Refund Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Refund implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'location_id' => 'string',
        'transaction_id' => 'string',
        'tender_id' => 'string',
        'created_at' => 'string',
        'reason' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'status' => 'string',
        'processing_fee_money' => '\SquareConnect\Model\Money',
        'additional_recipients' => '\SquareConnect\Model\AdditionalRecipient[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'location_id' => 'location_id',
        'transaction_id' => 'transaction_id',
        'tender_id' => 'tender_id',
        'created_at' => 'created_at',
        'reason' => 'reason',
        'amount_money' => 'amount_money',
        'status' => 'status',
        'processing_fee_money' => 'processing_fee_money',
        'additional_recipients' => 'additional_recipients'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'transaction_id' => 'setTransactionId',
        'tender_id' => 'setTenderId',
        'created_at' => 'setCreatedAt',
        'reason' => 'setReason',
        'amount_money' => 'setAmountMoney',
        'status' => 'setStatus',
        'processing_fee_money' => 'setProcessingFeeMoney',
        'additional_recipients' => 'setAdditionalRecipients'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'transaction_id' => 'getTransactionId',
        'tender_id' => 'getTenderId',
        'created_at' => 'getCreatedAt',
        'reason' => 'getReason',
        'amount_money' => 'getAmountMoney',
        'status' => 'getStatus',
        'processing_fee_money' => 'getProcessingFeeMoney',
        'additional_recipients' => 'getAdditionalRecipients'
    );
  
    /**
      * $id The refund's unique ID.
      * @var string
      */
    protected $id;
    /**
      * $location_id The ID of the refund's associated location.
      * @var string
      */
    protected $location_id;
    /**
      * $transaction_id The ID of the transaction that the refunded tender is part of.
      * @var string
      */
    protected $transaction_id;
    /**
      * $tender_id The ID of the refunded tender.
      * @var string
      */
    protected $tender_id;
    /**
      * $created_at The time when the refund was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $reason The reason for the refund being issued.
      * @var string
      */
    protected $reason;
    /**
      * $amount_money The amount of money refunded to the buyer.
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $status The current status of the refund (`PENDING`, `APPROVED`, `REJECTED`, or `FAILED`). See [RefundStatus](#type-refundstatus) for possible values
      * @var string
      */
    protected $status;
    /**
      * $processing_fee_money The amount of Square processing fee money refunded to the *merchant*.
      * @var \SquareConnect\Model\Money
      */
    protected $processing_fee_money;
    /**
      * $additional_recipients Additional recipients (other than the merchant) receiving a portion of this refund. For example, fees assessed on a refund of a purchase by a third party integration.
      * @var \SquareConnect\Model\AdditionalRecipient[]
      */
    protected $additional_recipients;

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
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
            if (isset($data["transaction_id"])) {
              $this->transaction_id = $data["transaction_id"];
            } else {
              $this->transaction_id = null;
            }
            if (isset($data["tender_id"])) {
              $this->tender_id = $data["tender_id"];
            } else {
              $this->tender_id = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["reason"])) {
              $this->reason = $data["reason"];
            } else {
              $this->reason = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
            }
            if (isset($data["processing_fee_money"])) {
              $this->processing_fee_money = $data["processing_fee_money"];
            } else {
              $this->processing_fee_money = null;
            }
            if (isset($data["additional_recipients"])) {
              $this->additional_recipients = $data["additional_recipients"];
            } else {
              $this->additional_recipients = null;
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
     * @param string $id The refund's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
     * @param string $location_id The ID of the refund's associated location.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }
  
    /**
     * Sets transaction_id
     * @param string $transaction_id The ID of the transaction that the refunded tender is part of.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;
        return $this;
    }
    /**
     * Gets tender_id
     * @return string
     */
    public function getTenderId()
    {
        return $this->tender_id;
    }
  
    /**
     * Sets tender_id
     * @param string $tender_id The ID of the refunded tender.
     * @return $this
     */
    public function setTenderId($tender_id)
    {
        $this->tender_id = $tender_id;
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
     * @param string $created_at The time when the refund was created, in RFC 3339 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
  
    /**
     * Sets reason
     * @param string $reason The reason for the refund being issued.
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
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
     * @param \SquareConnect\Model\Money $amount_money The amount of money refunded to the buyer.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
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
     * @param string $status The current status of the refund (`PENDING`, `APPROVED`, `REJECTED`, or `FAILED`). See [RefundStatus](#type-refundstatus) for possible values
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Gets processing_fee_money
     * @return \SquareConnect\Model\Money
     */
    public function getProcessingFeeMoney()
    {
        return $this->processing_fee_money;
    }
  
    /**
     * Sets processing_fee_money
     * @param \SquareConnect\Model\Money $processing_fee_money The amount of Square processing fee money refunded to the *merchant*.
     * @return $this
     */
    public function setProcessingFeeMoney($processing_fee_money)
    {
        $this->processing_fee_money = $processing_fee_money;
        return $this;
    }
    /**
     * Gets additional_recipients
     * @return \SquareConnect\Model\AdditionalRecipient[]
     */
    public function getAdditionalRecipients()
    {
        return $this->additional_recipients;
    }
  
    /**
     * Sets additional_recipients
     * @param \SquareConnect\Model\AdditionalRecipient[] $additional_recipients Additional recipients (other than the merchant) receiving a portion of this refund. For example, fees assessed on a refund of a purchase by a third party integration.
     * @return $this
     */
    public function setAdditionalRecipients($additional_recipients)
    {
        $this->additional_recipients = $additional_recipients;
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
