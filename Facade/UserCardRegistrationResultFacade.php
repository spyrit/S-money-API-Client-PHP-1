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
}