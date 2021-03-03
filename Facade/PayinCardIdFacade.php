<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayinCardIdFacade.
 */
class PayinCardIdFacade
{
    /**
     * @var string
     * @SerializedName("AppCardId")
     * @Type("string")
     */
    public $appCardId;
}
