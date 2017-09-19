<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayinFacadeAccountId
 * @package Smoney\Smoney\Facade
 */
class PayinAccountIdFacade
{
    /**
     * @var string $appAccountId
     * @SerializedName("AppAccountId")
     * @Type("string")
     */
    public $appAccountId;
}
