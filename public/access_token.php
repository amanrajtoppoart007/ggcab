<?php

class Instamojo
{
    private $client_id;
    private $client_secret;
    private $url = "https://api.instamojo.com/oauth2/token/";
    private $env = "production";

    public function __construct($client_id, $client_secret)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
    }

    public function getToken() {
        if (substr( $this->client_id, 0, 5 ) === "test_") {
            $this->url = "https://test.instamojo.com/oauth2/token/";
            $this->env = "test";
        }
        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, rawurldecode(http_build_query(array(
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'grant_type' => 'client_credentials'
        ))));
        $json = json_decode(curl_exec($curl));
        if(curl_error($curl))
        {
            echo 'error:' . curl_error($curl);
        }
        if (isset($json->error)) {
            return "Error: " . $json->error;
            throw new \Exception("Error: " . $json->error);
        }
        $this->token = $json;
        return $this->env . $json->access_token;
    }
}

$instamojo = new Instamojo("PKcxqoDbsXlDGYEIHELVUciGaVRCzEfV4WASxq1x", "EMQOpFaRGzyl3LBlR3c9cy4UwZY9sAtwyqHRpnsLmh1wcI3hLPnDhZs2NouLxPbWIysgjmaLfaj6I9mPjdoI1OA4qzH9TYD3aNlYc71GW4lp8VSNwazM02kpZat0MB3v");

echo $instamojo->getToken();
?>