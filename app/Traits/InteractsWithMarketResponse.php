<?php

namespace App\Traits;

trait InteractsWithMarketResponse
{
    use ConsumeExternalServices;
    /**
     * Decode correspondingly the response
     * @return stdClass
     */
    public function decodeResponse($response)
    {
        $decodeResponse = json_decode($response);
        return $decodeResponse->data ?? $decodeResponse;
    }
     /**
     * Resolve when the request failed
     * @return void
     */
    public function checkIfErrorResponse($response)
    {
        if(isset($response->error)){
            throw new \Exception("Something failed : {$response->error}");
        }
    }
}