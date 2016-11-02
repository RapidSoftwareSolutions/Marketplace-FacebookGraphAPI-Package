<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;


use FacebookGraphAPIBundle\Utils\Abstracts\FacebookAbstract;

class AlbumFunctions extends FacebookAbstract
{
    /**
     * get an album's details
     *
     * @param $schema
     */
    public function getAlbum($schema)
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
     * create an album for a user / page
     *
     * @param $schema
     */
    public function createAlbum($schema)
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
     * get photos in an album
     *
     * @param $schema
     */
    public function getAlbumPhotos($schema)
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
     * add a photo to an album
     *
     * @param $schema
     */
    public function addPhotoToAlbum($schema)
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
     * get a photo's details
     *
     * @param $schema
     */
    public function getPhoto($schema)
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