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
            session([
                'id' => $results[0]['id']
            ]);
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
            session([
                'pulled' => true
            ]);
            return redirect('/')->with('success', $results['message']);
            
        } catch (\Guzzlehttp\Exception\ClientException $e) {    
            $error = json_decode($e->getResponse()->getBody()->getContents(), true);  
            
        }
    }

    public function showTwitterChat($id) {
        $client = new Client;
        $url = 'http://localhost:8000/forensic/twitter/chat/';

        try {
            $response = $client->request('GET', $url.$id);
            $results = json_decode($response->getBody()->getContents(), true);
            // dd($resultschat);         
            return view('showTwitterChat', ['chat' => $results]);   
        } catch (\Guzzlehttp\Exception\ClientException $e) {    
            $error = json_decode($e->getResponse()->getBody()->getContents(), true);  
            
        }
    }

    public function showTwitterUser($id) {
        $client = new Client;
        $url = 'http://localhost:8000/forensic/twitter/user/';

        try {
            $response = $client->request('GET', $url.$id);
            $results = json_decode($response->getBody()->getContents(), true);
            // dd($results);         
            return view('showTwitterUser', ['data' => $results]);   
        } catch (\Guzzlehttp\Exception\ClientException $e) {    
            $error = json_decode($e->getResponse()->getBody()->getContents(), true);  
            
        }
    }
}
