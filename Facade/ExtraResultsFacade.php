<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class ExtraResultsFacade.
 */
class ExtraResultsFacade
{
    /**
     * @var int
     * @SerializedName("BankAuthResult")
     * @Type("integer")
     */
    public $bankAuthResult;

    /**
     * @var int
     * @SerializedName("RiskControlResult")
     * @Type("integer")
     */
    public $riskControlResult;

    /**
     * @var int
     * @SerializedName("ThreedsResult")
     * @Type("integer")
     */
    public $threedsResult;

    /**
     * @var bool
     * @SerializedName("WarrantyResult")
     * @Type("boolean")
     */
    public $warrantyResult;
}
