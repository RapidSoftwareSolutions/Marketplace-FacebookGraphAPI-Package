<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;


use FacebookGraphAPIBundle\Utils\Abstracts\FacebookAbstract;

class FeedFunctions extends FacebookAbstract
{
    /**
     * get users feed
     *
     * @param $schema
     */
    public function getUsersFeed($schema)
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
     * post to a user's feed
     *
     * @param $schema
     */
    public function addFeedPost($schema)
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
     * delete a feed post
     *
     * @param $schema
     */
    public function deleteFeedPost($schema)
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