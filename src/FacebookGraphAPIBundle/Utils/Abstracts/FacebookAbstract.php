<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils\Abstracts;


abstract class FacebookAbstract
{
    /**
     * @var mixed
     */
    protected $response;
    /**
     * @var mixed
     */
    protected $parameters;
    /**
     * @var mixed
     */
    protected $httpClient;

    /**
     * FacebookAbstract constructor.
     *
     * @param $request
     * @param $httpClient
     */
    public function __construct($request, $httpClient)
    {
        $this->request = $request->getCurrentRequest();
        $this->body = json_decode($this->request->getContent(), true);
        $this->parameters = $this->body['args'];
        $this->httpClient = $httpClient;
    }

    /**
     * return a method to be used as a callback
     *
     * @param $callbackMethod
     * @return array
     */
    public function getCallback($callbackMethod)
    {
        return [$this, $callbackMethod];
    }

    /**
     * @param $schema
     * @return string
     */
    public function prepareQuery($schema)
    {
        $query = [];

        foreach ($schema['args'] as $facebookValue => $rapidApiValue) {
            if (isset($this->parameters[$rapidApiValue])) {
                $query[$facebookValue] = $this->parameters[$rapidApiValue];
            }
        }

        if ($schema['object']['optimal'] == false) {
            if ($schema['args_in_body']) {
                return ['url' => $schema['url'] . $schema['object']['default'] . $schema['uri'], 'args' => $query];
            } else {
                return ['url' => $schema['url'] . $schema['object']['default'] . $schema['uri'] . http_build_query($query, '', '&')];
            }
        } elseif (isset($this->parameters[$schema['object']['optimal']])) {
            if ($schema['args_in_body']) {
                return ['url' => $schema['url'] . $this->parameters[$schema['object']['optimal']] . $schema['uri'], 'args' => $query];
            } else {
                return ['url' => $schema['url'] . $this->parameters[$schema['object']['optimal']] . $schema['uri'] . http_build_query($query, '', '&')];
            }
        } elseif ($schema['object']['default'] != false) {
            if ($schema['args_in_body']) {
                return ['url' => $schema['url'] . $schema['object']['default'] . $schema['uri'], 'args' => $query];
            } else {
                return ['url' => $schema['url'] . $schema['object']['default'] . $schema['uri'] . http_build_query($query, '', '&')];
            }
        } else {
            return $schema['object']['error'];
        }
    }

    /**
     * @param $schema
     * @param $query
     *
     * @return mixed
     */
    public function sendRequest($schema, $query)
    {
        if ($query == $schema['object']['error']) {

            return $schema['object']['error'];
        } else {
            $headers = array(
                'Content-Type' => 'application/json',
            );

            if ($schema['args_in_body']) {
                $response = $this->httpClient->{$schema['method']}($query['url'], $headers, $query['args']);

            } else {
                $response = $this->httpClient->{$schema['method']}($query['url'], $headers);

            }

            return $response->getContent();
        }
    }

    /**
     * @param $responseMessage
     *
     * todo tokin valid/invalid
     * @param $schema
     */
    public function setResponse($responseMessage, $schema)
    {
        if ($responseMessage == $schema['object']['error']) {
            $this->response = ['callback' => $schema['callback_message']['error'], 'contextWrites' => ['to' => $responseMessage]];
        } elseif (isset(json_decode($responseMessage)->error)) {
            $responseMessage = json_decode($responseMessage);

            if (isset($schema['callback_message']['invalid']) && $responseMessage->error->code == 190) {
                $this->response = ['callback' => $schema['callback_message']['invalid'], 'contextWrites' => ['to' => $responseMessage]];
            } else {
                $this->response = ['callback' => $schema['callback_message']['error'], 'contextWrites' => ['to' => $responseMessage]];
            }
        } else {
            $responseMessage = json_decode($responseMessage);

            if (isset($responseMessage->data->is_valid)) {
                if ($responseMessage->data->is_valid == true) {
                    $this->response = ['callback' => $schema['callback_message']['valid'], 'contextWrites' => ['to' => $responseMessage]];
                }
            } else {
                $this->response = ['callback' => $schema['callback_message']['success'], 'contextWrites' => ['to' => $responseMessage]];

            }
        }
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function pagination()
    {

    }

}