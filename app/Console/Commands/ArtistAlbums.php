<?php

namespace App\Console\Commands;

use App\Album;
use App\Artist;
use App\Services\SpotifyService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ArtistAlbums extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artist:album';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artist tablosunun checked sütunu boş olan artistlerin albümlerini çeker';
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
        $dbArtist = Artist::query()->whereNull('checked')->limit(1000)->get();
        foreach ($dbArtist as  $artist) {
            $albums = $this->service->artistAlbums($artist->spot_id);
            foreach ($albums->items as  $oneAlbum) {
            Artisan::call('album:get_spot_id '.$oneAlbum->id.' --artist_id='.$artist->id);
            }
            $artist->checked = 'true';
            $artist->save();
            $this->line($artist->name . ' spotify\'dan albumu getirildi. ');
        }
        $this->info('Tamamlandı');
    }
}
