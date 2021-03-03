<?php

namespace Smoney\Smoney\Facade;

use DateTime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PaymentScheduleFacade.
 */
class PaymentScheduleFacade
{
    /**
     * @var int
     * @SerializedName("SequenceNumber")
     * @Type("integer")
     */
    public $sequenceNumber;

    /**
     * @var int
     * @SerializedName("Amount")
     * @Type("integer")
     */
    public $amount;

    /**
     * @var DateTime
     * @SerializedName("Date")
     * @Type("DateTime<'Y-m-d\TH:i:s'>")
     */
    public $date;

    /**
     * @var int
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var int
     * @SerializedName("Fee")
     * @Type("integer")
     */
    public $fee;
}
