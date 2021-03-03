<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class ExtraParametersFacade.
 */
class ExtraParametersFacade
{
    /**
     * @var string
     * @SerializedName("Reference")
     * @Type("string")
     */
    public $reference;

    /**
     * @var string
     * @SerializedName("Motif")
     * @Type("string")
     */
    public $motif;
}
