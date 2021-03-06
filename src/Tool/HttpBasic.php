<?php

namespace App\Tool;

/**
 * custom cURL wrapper
 */
class HttpBasic
{

    protected $response;

    /**
     * Method http - PHP cURL Wrapper
     *
     * @param $path  [domain path including parameters]
     * @param $payload [data posted]
     * @param $method  [HTTP method, e.g POST]
     *
     * @return response
     */
    public function http($path = null, $payload = null, $method = null)
    {
        $base = getenv('BASE_URL');
        $auth = getenv('AUTH_KEY');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "$base/$path",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: ',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $this->setResponse($response);
    }

    /**
     * Get the value of response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set the value of response
     *
     * @return  self
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }
}
