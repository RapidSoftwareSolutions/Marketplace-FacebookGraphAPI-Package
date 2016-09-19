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
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * post to a user's feed
     *
     * @param $schema
     */
    public function addFeedPost($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * delete a feed post
     *
     * @param $schema
     */
    public function deleteFeedPost($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

}