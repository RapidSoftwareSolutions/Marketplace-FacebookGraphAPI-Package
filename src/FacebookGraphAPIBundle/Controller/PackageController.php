<?php

namespace FacebookGraphAPIBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */
class PackageController extends Controller
{
    /**
     *
     * @Route("/api/{packageName}", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"GET"})
     *
     * @return JsonResponse
     */
    public function metadataAction()
    {
        return new JsonResponse($this->getParameter('app_bundle.metadata'));
    }

    /**
     * @Route("/api/{packageName}/validateUserToken", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function validateUserTokenAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('validateUserToken');

        $callback($this->getParameter('app_bundle.validate_user_token'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/extendUserToken", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function extendUserTokenAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('extendUserToken');

        $callback($this->getParameter('app_bundle.extend_user_token'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUserAlbums", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUserAlbumsAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('getUserAlbums');

        $callback($this->getParameter('app_bundle.get_user_albums'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUsersFriends", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUsersFriendsAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('getUsersFriends');

        $callback($this->getParameter('app_bundle.get_users_friends'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUsersLikedPages", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUsersLikedPagesAction()
    {
        $graph = $this->get('app_bundle.user_functions');

        $callback = $graph->getCallback('getUsersLikedPages');

        $callback($this->getParameter('app_bundle.get_users_liked_pages'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getCurrentProfile", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getCurrentProfileAction()
    {
        $graph = $this->get('app_bundle.profile_functions');

        $callback = $graph->getCallback('getCurrentProfile');

        $callback($this->getParameter('app_bundle.get_current_profile'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getProfile", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getProfileAction()
    {
        $graph = $this->get('app_bundle.profile_functions');

        $callback = $graph->getCallback('getProfile');

        $callback($this->getParameter('app_bundle.get_profile'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getProfilePicture", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getProfilePictureAction()
    {
        $graph = $this->get('app_bundle.profile_functions');

        $callback = $graph->getCallback('getProfilePicture');

        $callback($this->getParameter('app_bundle.get_profile_picture'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getLikes", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getLikesAction()
    {
        $graph = $this->get('app_bundle.like_functions');

        $callback = $graph->getCallback('getLikes');

        $callback($this->getParameter('app_bundle.get_likes'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/addLike", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function addLikeAction()
    {
        $graph = $this->get('app_bundle.like_functions');

        $callback = $graph->getCallback('addLike');

        $callback($this->getParameter('app_bundle.add_like'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/deleteLike", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function deleteLikeAction()
    {
        $graph = $this->get('app_bundle.like_functions');

        $callback = $graph->getCallback('deleteLike');

        $callback($this->getParameter('app_bundle.delete_like'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getUsersFeed", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getUsersFeedAction()
    {
        $graph = $this->get('app_bundle.feed_functions');

        $callback = $graph->getCallback('getUsersFeed');

        $callback($this->getParameter('app_bundle.get_users_feed'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/addFeedPost", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function addFeedPostAction()
    {
        $graph = $this->get('app_bundle.feed_functions');

        $callback = $graph->getCallback('addFeedPost');

        $callback($this->getParameter('app_bundle.add_feed_post'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/deleteFeedPost", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function deleteFeedPostAction()
    {
        $graph = $this->get('app_bundle.feed_functions');

        $callback = $graph->getCallback('deleteFeedPost');

        $callback($this->getParameter('app_bundle.delete_feed_post'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getComments", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getCommentsAction()
    {
        $graph = $this->get('app_bundle.comment_functions');

        $callback = $graph->getCallback('getComments');

        $callback($this->getParameter('app_bundle.get_comments'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/addComment", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function addCommentAction()
    {
        $graph = $this->get('app_bundle.comment_functions');

        $callback = $graph->getCallback('addComment');

        $callback($this->getParameter('app_bundle.add_comment'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/updateComment", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function updateCommentAction()
    {
        $graph = $this->get('app_bundle.comment_functions');

        $callback = $graph->getCallback('updateComment');

        $callback($this->getParameter('app_bundle.update_comment'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/deleteComment", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function deleteCommentAction()
    {
        $graph = $this->get('app_bundle.comment_functions');

        $callback = $graph->getCallback('deleteComment');

        $callback($this->getParameter('app_bundle.delete_comment'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getAlbum", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getAlbumAction()
    {
        $graph = $this->get('app_bundle.album_functions');

        $callback = $graph->getCallback('getAlbum');

        $callback($this->getParameter('app_bundle.get_album'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/createAlbum", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function createAlbumAction()
    {
        $graph = $this->get('app_bundle.album_functions');

        $callback = $graph->getCallback('createAlbum');

        $callback($this->getParameter('app_bundle.create_album'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getAlbumPhotos", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getAlbumPhotosAction()
    {
        $graph = $this->get('app_bundle.album_functions');

        $callback = $graph->getCallback('getAlbumPhotos');

        $callback($this->getParameter('app_bundle.get_album_photos'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/addPhotoToAlbum", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function addPhotoToAlbumAction()
    {
        $graph = $this->get('app_bundle.album_functions');

        $callback = $graph->getCallback('addPhotoToAlbum');

        $callback($this->getParameter('app_bundle.add_photo_to_album'));

        return new JsonResponse($graph->getResponse());
    }

    /**
     * @Route("/api/{packageName}/getPhoto", requirements={"packageName": "FacebookGraphAPI"})
     * @Method({"POST"})
     *
     * @return mixed
     */
    public function getPhotoAction()
    {
        $graph = $this->get('app_bundle.album_functions');

        $callback = $graph->getCallback('getPhoto');

        $callback($this->getParameter('app_bundle.get_photo'));

        return new JsonResponse($graph->getResponse());
    }

}