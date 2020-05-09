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
    protected $signature = 'album:get_spot_id';

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
        $this->service = new SpotifyService();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dbArtists = Album::query()->whereNull('spot_id')->limit(3)->get();
        foreach ($dbArtists as  $artist) {
            $result = $this->service->search($artist->name);
            $artist->spot_id = $result->artists->items[0]->id;
            $artist->save();
            $this->line($artist->name.' spotify\'dan idsi getirildi. ');
        }
        $this->info('Tamamlandı');
    }
}
