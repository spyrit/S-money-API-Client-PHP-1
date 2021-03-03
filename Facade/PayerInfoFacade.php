<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class PayerInfoFacade.
 */
class PayerInfoFacade
{
    /**
     * @var string
     * @SerializedName("Name")
     * @Type("string")
     */
    public $name;

    /**
     * @var string
     * @SerializedName("Mail")
     * @Type("string")
     */
    public $mail;
}
