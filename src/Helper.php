<?php

namespace ilhamrisky\PddiktiApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Helper
{
    private $url;
    private $host;
    private $origin;
    private $referer;
    private $ip;

    public function __construct()
    {
        $this->url = base64_decode('aHR0cHM6Ly9hcGktcGRkaWt0aS5rZW1kaWt0aXNhaW50ZWsuZ28uaWQ=');
        $this->host = base64_decode('YXBpLXBkZGlrdGkua2VtZGlrdGlzYWludGVrLmdvLmlk');
        $this->origin = base64_decode('aHR0cHM6Ly9wZGRpa3RpLmtlbWRpa3Rpc2FpbnRlay5nby5pZA==');
        $this->referer = base64_decode('aHR0cHM6Ly9wZGRpa3RpLmtlbWRpa3Rpc2FpbnRlay5nby5pZC8=');
        $this->ip = base64_decode('MTAzLjQ3LjEzMi4yOQ==');
    }

    /**
     * Retrieves the public IP address of the machine.
     * @return string
     */
    public function getIp()
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://api.ipify.org?format=json');
            $data = json_decode($response->getBody()->getContents(), true);
            return $data['ip'] ?? $this->ip;
        } catch (RequestException $e) {
            echo "Error fetching IP: " . $e->getMessage();
            return $this->ip;
        }
    }

    /**
     * Returns a single header dictionary for requests.
     * @return array
     */
    public function getHeaders()
    {
        return [
            'Accept' => 'application/json, text/plain, */*',
            'Accept-Encoding' => 'gzip, deflate, br, zstd',
            'Accept-Language' => 'en-US,en;q=0.9,mt;q=0.8',
            'Connection' => 'keep-alive',
            'DNT' => '1',
            'Host' => $this->host,
            'Origin' => $this->origin,
            'Referer' => $this->referer,
            'Sec-Fetch-Dest' => 'empty',
            'Sec-Fetch-Mode' => 'cors',
            'Sec-Fetch-Site' => 'same-site',
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0',
            'X-User-IP' => $this->getIp(),
            'sec-ch-ua' => '"Microsoft Edge";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"Windows"',
        ];
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
                'headers' => $this->getHeaders()
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
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
                'headers' => $this->getHeaders()
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
     * Decodes a Base64-encoded string.
     * @param string $string
     * @return string
     */
    public function decode($string)
    {
        return base64_decode($string);
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
