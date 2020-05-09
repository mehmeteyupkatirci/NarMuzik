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
        $dbTracks = Track::query()->whereNull('spot_id')->limit(3)->get();
        foreach ($dbTracks as  $track) {
            $result = $this->service->search($track->name,'track');
            $track->spot_id = $result->tracks->items[0]->id;
            $track->preview_url = $result->tracks->items[0]->preview_url;
            $track->disc_number = $result->tracks->items[0]->track_number;
            $track->duration_ms = $result->tracks->items[0]->duration_ms;
            $track->popularity = $result->tracks->items[0]->popularity;
            $track->save();
            $this->line($track->name.' spotify\'dan idsi getirildi. ');
        }
        $this->info('Tamamlandı');
    }
}
