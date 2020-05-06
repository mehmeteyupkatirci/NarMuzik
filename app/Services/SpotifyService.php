<?php

namespace App\Services;

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

    public function me()
    {
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

        try {
            return $api->me();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function search($query, $type = 'artist', $options  = [])
    {
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

        try {
            return $api->search($query, $type = 'artist', $options = []);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    //ARTIST İslemleri---------------------------------------------------------
    public function artist($artistId)
    {
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

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
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

        try {
            return $api->getArtistAlbums($artistId);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function artistRelated($artistId)
    {
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

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
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

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
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

        try {
            return $api->getAlbumTracks($albumId);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    //ALBUM İSLEMLERİ SONU-------------------------------------------------
    //TRACK İSLEMLERİ-------------------------------------------------------
    public function track($trackId)
    {
        $request = request();

        if (!$request->session()->has('access_token')) {
            return redirect()->to('spotify/login');
        }

        $api = new SpotifyWebAPI();
        $api->setAccessToken($request->session()->get('access_token'));

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
