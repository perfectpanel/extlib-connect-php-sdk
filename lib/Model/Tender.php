<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * Tender Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class Tender implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'location_id' => 'string',
        'transaction_id' => 'string',
        'created_at' => 'string',
        'note' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'tip_money' => '\SquareConnect\Model\Money',
        'processing_fee_money' => '\SquareConnect\Model\Money',
        'customer_id' => 'string',
        'type' => 'string',
        'card_details' => '\SquareConnect\Model\TenderCardDetails',
        'cash_details' => '\SquareConnect\Model\TenderCashDetails',
        'additional_recipients' => '\SquareConnect\Model\AdditionalRecipient[]',
        'payment_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'location_id' => 'location_id',
        'transaction_id' => 'transaction_id',
        'created_at' => 'created_at',
        'note' => 'note',
        'amount_money' => 'amount_money',
        'tip_money' => 'tip_money',
        'processing_fee_money' => 'processing_fee_money',
        'customer_id' => 'customer_id',
        'type' => 'type',
        'card_details' => 'card_details',
        'cash_details' => 'cash_details',
        'additional_recipients' => 'additional_recipients',
        'payment_id' => 'payment_id'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'transaction_id' => 'setTransactionId',
        'created_at' => 'setCreatedAt',
        'note' => 'setNote',
        'amount_money' => 'setAmountMoney',
        'tip_money' => 'setTipMoney',
        'processing_fee_money' => 'setProcessingFeeMoney',
        'customer_id' => 'setCustomerId',
        'type' => 'setType',
        'card_details' => 'setCardDetails',
        'cash_details' => 'setCashDetails',
        'additional_recipients' => 'setAdditionalRecipients',
        'payment_id' => 'setPaymentId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'transaction_id' => 'getTransactionId',
        'created_at' => 'getCreatedAt',
        'note' => 'getNote',
        'amount_money' => 'getAmountMoney',
        'tip_money' => 'getTipMoney',
        'processing_fee_money' => 'getProcessingFeeMoney',
        'customer_id' => 'getCustomerId',
        'type' => 'getType',
        'card_details' => 'getCardDetails',
        'cash_details' => 'getCashDetails',
        'additional_recipients' => 'getAdditionalRecipients',
        'payment_id' => 'getPaymentId'
    );
  
    /**
      * $id The tender's unique ID.
      * @var string
      */
    protected $id;
    /**
      * $location_id The ID of the transaction's associated location.
      * @var string
      */
    protected $location_id;
    /**
      * $transaction_id The ID of the tender's associated transaction.
      * @var string
      */
    protected $transaction_id;
    /**
      * $created_at The time when the tender was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $note An optional note associated with the tender at the time of payment.
      * @var string
      */
    protected $note;
    /**
      * $amount_money The total amount of the tender, including `tip_money`. If the tender has a `payment_id`, the `total_money` of the corresponding `Payment` will be equal to the `amount_money` of the tender.
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $tip_money The tip's amount of the tender.
      * @var \SquareConnect\Model\Money
      */
    protected $tip_money;
    /**
      * $processing_fee_money The amount of any Square processing fees applied to the tender.  This field is not immediately populated when a new transaction is created. It is usually available after about ten seconds.
      * @var \SquareConnect\Model\Money
      */
    protected $processing_fee_money;
    /**
      * $customer_id If the tender is associated with a customer or represents a customer's card on file, this is the ID of the associated customer.
      * @var string
      */
    protected $customer_id;
    /**
      * $type The type of tender, such as `CARD` or `CASH`. See [TenderType](#type-tendertype) for possible values
      * @var string
      */
    protected $type;
    /**
      * $card_details The details of the card tender.  This value is present only if the value of `type` is `CARD`.
      * @var \SquareConnect\Model\TenderCardDetails
      */
    protected $card_details;
    /**
      * $cash_details The details of the cash tender.  This value is present only if the value of `type` is `CASH`.
      * @var \SquareConnect\Model\TenderCashDetails
      */
    protected $cash_details;
    /**
      * $additional_recipients Additional recipients (other than the merchant) receiving a portion of this tender. For example, fees assessed on the purchase by a third party integration.
      * @var \SquareConnect\Model\AdditionalRecipient[]
      */
    protected $additional_recipients;
    /**
      * $payment_id The ID of the `Payment` that corresponds to this tender. This value is only present for payments created with the v2 Payments API.
      * @var string
      */
    protected $payment_id;

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
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["note"])) {
              $this->note = $data["note"];
            } else {
              $this->note = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["tip_money"])) {
              $this->tip_money = $data["tip_money"];
            } else {
              $this->tip_money = null;
            }
            if (isset($data["processing_fee_money"])) {
              $this->processing_fee_money = $data["processing_fee_money"];
            } else {
              $this->processing_fee_money = null;
            }
            if (isset($data["customer_id"])) {
              $this->customer_id = $data["customer_id"];
            } else {
              $this->customer_id = null;
            }
            if (isset($data["type"])) {
              $this->type = $data["type"];
            } else {
              $this->type = null;
            }
            if (isset($data["card_details"])) {
              $this->card_details = $data["card_details"];
            } else {
              $this->card_details = null;
            }
            if (isset($data["cash_details"])) {
              $this->cash_details = $data["cash_details"];
            } else {
              $this->cash_details = null;
            }
            if (isset($data["additional_recipients"])) {
              $this->additional_recipients = $data["additional_recipients"];
            } else {
              $this->additional_recipients = null;
            }
            if (isset($data["payment_id"])) {
              $this->payment_id = $data["payment_id"];
            } else {
              $this->payment_id = null;
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
     * @param string $id The tender's unique ID.
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
     * @param string $location_id The ID of the transaction's associated location.
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
     * @param string $transaction_id The ID of the tender's associated transaction.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;
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
     * @param string $created_at The time when the tender was created, in RFC 3339 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
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
     * @param string $note An optional note associated with the tender at the time of payment.
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
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
     * @param \SquareConnect\Model\Money $amount_money The total amount of the tender, including `tip_money`. If the tender has a `payment_id`, the `total_money` of the corresponding `Payment` will be equal to the `amount_money` of the tender.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
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
     * @param \SquareConnect\Model\Money $tip_money The tip's amount of the tender.
     * @return $this
     */
    public function setTipMoney($tip_money)
    {
        $this->tip_money = $tip_money;
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
     * @param \SquareConnect\Model\Money $processing_fee_money The amount of any Square processing fees applied to the tender.  This field is not immediately populated when a new transaction is created. It is usually available after about ten seconds.
     * @return $this
     */
    public function setProcessingFeeMoney($processing_fee_money)
    {
        $this->processing_fee_money = $processing_fee_money;
        return $this;
    }
    /**
     * Gets customer_id
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }
  
    /**
     * Sets customer_id
     * @param string $customer_id If the tender is associated with a customer or represents a customer's card on file, this is the ID of the associated customer.
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type The type of tender, such as `CARD` or `CASH`. See [TenderType](#type-tendertype) for possible values
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets card_details
     * @return \SquareConnect\Model\TenderCardDetails
     */
    public function getCardDetails()
    {
        return $this->card_details;
    }
  
    /**
     * Sets card_details
     * @param \SquareConnect\Model\TenderCardDetails $card_details The details of the card tender.  This value is present only if the value of `type` is `CARD`.
     * @return $this
     */
    public function setCardDetails($card_details)
    {
        $this->card_details = $card_details;
        return $this;
    }
    /**
     * Gets cash_details
     * @return \SquareConnect\Model\TenderCashDetails
     */
    public function getCashDetails()
    {
        return $this->cash_details;
    }
  
    /**
     * Sets cash_details
     * @param \SquareConnect\Model\TenderCashDetails $cash_details The details of the cash tender.  This value is present only if the value of `type` is `CASH`.
     * @return $this
     */
    public function setCashDetails($cash_details)
    {
        $this->cash_details = $cash_details;
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
     * @param \SquareConnect\Model\AdditionalRecipient[] $additional_recipients Additional recipients (other than the merchant) receiving a portion of this tender. For example, fees assessed on the purchase by a third party integration.
     * @return $this
     */
    public function setAdditionalRecipients($additional_recipients)
    {
        $this->additional_recipients = $additional_recipients;
        return $this;
    }
    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }
  
    /**
     * Sets payment_id
     * @param string $payment_id The ID of the `Payment` that corresponds to this tender. This value is only present for payments created with the v2 Payments API.
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;
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
