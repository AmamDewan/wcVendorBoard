<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Unirest\Request;

class Poster extends Model
{
    public function getinfo()
    {

        $response = Request::get("https://covid-193.p.rapidapi.com/statistics",
            array(
                "X-RapidAPI-Host" => "covid-193.p.rapidapi.com",
                "X-RapidAPI-Key" => "ffc151bfbdmshd4e5f9a8612aaf5p186f11jsn4740687ed2cf"
            )
        );
        return $response->body->response;
    }


}
