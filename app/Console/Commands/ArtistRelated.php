<?php

namespace App\Console\Commands;

use App\Album;
use App\Artist;
use App\Services\SpotifyService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ArtistRelated extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artist:related';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Spotify verilerinden artistin bağlantılı olduğu diğer artistleri getirir.';
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
        $dbArtist = Artist::query()->whereNull('searched')->limit(1000)->get();
        foreach ($dbArtist as  $artist) {
            $artists = $this->service->artistRelated($artist->spot_id);
            foreach ($artists->artists as  $oneArtists) {
               try {
                Artist::create([
                    'name'=>$oneArtists->name,
                    'spot_id' => $oneArtists->id,
                    'genres' => $oneArtists->genres[0],
                    'popularity' => $oneArtists->popularity,
                    'images'=>$oneArtists->images[0]
                   ]);
                   $this->line($oneArtists->name.' spotify\'dan idsi getirildi. ');
               } catch (\Exception $e) {
               }
            }
            $artist->searched = 'true';
            $artist->save();
        }
        $this->info('Tamamlandı');
    }
}
