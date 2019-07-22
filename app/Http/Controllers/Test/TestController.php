<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
    	$data = $this->makeRequest('https://reqres.in/api/users');
    	dd($data);
    }



    public function makeRequest($url)
    {
    	$client = new Client();
    	$response = $client->request('POST', $url,[
    		'form_params'=>[
    			'name'=>"morpheus",
    			'job'=>"leader"
    		]
    	]);
    	$response = $response->getBody();
    	return json_decode($response,true);
    }


}
