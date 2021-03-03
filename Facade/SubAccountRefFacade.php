<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class SubAccountRefFacade.
 */
class SubAccountRefFacade
{
    /**
     * @var int
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("AppAccountId")
     * @Type("string")
     */
    public $appAccountId;

    /**
     * @var string
     * @SerializedName("DisplayName")
     * @Type("string")
     */
    public $displayName;

    /**
     * @var string
     * @SerializedName("Href")
     * @Type("string")
     */
    public $href;
}
