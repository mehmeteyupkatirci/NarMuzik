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

    public function artist($id){
        $result = $this->service->artist($id);
        dd($result);
    }
}
