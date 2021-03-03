<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class BankAccountFacade.
 */
class BankAccountFacade
{
    /**
     * @var int
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("DisplayName")
     * @Type("string")
     */
    public $displayName;

    /**
     * @var string
     * @SerializedName("Bic")
     * @Type("string")
     */
    public $bic;

    /**
     * @var string
     * @SerializedName("Iban")
     * @Type("string")
     */
    public $iban;

    /**
     * @var bool
     * @SerializedName("IsMine")
     * @Type("boolean")
     */
    public $isMine;
}
