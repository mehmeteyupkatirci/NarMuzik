<?php

namespace App\Console\Commands;

use App\Album;
use App\Services\SpotifyService;
use Illuminate\Console\Command;

class AlbumCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'album:get_spot_id {spot_id} {--artist_id=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Albumün tüm verilerini çeker ';
    protected $service;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->service = new SpotifyService();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->argument('spot_id') && $this->option('artist_id')) {
            $this->createAlbum($this->argument('spot_id'), $this->option('artist_id'));
        } else {
            $this->other();
        }

        $this->info('Tamamlandı');
    }

    private function createAlbum($spotId, $artistId)
    {
        $album = $this->service->album($spotId);
        Album::create([
            'name' => $album->name,
            'artist_id' => $artistId,
            'album_type_id' => 1,
            'spot_id' => $spotId,
            'copyrights' => $album->copyrights[0]->text,
            'images' => $album->images[0]->url,
            'release_date' => $album->release_date,
            'popularity' => $album->popularity
        ]);
    }

    private function other()
    {
       $this->line('createAlbum methodu çalışmıyor');
    }
}
