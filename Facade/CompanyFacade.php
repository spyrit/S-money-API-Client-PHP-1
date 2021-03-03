<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CompanyFacade
{
    /**
     * @var string
     * @SerializedName("Name")
     * @Type("string")
     */
    public $name;

    /**
     * @var string
     * @SerializedName("Siret")
     * @Type("string")
     */
    public $siret;

    /**
     * @var string
     * @SerializedName("NAFCode")
     * @Type("string")
     */
    public $nafCode;
}
