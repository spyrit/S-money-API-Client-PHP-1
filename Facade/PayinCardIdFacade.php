<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayinCardIdFacade
 * @package Smoney\Smoney\Facade
 */
class PayinCardIdFacade
{
    /**
     * @var string $appCardId
     * @SerializedName("AppCardId")
     * @Type("string")
     */
    public $appCardId;
}
