<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class PagesController extends Controller
{

    public $url = 'http://192.168.100.138:8080/api/pageinfo';
    public $page_content = 'http://192.168.100.138:8080/api/pagecontent';

    public function index()
    {
        return view('index');
        
    }

    public function get_content($client, $url){
        $res = $client->request('GET', $this->page_content.'/'.$url);
        $data = $res->getBody()->getContents();
        return json_decode($data, true);
    }

    public function show($page)
    {
        $client = new Client();
        $res = $client->request('GET', $this->url);
        $data = $res->getBody()->getContents();
        $data = json_decode($data, true);
        foreach($data['data'] as $key){
            if($page == $key['url']){
                $content = $this->get_content($client, $key['url']);
                return view('page', [
                    'id' => $key['id'],
                    'title' => $key['title'],
                    'description' => $key['description'],
                    'content' => $content['data']['body'],
                    'allow_comments' => $content['data']['allow_comments']
                ]);
            }
        }
        abort(404);
        
    }

}
