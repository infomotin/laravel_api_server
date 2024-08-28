<?php 


namespace App;
use App\Services\Geolocation\Geolocation;
use App\Services\Geolocation\GeolocationFacade;
class PlayGround
{
    public function __construct(Geolocation $geolocation)
    {
        // create GeoLocationFacade:: 
        $result = GeolocationFacade::search('London');
        dump($result);
        // $geolocation = app(Geolocation::class);  

    }
}