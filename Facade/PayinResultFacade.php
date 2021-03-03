<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayinResultFacade.
 *
 * @see http://api.s-money.fr/documentation/utiliser-l-api/paiement-par-carte-bancaire/?lang=fr#target_29
 */
class PayinResultFacade
{
    const STATUS_PENDING = 0;
    const STATUS_FULFILLED = 1;
    const STATUS_REFUNDED = 2;
    const STATUS_FAILED = 3;
    const STATUS_WAITING_FOR_VALIDATION = 4;
    const STATUS_CANCELED = 5;
    const STATUS_WAITING_FOR_HANDLING = 6;

    /**
     * @var int
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var \DateTime
     * @SerializedName("OperationDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $operationDate;

    /**
     * @var FeeFacade
     * @SerializedName("Fee")
     * @Type("Smoney\Smoney\Facade\FeeFacade")
     */
    public $fee;
}
