<?php

namespace App\Console\Commands;

use App\Artist;
use App\Services\SpotifyService;
use Illuminate\Console\Command;

class ArtistCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artist:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artistin tüm verilerini çeker';
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
        $dbArtists = Artist::query()->whereNull('popularity')->limit(100)->get();
        foreach ($dbArtists as  $artist) {
            $result = $this->service->artist($artist->spot_id);
            $artist->genres = $result->genres[0];
            $artist->popularity = $result->popularity;
            $artist->images = $result->images[0]->url;
            $artist->save();            
            $this->line($artist->name . ' spotify\'dan infosu getirildi. ');
        }
        $this->info('Tamamlandı');
    }
}
