<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class SubAccountFacade.
 */
class SubAccountFacade
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
     * @var int
     * @SerializedName("Amount")
     * @Type("integer")
     */
    public $amount;

    /**
     * @var string
     * @SerializedName("DisplayName")
     * @Type("string")
     */
    public $displayName;

    /**
     * @var bool
     * @SerializedName("IsDefault")
     * @Type("boolean")
     */
    public $isDefault;

    /**
     * @var DateTime
     * @SerializedName("CreationDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $created_at;
}
