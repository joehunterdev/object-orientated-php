<?php

abstract class HttpClient
{
    private $curl;

    public function __construct()
    {
        $this->curl = curl_init();
    }

    // No need for abstract as were using the same method for all classes
    protected function sendRequest($url, $method, $headers, $body = null)
    {

        $ch = curl_init();

        if ($ch === false) {
            throw new Exception('Failed to initialize cURL');
        }

        curl_setopt_array($this->curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => $headers,
        ]);

        if ($method == 'POST') {
            curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($body));
        }

        $response = curl_exec($this->curl);
        $err = curl_error($this->curl);

        curl_close($this->curl);

        // // Debug headers
        // echo "Headers: ";
        // var_dump($headers);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
    // You can add similar methods for GET, PUT, DELETE, etc.
}
 

 