<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;

class UserFunctions extends FacebookAbstract
{
    /**
     * return a method to be used as a callback
     *
     * @param $callbackMethod
     * @return array
     */
    public function getCallback($callbackMethod)
    {
        return [$this, $callbackMethod];
    }

    /**
     * validate token
     *
     * @param $input
     */
    public function validateUserToken($input)
    {
        $token_input = $input;
        $token_input['input_token'] = $this->parameters['access_token'];
        $token_input['access_token'] = $this->parameters['access_token'];

        $this->setResponse(json_decode($this->sendRequest('get', 'debug_token', $token_input)));
    }

    /**
     * extend user token
     *
     * @param $input
     */
    public function extendUserToken($input)
    {

    }

    /**
     * get user albums
     *
     * @param $input
     */
    public function getUserAlbums($input)
    {

    }

    /**
     * get users friends
     *
     * @param $input
     */
    public function getUsersFriends($input)
    {

    }

    /**
     * get users feed
     *
     * @param $input
     */
    public function getUsersFeed($input)
    {

    }

    /**
     * get users liked pages
     *
     * @param $input
     */
    public function getUsersLikedPages($input)
    {

    }

}