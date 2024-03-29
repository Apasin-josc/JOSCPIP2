<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;
use App\Traits\AuthorizesMarketRequests;
use App\Traits\InteractsWithMarketResponse;

class MarketService
{
    use ConsumeExternalServices ,AuthorizesMarketRequests, InteractsWithMarketResponse;
    /**
     * The URL to send the requests
     * @var string
     */
    protected $baseUri;

    public function __construct(){
        $this->baseUri = config('services.market.base_uri');
    }

    /**
     *  Obtains the list of products from the API
     * @return stdClass
    */
    public function getProducts()
    {
        return $this->makeRequest('GET', 'products');
    }

    /**
     *  Obtains the list of categories from the API
     * @return stdClass
    */
    public function getCategories()
    {
        return $this->makeRequest('GET', 'categories');
    }

    /**
     *  Obtains a product from the API
     * @return stdClass
    */
    public function getProduct($id)
    {
        return $this->makeRequest('GET', "products/{$id}");
    }

     /**
     *  Obtains a product from the API
     * @return stdClass
    */
    public function getCategoryProducts($id)
    {
        return $this->makeRequest('GET', "categories/{$id}/products");
    }
}