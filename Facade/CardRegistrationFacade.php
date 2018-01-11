<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class CardRegistrationFacade
 * @package Smoney\Smoney\Facade
 */
class CardRegistrationFacade
{
    /**
     * @var string $appCardId
     * @SerializedName("AppCardId")
     * @Type("string")
     */
    public $appCardId;
}