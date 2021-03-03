<?php

namespace Smoney\Smoney\Client;

use Doctrine\Common\Collections\ArrayCollection;
use Smoney\Smoney\Facade\UserCardRegistrationFacade;
use Smoney\Smoney\Facade\UserCardRegistrationResultFacade;
use Smoney\Smoney\Facade\UserFacade;

/**
 * Class UserClient.
 */
class UserClient extends AbstractClient
{
    /**
     * @param int $appUserId
     *
     * @return UserFacade
     */
    public function get($appUserId)
    {
        $uri = 'users/'.$appUserId;
        $res = $this->action('GET', $uri);

        return $this->serializer->deserialize($res, 'Smoney\Smoney\Facade\UserFacade', 'json');
    }

    /**
     * @return ArrayCollection
     */
    public function index()
    {
        $uri = 'users';
        $res = $this->action('GET', $uri);

        return $this->serializer->deserialize($res, 'ArrayCollection<Smoney\Smoney\Facade\UserFacade>', 'json');
    }

    /**
     * @param string $smoney_user_id
     * @param string $firstName
     * @param string $lastName
     * @param string email
     *
     * @return ArrayCollection
     */
    public function search($smoney_user_id = null, $firstName = null, $lastName = null, $email = null)
    {
        $uri = 'users/search?firstname='.$firstName.'&lastname='.$lastName.'&email='.$email;
        $res = $this->action('GET', $uri);

        return $this->serializer->deserialize($res, 'ArrayCollection<Smoney\Smoney\Facade\UserFacade>', 'json');
    }

    /**
     * @return UserFacade
     */
    public function create(UserFacade $user)
    {
        $uri = 'users';
        $body = $this->serializer->serialize($user, 'json');
        $res = $this->action('POST', $uri, ['body' => $body]);

        return $this->serializer->deserialize($res, 'Smoney\Smoney\Facade\UserFacade', 'json');
    }

    /**
     * @return UserFacade
     */
    public function update(UserFacade $user)
    {
        $uri = 'users/'.$user->appUserId;
        $body = $this->serializer->serialize($user, 'json');
        $res = $this->action('PUT', $uri, ['body' => $body]);

        return $this->serializer->deserialize($res, 'Smoney\Smoney\Facade\UserFacade', 'json');
    }

    /**
     * @return UserFacade
     */
    public function close(UserFacade $user)
    {
        $user->status = 5;

        return $this->update($user);
    }

    /**
     * @param $appUserId
     *
     * @return UserCardRegistrationResultFacade
     */
    public function registerCardForUser(UserCardRegistrationFacade $userCardRegistrationFacade, $appUserId)
    {
        $uri = "users/{$appUserId}/cards/registrations";
        $body = $this->serializer->serialize($userCardRegistrationFacade, 'json');
        $res = $this->action('POST', $uri, ['body' => $body]);

        return $this->serializer->deserialize($res, 'Smoney\Smoney\Facade\UserCardRegistrationResultFacade', 'json');
    }

    /**
     * @param $appUserId
     *
     * @return array|\JMS\Serializer\scalar|object
     */
    public function getCardsListForUser($appUserId)
    {
        $uri = "users/{$appUserId}/cards";
        $res = $this->action('GET', $uri);

        return $this->serializer->deserialize($res, 'ArrayCollection<Smoney\Smoney\Facade\CardFacade>', 'json');
    }
}
