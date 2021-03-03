<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class CardRegistrationFacade.
 */
class CardRegistrationFacade
{
    /**
     * @var string
     * @SerializedName("AppCardId")
     * @Type("string")
     */
    public $appCardId;
}
