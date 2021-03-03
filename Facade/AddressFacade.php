<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class AddressFacade.
 */
class AddressFacade
{
    /**
     * @var string
     * @SerializedName("Street")
     * @Type("string")
     */
    public $street;

    /**
     * @var string
     * @SerializedName("ZipCode")
     * @Type("string")
     */
    public $zipCode;

    /**
     * @var string
     * @SerializedName("City")
     * @Type("string")
     */
    public $city;

    /**
     * @var string
     * @SerializedName("Country")
     * @Type("string")
     */
    public $country;
}
