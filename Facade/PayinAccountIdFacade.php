<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayinFacadeAccountId.
 */
class PayinAccountIdFacade
{
    /**
     * @var string
     * @SerializedName("AppAccountId")
     * @Type("string")
     */
    public $appAccountId;
}
