<?php

namespace IlhamriSKY\PddiktiApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Helper
{
    private $url;
    private $key;

    public function __construct()
    {
        $this->url = base64_decode('aHR0cHM6Ly9wZGRpa3RpLmtlbWRpa2J1ZC5nby5pZC9hcGk=');
        $this->key = '3ed297db-db1c-4266-8bf4-a89f21c01317';
    }

    /**
     * Sends a GET request and returns the JSON response.
     * @param string $endpoint
     * @return array|null
     */
    public function response($endpoint)
    {
        $client = new Client();
        try {
            $response = $client->request('GET', $endpoint, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'x-api-key' => $this->key,
                ]
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            // Error handling
            echo "Error fetching data: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Encodes binary image content to a base64 string.
     * @param string $imageContent
     * @return string
     */
    public function base64EncodeImage($imageContent)
    {
        return base64_encode($imageContent);
    }

    /**
     * Fetches an image from the given URL and returns it as a base64-encoded string.
     * @param string $url
     * @return string|null
     */
    public function fetchImageAsBase64($url)
    {
        $client = new Client();
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'x-api-key' => $this->key,
                ]
            ]);
            return $this->base64EncodeImage($response->getBody()->getContents());
        } catch (RequestException $e) {
            echo "Error fetching image: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Encodes a string into a valid URL format.
     * @param string $string
     * @return string
     */
    public function parse($string)
    {
        return urlencode($string);
    }

    /**
     * Decodes the base64-encoded URL stored in the class.
     * @return string
     */
    public function endpoint()
    {
        return $this->url;
    }

    /**
     * Appends a version to the decoded URL.
     * @param string $version
     * @return string
     */
    public function withVersion($version)
    {
        return $this->endpoint() . $version;
    }
}
