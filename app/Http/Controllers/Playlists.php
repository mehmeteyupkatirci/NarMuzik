<?php

namespace App\Http\Controllers;

use App\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Playlists extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlist = Db::select('select * from playlists');
        return view('playlist.home',['playlists' => $playlist]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('playlist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $description = $request->get('description');
        $user =  Auth::user()->id;
        $public = $request->get('public');
        $playlists = DB::insert('insert into playlists (user_id,name, description, public) value(?,?,?,?)',[$user,$name, $description,$public]);
        if ($playlists) 
        {
            $red = redirect('playlist')->with('success','Data has been added');
        }
        else
        {
            $red = redirect('playlist/edit')->with('danger','Please try again');
        }
        return $red;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playlists = DB::select('select * from playlists where id=?',[$id]);
        return view('playlist.edit',['playlist'=> $playlists]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $description = $request->get('description');
        $public = $request->get('public');
        $playlist = DB::update('update playlists set name = ? , description=?, public =? where id=?',[$name, $description, $public, $id]);
        if ($playlist) 
        {
            $red = redirect('playlist')->with('success','Data has been added');
        }
        else
        {
            $red = redirect('playlist')->with('danger','Please try again');
        }
        return $red;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $playlist = DB::delete('delete from playlists where id = ?',[$id]);
        $red = redirect('playlist');
        return $red;
    }
}
