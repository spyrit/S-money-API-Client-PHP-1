<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class UserCardRegistrationResultFacade
{
    /**
     * @var string
     * @SerializedName("Href")
     * @Type("string")
     */
    public $href;

    /**
     * @var int
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var int
     * @SerializedName("ErrorCode")
     * @Type("integer")
     */
    public $errorCode;

    /**
     * @var ExtraResultsFacade
     * @SerializedName("ExtraResults")
     * @Type("Smoney\Smoney\Facade\ExtraResultsFacade")
     */
    public $extraResults;
}
