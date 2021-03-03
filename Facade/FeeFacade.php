<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class FeeFacade.
 */
class FeeFacade
{
    /**
     * @var int
     * @SerializedName("Amount")
     * @Type("integer")
     */
    public $amount;

    /**
     * @var float
     * @SerializedName("VAT")
     * @Type("double")
     */
    public $vat;

    /**
     * @var int
     * @SerializedName("AmountWithVAT")
     * @Type("integer")
     */
    public $amountWithVat;

    /**
     * @var int
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;
}
