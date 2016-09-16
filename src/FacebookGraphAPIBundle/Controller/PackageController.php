<?php

namespace FacebookGraphAPIBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */
class PackageController extends Controller
{
    /**
     *
     * @Route("/api/{packageName}", requirements={"packageName": "facebookGraphAPI"})
     * @Method({"GET"})
     *
     * @return JsonResponse
     */
    public function metadataAction()
    {
        return new JsonResponse($this->getParameter('app_bundle.metadata'));
    }

    /**
     * @Route("/api/{packageName}/validateUserToken", requirements={"packageName": "facebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function validateUserTokenAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('validateUserToken');

        $callback($this->getParameter('app_bundle.validate_user_token_input'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/extendUserToken", requirements={"packageName": "facebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function extendUserTokenAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('extendUserToken');

        $callback($this->getParameter('app_bundle.extend_user_token_input'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUserAlbums", requirements={"packageName": "facebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUserAlbumsAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('getUserAlbums');

        $callback($this->getParameter('app_bundle.user_albums_input'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUsersFriends", requirements={"packageName": "facebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUsersFriendsAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('getUsersFriends');

        $callback($this->getParameter('app_bundle.users_friends_input'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUsersFeed", requirements={"packageName": "facebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUsersFeedAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('getUsersFeed');

        $callback($this->getParameter('app_bundle.users_feed_input'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUsersLikedPages", requirements={"packageName": "facebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUsersLikedPagesAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('getUsersLikedPages');

        $callback($this->getParameter('app_bundle.users_liked_pages_input'));

        return new JsonResponse($graph->getResponse());
    }

}