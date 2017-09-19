<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayinFacade
 * @package Smoney\Smoney\Facade
 */
class PayinFacade
{
    /**
     * @var string $orderId
     * @SerializedName("OrderId")
     * @Type("string")
     */
    public $orderId;

    /**
     * @var PayinAccountIdFacade $accountId
     * @SerializedName("AccountId")
     * @Type("Smoney\Smoney\Facade\PayinAccountIdFacade")
     */
    public $accountId;

    /**
     * @var PayinCardIdFacade $card
     * @SerializedName("Card")
     * @Type("Smoney\Smoney\Facade\PayinCardIdFacade")
     */
    public $card;

    /**
     * @var bool $isMine
     * @SerializedName("IsMine")
     * @Type("boolean")
     */
    public $isMine;

    /**
     * @var int $amount
     * @SerializedName("Amount")
     * @Type("integer")
     */
    public $amount;

    /**
     * @var FeeFacade $fee
     * @SerializedName("Fee")
     * @Type("Smoney\Smoney\Facade\FeeFacade")
     */
    public $fee;

}
