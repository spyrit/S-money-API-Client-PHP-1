<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class CardPaymentExtraParametersFacade.
 */
class CardPaymentExtraParametersFacade
{
    /**
     * @var string
     * @SerializedName("ProfileName")
     * @Type("string")
     */
    public $profileName;

    /**
     * @var string
     * @SerializedName("SystempayLanguage")
     * @Type("string")
     */
    public $systempayLanguage;
}
