<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PaymentFacade.
 */
class PaymentFacade
{
    /**
     * @var string
     * @SerializedName("OrderId")
     * @Type("string")
     */
    public $orderId;

    /**
     * @var int
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var DateTime
     * @SerializedName("PaymentDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $paymentDate;

    /**
     * @var int
     * @SerializedName("Amount")
     * @Type("integer")
     */
    public $amount;

    /**
     * @var FeeFacade
     * @SerializedName("Fee")
     * @Type("Smoney\Smoney\Facade\FeeFacade")
     */
    public $fee;

    /**
     * @var SubAccountRefFacade
     * @SerializedName("Beneficiary")
     * @Type("Smoney\Smoney\Facade\SubAccountRefFacade")
     */
    public $beneficiary;

    /**
     * @var string
     * @SerializedName("Message")
     * @Type("string")
     */
    public $message;

    /**
     * @var string
     * @SerializedName("Sender")
     * @Type("Smoney\Smoney\Facade\SubAccountRefFacade")
     */
    public $sender;
}
