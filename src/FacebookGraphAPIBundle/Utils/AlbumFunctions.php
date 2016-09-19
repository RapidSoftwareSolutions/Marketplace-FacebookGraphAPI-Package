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
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * create an album for a user / page
     *
     * @param $schema
     */
    public function createAlbum($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * get photos in an album
     *
     * @param $schema
     */
    public function getAlbumPhotos($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * add a photo to an album
     *
     * @param $schema
     */
    public function addPhotoToAlbum($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * get a photo's details
     *
     * @param $schema
     */
    public function getPhoto($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

}