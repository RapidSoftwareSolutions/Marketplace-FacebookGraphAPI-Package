<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;


use FacebookGraphAPIBundle\Utils\Abstracts\FacebookAbstract;

class LikeFunctions extends FacebookAbstract
{
    /**
     * get list of likes
     *
     * @param $schema
     */
    public function getLikes($schema)
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
     * add a new like
     *
     * @param $schema
     */
    public function addLike($schema)
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
     * delete a like the user has added
     *
     * @param $schema
     */
    public function deleteLike($schema)
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