<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class CardFacade.
 */
class UserCardRegistrationFacade
{
    /**
     * @var CardFacade
     * @SerializedName("Card")
     * @Type("Smoney\Smoney\Facade\CardRegistrationFacade")
     */
    public $card;

    /**
     * @var string
     * @SerializedName("UrlReturn")
     * @Type("string")
     */
    public $urlReturn;

    /**
     * @var string
     * @SerializedName("UrlCallback")
     * @Type("string")
     */
    public $urlCallback;
}
