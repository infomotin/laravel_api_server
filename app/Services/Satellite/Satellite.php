<?php

namespace App\Services\Satellite;

use App\Services\Map\Map;

class Satellite
{
    

    public function pinPoint(array $point){
        $point['lat'] = 600;
        $point['lng'] = 654;
        return [
            'lat' => $point['lat'],
            'lng' => $point['lng']
        ];
    }
}
