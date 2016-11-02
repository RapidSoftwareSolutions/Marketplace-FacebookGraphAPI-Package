<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;


use FacebookGraphAPIBundle\Utils\Abstracts\FacebookAbstract;

class CommentFunctions extends FacebookAbstract
{
    /**
     * get comments for a graph object
     *
     * @param $schema
     */
    public function getComments($schema)
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
     * post a comment on a graph object
     *
     * @param $schema
     */
    public function addComment($schema)
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
     * update a comment
     *
     * @param $schema
     */
    public function updateComment($schema)
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
     * delete a comment
     *
     * @param $schema
     */
    public function deleteComment($schema)
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