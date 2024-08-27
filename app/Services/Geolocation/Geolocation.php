<?php

namespace App\Services\Geolocation;
use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class Geolocation{

    private $map;
    private $satellite;
    public function __construct(string $address,Map $map, Satellite $satellite)
    {
        //

        $this->map = $map;
        $this->satellite = $satellite;
    }

    public function search(string $address){

        $point = $this->map->findAddress($address);
        return $this->satellite->pinPoint($point);
        // return $point;
    }
}
