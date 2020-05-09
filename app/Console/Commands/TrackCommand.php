<?php

namespace App\Console\Commands;

use App\Services\SpotifyService;
use App\Track;
use Illuminate\Console\Command;

class TrackCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'track:get_spot_id';
    protected $service;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $dbArtists = Track::query()->whereNull('spot_id')->limit(3)->get();
        foreach ($dbArtists as  $artist) {
            $result = $this->service->search($artist->name);
            $artist->spot_id = $result->artists->items[0]->id;
            $artist->save();
            $this->line($artist->name.' spotify\'dan idsi getirildi. ');
        }
        $this->info('Tamamlandı');
    }
}
