<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayinFacade.
 */
class PayinFacade
{
    /**
     * @var string
     * @SerializedName("OrderId")
     * @Type("string")
     */
    public $orderId;

    /**
     * @var PayinAccountIdFacade
     * @SerializedName("AccountId")
     * @Type("Smoney\Smoney\Facade\PayinAccountIdFacade")
     */
    public $accountId;

    /**
     * @var PayinCardIdFacade
     * @SerializedName("Card")
     * @Type("Smoney\Smoney\Facade\PayinCardIdFacade")
     */
    public $card;

    /**
     * @var bool
     * @SerializedName("IsMine")
     * @Type("boolean")
     */
    public $isMine;

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
}
