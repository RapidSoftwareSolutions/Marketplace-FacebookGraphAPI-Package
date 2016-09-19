<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */
class PackageControllerTest extends WebTestCase
{
    /**
     * @var string
     */
    public $account_token = 'EAAPgIwC9jpcBAHZAEiqHHpNVvGqzPPTE1TbT8Km9GhoMxzPqnnRJS6lAhz2OGgYnA071n14xp08ACSxA6Pe7qXdPuYrOnArrbtXYpchiCY8uzGI0PQ6eZCRiDomqSLhERKLaF3XEVOerbDw4r2ZCL9rG7mvUqAZD';
    /**
     * @var string
     */
    public $testAccountToken = 'f1dbbb0bbc1b6aa06a5fdcf6d7072d25';
    /**
     * @var string
     */
    public $testContentMakeCall = '{"args":{"accountSid":"AC5f37acb24007a320eefb5ffaeb498a78","accountToken":"f1dbbb0bbc1b6aa06a5fdcf6d7072d25","from":"+15005550006\'","to":"+380930000895","url":"http://demo.twilio.com/docs/voice.xml"}}';
    /**
     * @var string
     */
    public $testContentSendSms = '{"args":{"accountSid":"AC5f37acb24007a320eefb5ffaeb498a78","accountToken":"f1dbbb0bbc1b6aa06a5fdcf6d7072d25","from":"+15005550006","to":"+380930000895","body":"http://demo.twilio.com/docs/voice.xml"}}';
    /**
     * @var string
     */
    public $testContentSendMms = '{"args":{"accountSid":"AC5f37acb24007a320eefb5ffaeb498a78","accountToken":"f1dbbb0bbc1b6aa06a5fdcf6d7072d25","from":"+15005550006","to":"+380930000895","mediaUrl":"http://demo.twilio.com/docs/voice.xml"}}';

    public function testMakeCall()
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/twilio/makeCall',
            [],
            [],
            [],
            $this->testContentMakeCall
        );

        $response = $client->getResponse();
        $data = json_decode($response->getContent(), true);

        $this->assertJson($response->getContent());
        $this->assertEquals('success', $data['callback']);
    }

    public function testSendSms()
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/twilio/sendSms',
            [],
            [],
            [],
            $this->testContentSendSms
        );

        $response = $client->getResponse();
        $data = json_decode($response->getContent(), true);

        $this->assertJson($response->getContent());
        $this->assertEquals('success', $data['callback']);
    }

    public function testSendMms()
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/twilio/sendMms',
            [],
            [],
            [],
            $this->testContentSendMms
        );

        $response = $client->getResponse();
        $data = json_decode($response->getContent(), true);

        $this->assertJson($response->getContent());
        $this->assertEquals('success', $data['callback']);

    }

    public function testMetadata()
    {
        $client = static::createClient();
        $client->request('GET', '/api/twilio');
        $response = $client->getResponse();
        $data = json_decode($response->getContent(), true);

        $this->assertJson($response->getContent());
        $this->assertArrayHasKey('package', $data);
        $this->assertArrayHasKey('tagline', $data);
        $this->assertArrayHasKey('description', $data);
        $this->assertArrayHasKey('image', $data);
        $this->assertArrayHasKey('repo', $data);
        $this->assertArrayHasKey('blocks', $data);
        $this->assertEquals('Twilio', $data['package']);
    }

}