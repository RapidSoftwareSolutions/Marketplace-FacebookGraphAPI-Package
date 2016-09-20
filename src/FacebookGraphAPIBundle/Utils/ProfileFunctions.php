<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;


use FacebookGraphAPIBundle\Utils\Abstracts\FacebookAbstract;

class ProfileFunctions extends FacebookAbstract
{
    /**
     * get basic information about current user
     *
     * @param $schema
     */
    public function getCurrentProfile($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * get a profile (User / Page / Group / Event / Application)
     *
     * @param $schema
     */
    public function getProfile($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

    /**
     * get a profile's (user / page / group / etc...) picture
     *
     * @param $schema
     */
    public function getProfilePicture($schema)
    {
        $this->result = json_decode($this->sendRequest($schema, $this->prepareQuery($schema)), true);

        $this->pagination($schema);

        $this->setResponse($schema);
    }

}