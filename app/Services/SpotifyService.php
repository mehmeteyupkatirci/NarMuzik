<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use SpotifyWebAPI\{Session, SpotifyWebAPI};

class SpotifyService
{
    public function login()
    {
        $session = new Session(
            '4c2e8a48bc474c1288183dbc4529e0c1',
            'e92dd1c22afc41faabeb1382b6d33a2e',
            'http://localhost/spotify/login'
        );

        if (isset($_GET['code'])) {
            $session->requestAccessToken($_GET['code']);
            File::put(storage_path('access_token.txt'), $session->getAccessToken());
            return session(['access_token' => $session->getAccessToken()]);
        } else {
            $options = [
                'scope' => [
                    'user-read-email',
                ],
            ];

            header('Location: ' . $session->getAuthorizeUrl($options));
            die();
        }
    }
    
    private function getAPiClient(){
        
        if(app()->runningInConsole()){
           if(! File::exists(storage_path('access_token.txt'))){
               dd('Tarayıcıdan login ol');
           }else{
            $api = new SpotifyWebAPI();
            $api->setAccessToken(File::get(storage_path('access_token.txt')));
           }
        }else{
            $request = request();
            if (!$request->session()->has('access_token')) {
                return $this->login();
            }
    
            $api = new SpotifyWebAPI();
            $api->setAccessToken($request->session()->get('access_token'));
        }
        return $api;
    }

    private function logout(){
        if(File::exists(storage_path('access_token.txt'))){
            File::delete(storage_path('access_token.txt'));
        }
    }

    public function me()
    {
        $api = $this->getAPiClient();
        try {
            return $api->me();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function search($query, $type = 'artist', $options  = [])
    {
        $api = $this->getAPiClient();
        try {
            return $api->search($query, $type, $options = []);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    //ARTIST İslemleri---------------------------------------------------------
    public function artist($artistId)
    {
        $api = $this->getAPiClient();
        try {
            return $api->getArtist($artistId);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function artists($artistIds)
    {
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

        try {
            return $api->getArtists($artistIds);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function artistAlbums($artistId)
    {
       
        $api = $this->getAPiClient();
        try {
            return $api->getArtistAlbums($artistId);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function artistRelated($artistId)
    {
        $api = $this->getAPiClient();
        try {
            return $api->getArtistRelatedArtists($artistId);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    //ARTIST İSLEMLERİ SONU--------------------------------------------------
    //ALBUM İSLEMLERİ------------------------------------------------------
    public function album($albumId)
    {
        $api = $this->getAPiClient();
        try {
            return $api->getAlbum($albumId);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function albums($albumIds)
    {
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

        try {
            return $api->getAlbums($albumIds);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function albumTracks($albumId)
    {
        $api = $this->getAPiClient();
        try {
            return $api->getAlbumTracks($albumId);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    //ALBUM İSLEMLERİ SONU-------------------------------------------------
    //TRACK İSLEMLERİ-------------------------------------------------------
    public function track($trackId)
    { $api = $this->getAPiClient();
        try {
            return $api->getTrack($trackId);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function tracks($trackIds)
    {
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

        try {
            return $api->getTracks($trackIds);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    //TRACK İSLEMLERİ SONU----------------------------------------------------
}
