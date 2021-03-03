<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class UserProfileFacade.
 */
class UserProfileFacade
{
    /**
     * @var int
     * @SerializedName("Civility")
     * @Type("integer")
     */
    public $civility;

    /**
     * @var string
     * @SerializedName("FirstName")
     * @Type("string")
     */
    public $firstName;

    /**
     * @var string
     * @SerializedName("LastName")
     * @Type("string")
     */
    public $lastName;

    /**
     * @var DateTime
     * @SerializedName("Birthdate")
     * @Type("DateTime<'Y-m-d\TH:i:s'>")
     */
    public $birthdate;

    /**
     * @var string
     * @SerializedName("PhoneNumber")
     * @Type("string")
     */
    public $phoneNumber;

    /**
     * @var string
     * @SerializedName("Email")
     * @Type("string")
     */
    public $email;

    /**
     * @var string
     * @SerializedName("Alias")
     * @Type("string")
     */
    public $alias;

    /**
     * @var string
     * @SerializedName("CSPCode")
     * @Type("string")
     */
    public $cspcode;

    /**
     * @var AddressFacade
     * @SerializedName("Address")
     * @Type("Smoney\Smoney\Facade\AddressFacade")
     */
    public $address;

    /**
     * @var PhotoRefFacade
     * @SerializedName("Picture")
     * @Type("Smoney\Smoney\Facade\PhotoRefFacade")
     */
    public $photoRef;
}
