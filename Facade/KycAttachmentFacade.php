<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class KycFacade.
 */
class KycAttachmentFacade
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
     * @var int
     * @SerializedName("Type")
     * @Type("integer")
     */
    public $type;

    /**
     * @var string
     * @SerializedName("ContentType")
     * @Type("string")
     */
    public $contentType;

    /**
     * @var int
     * @SerializedName("Size")
     * @Type("integer")
     */
    public $size;

    /**
     * @var int
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
     * @var int
     * @SerializedName("AdditionalStatus")
     * @Type("integer")
     */
    public $additionalStatus;

    /**
     * @var DateTime
     * @SerializedName("TreatmentDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $treatmentDate;

    /**
     * @var DateTime
     * @SerializedName("ReceivedDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $receivedDate;

    /**
     * @var string
     * @SerializedName("Href")
     * @Type("href")
     */
    public $href;
}
