<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;


abstract class FacebookAbstract
{
    /**
     * @var mixed
     */
    protected $response;
    /**
     * @var string
     */
    protected $accessToken;
    /**
     * @var mixed
     */
    protected $parameters;
    /**
     * @var mixed
     */
    protected $httpClient;
    /**
     * @var string
     */
    protected $facebookUrl;

    /**
     * FacebookAbstract constructor.
     *
     * @param $request
     * @param $httpClient
     * @param $facebookUrl
     */
    public function __construct($request, $httpClient, $facebookUrl)
    {
        $this->request = $request->getCurrentRequest();
        $this->body = json_decode($this->request->getContent(), true);
        $this->parameters = $this->body['args'];
        $this->httpClient = $httpClient;
        $this->facebookUrl = $facebookUrl;
    }

    /**
     * @param $method
     * @param $action
     * @param $input
     * @return mixed
     */
    public function sendRequest($method, $action, $input)
    {
        $query = http_build_query($input);

        $headers = array(
            'Content-Type' => 'application/json',
        );

        $response = $this->httpClient->{$method}($this->facebookUrl . '/' . $action . '?' . $query, $headers);

        return $response->getContent();
    }

    /**
     * @param $responseMessage
     *
     * todo tokin valid/invalid
     */
    public function setResponse($responseMessage)
    {
        if (isset($responseMessage->error)) {
            $this->response = ['callback' => 'error', 'contextWrites' => ['to' => $responseMessage->error]];
        } else {
            $this->response = ['callback' => 'success', 'contextWrites' => ['to' => $responseMessage->data]];
        }
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

}