<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class BankAccountRefFacade.
 */
class BankAccountRefFacade
{
    /**
     * @var int
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("Href")
     * @Type("string")
     */
    public $href;
}
