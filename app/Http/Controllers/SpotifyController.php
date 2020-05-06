<?php

namespace App\Http\Controllers;

use App\Services\SpotifyService;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new SpotifyService();
    }

    public function login()
    {
        $result = $this->service->login();
        return $result;
    }

    public function me()
    {
        $result = $this->service->me();
        return response(json_encode($result));
    }

    public function search(Request $request){
        $result = $this->service->search($request->input('query'));
        dd($result);
        return response(json_encode($result));
    }
    //ARTIST 
    public function artist($id){
        $result = $this->service->artist($id);
        dd($result);
    }
    public function artists($id){
        $result = $this->service->artists($id);
        dd($result);
    }
    public function artistAlbums($id){
        $result = $this->service->artistAlbums($id);
        dd($result);
    }
    public function artistRelated($id){
        $result = $this->service->artistRelated($id);
        dd($result);
    }
    //END ARTIST
    //ALBUM
    public function album($id){
        $result = $this->service->album($id);
        dd($result);
    }
    public function albums($id){
        $result = $this->service->albums($id);
        dd($result);
    }
    public function albumTracks($id){
        $result = $this->service->albumTracks($id);
        dd($result);
    }
    //END ALBUM
    public function track($id){
        $result = $this->service->track($id);
        dd($result);
    }
    public function tracks($id){
        $result = $this->service->tracks($id);
        dd($result);
    }
}
