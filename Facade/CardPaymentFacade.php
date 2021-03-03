<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class CardPaymentFacade
 */
class CardPaymentFacade
{
    /**
     * @var string $orderId
     * @SerializedName("OrderId")
     * @Type("string")
     */
    public $orderId;

    /**
     * @var int $id
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var DateTime $paymentDate
     * @SerializedName("PaymentDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $paymentDate;

    /**
     * @var int $amount
     * @SerializedName("Amount")
     * @Type("integer")
     */
    public $amount;

    /**
     * @var int $fee
     * @SerializedName("Fee")
     * @Type("integer")
     */
    public $fee;

    /**
     * @var int $status
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var SubAccountRefFacade $beneficiary
     * @SerializedName("Beneficiary")
     * @Type("Smoney\Smoney\Facade\SubAccountRefFacade")
     */
    public $beneficiary;

    /**
     * @var string $message
     * @SerializedName("Message")
     * @Type("string")
     */
    public $message;

    /**
     * @var string $href
     * @SerializedName("Href")
     * @Type("string")
     */
    public $href;

    /**
     * @var bool $isMine
     * @SerializedName("IsMine")
     * @Type("boolean")
     */
    public $isMine;

    /**
     * @var int $errorCode
     * @SerializedName("ErrorCode")
     * @Type("integer")
     */
    public $errorCode;

    /**
     * @var ExtraResultsFacade $extraResults
     * @SerializedName("ExtraResults")
     * @Type("Smoney\Smoney\Facade\ExtraResultsFacade")
     */
    public $extraResults;

    /**
     * @var string $urlReturn
     * @SerializedName("UrlReturn")
     * @Type("string")
     */
    public $urlReturn;

    /**
     * @var string $urlCallback
     * @SerializedName("UrlCallback")
     * @Type("string")
     */
    public $urlCallback;

    /**
     * @var string $availableCards
     * @SerializedName("AvailableCards")
     * @Type("string")
     */
    public $availableCards;

    /**
     * @var int $type
     * @SerializedName("Type")
     * @Type("integer")
     */
    public $type;

    /**
     * @var CardFacade $card
     * @SerializedName("Card")
     * @Type("Smoney\Smoney\Facade\CardFacade")
     */
    public $card;

    /**
     * @var ArrayCollection<PaymentScheduleFacade> $paymentSchedule
     * @SerializedName("PaymentSchedule")
     * @Type("ArrayCollection<Smoney\Smoney\Facade\PaymentScheduleFacade>")
     */
    public $paymentSchedule;

    /**
     * @var ArrayCollection<PaymentScheduleFacade> $schedules
     * @SerializedName("Schedules")
     * @Type("ArrayCollection<Smoney\Smoney\Facade\PaymentScheduleFacade>")
     */
    public $schedules;

    /**
     * @var ArrayCollection<PaymentFacade> $payments
     * @SerializedName("Payments")
     * @Type("ArrayCollection<Smoney\Smoney\Facade\PaymentFacade>")
     */
    public $payments;

    /**
     * @var PayerInfoFacade $payerInfo
     * @SerializedName("PayerInfo")
     * @Type("Smoney\Smoney\Facade\PayerInfoFacade")
     */
    public $payerInfo;

    /**
     * @var bool $require3DS
     * @SerializedName("Require3DS")
     * @Type("boolean")
     */
    public $require3DS;

    /**
     * @var ExtraParametersFacade $extraParameters
     * @SerializedName("ExtraParameters")
     * @Type("Smoney\Smoney\Facade\CardPaymentExtraParametersFacade")
     */
    public $extraParameters;
}
