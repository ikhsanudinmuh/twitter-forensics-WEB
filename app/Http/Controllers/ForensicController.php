<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class ForensicController extends Controller
{
    public function index() {
        $client = new Client;
        $url = 'http://localhost:8000/forensic/devices';

        try {
            $response = $client->request('GET', $url);
            $results = json_decode($response->getBody()->getContents(), true);
            return view('index', ['data' => $results]);
            
        } catch (\Guzzlehttp\Exception\ClientException $e) {    
            $error = json_decode($e->getResponse()->getBody()->getContents(), true);  
            
        }
    }

    public function pullTwitter($id) {
        $client = new Client;
        $url = 'http://localhost:8000/forensic/twitter/';

        try {
            $response = $client->request('GET', $url.$id);
            $results = json_decode($response->getBody()->getContents(), true);
            dd($results);
            
        } catch (\Guzzlehttp\Exception\ClientException $e) {    
            $error = json_decode($e->getResponse()->getBody()->getContents(), true);  
            
        }
    }
}
