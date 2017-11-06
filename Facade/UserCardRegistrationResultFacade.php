<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class UserCardRegistrationResultFacade
{
    /**
     * @var string $href
     * @SerializedName("Href")
     * @Type("string")
     */
    public $href;

    /**
     * @var int $status
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var int $errorCode
     * @SerializedName("ErrorCode")
     * @Type("integer")
     */
    public $errorCode;

    /**
     * @var ExtraResultsFacade $extraResults
     * @SerializedName("ExtraResults")
     * @Type("Smoney\Smoney\Facade\ExtraResultsFacade")
     */
    public $extraResults;
}