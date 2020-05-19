<?php

namespace App\Console\Commands;

use App\Album;
use Illuminate\Console\Command;
use App\Services\SpotifyService;
use Illuminate\Support\Facades\Artisan;

class AlbumTracks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'album:track';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    protected $service;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->service= new SpotifyService();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dbAlbum = Album::query()->whereNull('checked')->limit(1000)->get();
        foreach ($dbAlbum as  $album) {
           $track = $this->service->albumTracks($album->spot_id);
            foreach ($track->items as  $oneTrack) {
            Artisan::call('track:get_spot_id '.$oneTrack->id.' --album_id='.$album->id);
            }
            $album->checked = 'true';
            $album->save();
            $this->line($album->name . ' spotify\'dan şarkıları getirildi. ');
        }
        $this->info('Tamamlandı');
    }
}
