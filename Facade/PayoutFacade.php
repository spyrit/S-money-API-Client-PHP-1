<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayoutFacade.
 */
class PayoutFacade
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
     * @var SubAccountRefFacade
     * @SerializedName("AccountId")
     * @Type("Smoney\Smoney\Facade\SubAccountRefFacade")
     */
    public $subAccountRef;

    /**
     * @var BankAccountFacade
     * @SerializedName("BankAccount")
     * @Type("Smoney\Smoney\Facade\BankAccountFacade")
     */
    public $bankAccount;

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
     * @var DateTime
     * @SerializedName("OperationDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $operationDate;

    /**
     * @var string
     * @SerializedName("Message")
     * @Type("string")
     */
    public $message;

    /**
     * @var ExtraParametersFacade
     * @SerializedName("ExtraParameters")
     * @Type("Smoney\Smoney\Facade\ExtraParametersFacade")
     */
    public $extraParameters;
}
