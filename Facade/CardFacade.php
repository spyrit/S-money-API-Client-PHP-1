<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class CardFacade.
 */
class CardFacade
{
    /**
     * @var int
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("AppCardId")
     * @Type("string")
     */
    public $appCardId;

    /**
     * @var string
     * @SerializedName("Name")
     * @Type("string")
     */
    public $name;

    /**
     * @var string
     * @SerializedName("Hint")
     * @Type("string")
     */
    public $hint;

    /**
     * @var string
     * @SerializedName("Country")
     * @Type("string")
     */
    public $country;

    /**
     * @var DateTime
     * @SerializedName("ExpiryDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $expiryDate;
}
