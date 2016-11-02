<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;

use FacebookGraphAPIBundle\Utils\Abstracts\FacebookAbstract;

class UserFunctions extends FacebookAbstract
{
    /**
     * validate token
     *
     * @param $schema
     */
    public function validateUserToken($schema)
    {
        $response = $this->sendRequest($schema, $this->prepareQuery($schema));

        if($response == $schema['object']['error']){

            $this->result = $response;

            $this->setResponse($schema);
        }else{

            $this->result = json_decode($response, true);

            $this->pagination($schema);

            $this->setResponse($schema);
        }
    }

    /**
     * extend user token
     *
     * @param $schema
     */
    public function extendUserToken($schema)
    {
        $response = $this->sendRequest($schema, $this->prepareQuery($schema));

        if($response == $schema['object']['error']){

            $this->result = $response;

            $this->setResponse($schema);
        }else{

            $this->result = json_decode($response, true);

            $this->pagination($schema);

            $this->setResponse($schema);
        }
    }

    /**
     * get user albums
     *
     * @param $schema
     */
    public function getUserAlbums($schema)
    {
        $response = $this->sendRequest($schema, $this->prepareQuery($schema));

        if($response == $schema['object']['error']){

            $this->result = $response;

            $this->setResponse($schema);
        }else{

            $this->result = json_decode($response, true);

            $this->pagination($schema);

            $this->setResponse($schema);
        }
    }

    /**
     * get users friends
     *
     * @param $schema
     */
    public function getUsersFriends($schema)
    {
        $response = $this->sendRequest($schema, $this->prepareQuery($schema));

        if($response == $schema['object']['error']){

            $this->result = $response;

            $this->setResponse($schema);
        }else{

            $this->result = json_decode($response, true);

            $this->pagination($schema);

            $this->setResponse($schema);
        }
    }

    /**
     * get users liked pages
     *
     * @param $schema
     */
    public function getUsersLikedPages($schema)
    {
        $response = $this->sendRequest($schema, $this->prepareQuery($schema));

        if($response == $schema['object']['error']){

            $this->result = $response;

            $this->setResponse($schema);
        }else{

            $this->result = json_decode($response, true);

            $this->pagination($schema);

            $this->setResponse($schema);
        }
    }

}