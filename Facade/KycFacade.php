<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class KycFacade.
 */
class KycFacade
{
    /**
     * @var int
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var DateTime
     * @SerializedName("RequestDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $requestDate;

    /**
     * @var int
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var string
     * @SerializedName("Reason")
     * @Type("string")
     */
    public $reason;

    /**
     * @var VoucherCopiesFacade
     * @SerializedName("VoucherCopies")
     * @Type("ArrayCollection<Smoney\Smoney\Facade\VoucherCopyFacade>")
     */
    public $voucherCopies;
}
