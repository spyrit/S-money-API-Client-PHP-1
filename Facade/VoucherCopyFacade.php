<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class VoucherCopyFacade.
 */
class VoucherCopyFacade
{
    /**
     * @var int
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("Name")
     * @Type("string")
     */
    public $name;

    /**
     * @var string
     * @SerializedName("Type")
     * @Type("string")
     */
    public $type;

    /**
     * @var int
     * @SerializedName("Size")
     * @Type("integer")
     */
    public $size;

    /**
     * @var string
     * @SerializedName("Href")
     * @Type("string")
     */
    public $href;

    /**
     * @var string
     * @SerializedName("ContentType")
     * @Type("string")
     */
    public $contentType;

    /**
     * @var string
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var string
     * @SerializedName("Message")
     * @Type("string")
     */
    public $message;

    /**
     * @var string
     * @SerializedName("AdditionalStatus")
     * @Type("integer")
     */
    public $additionnalStatus;

    /**
     * @var string
     * @SerializedName("TreatmentDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $treatmentDate;

    /**
     * @var string
     * @SerializedName("ReceivedDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $receivedDate;
}
