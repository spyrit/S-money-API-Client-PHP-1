<?php

namespace Smoney\Smoney\Facade;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class UserProfileFacade.
 */
class UserFacade
{
    /**
     * @var int
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var string
     * @SerializedName("AppUserId")
     * @Type("string")
     */
    public $appUserId;

    /**
     * @var int
     * @SerializedName("Role")
     * @Type("integer")
     */
    public $role;

    /**
     * @var int
     * @SerializedName("Type")
     * @Type("integer")
     */
    public $type;

    /**
     * @var int
     * @SerializedName("Amount")
     * @Type("integer")
     */
    public $amount;

    /**
     * @var UserProfileFacade
     * @SerializedName("Profile")
     * @Type("Smoney\Smoney\Facade\UserProfileFacade")
     */
    public $profile;

    /**
     * @var ArrayCollection<int, SubAccountFacade>
     * @SerializedName("SubAccounts")
     * @Type("ArrayCollection<Smoney\Smoney\Facade\SubAccountFacade>")
     */
    public $subAccounts;

    /**
     * @var ArrayCollection<int, BankAccountFacade>
     * @SerializedName("BankAccountRef")
     * @Type("ArrayCollection<Smoney\Smoney\Facade\BankAccountFacade>")
     */
    public $bankAccounts;

    /**
     * @var ArrayCollection<int, CbCardFacade>
     * @SerializedName("CbCards")
     * @Type("ArrayCollection<Smoney\Smoney\Facade\CbCardFacade>")
     */
    public $cbCards;

    /**
     * @var int
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var CompanyFacade
     * @SerializedName("Company")
     * @Type("Smoney\Smoney\Facade\CompanyFacade")
     */
    public $company;
}
