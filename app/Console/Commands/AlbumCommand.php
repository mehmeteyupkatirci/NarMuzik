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
        $dbAlbums = Album::query()->whereNull('spot_id')->limit(3)->get();
        foreach ($dbAlbums as  $album) {
            $result = $this->service->search($album->name,'album');
            $album->spot_id = $result->albums->items[0]->id;
            dd($result);
            $album->save();
            $this->line($album->name.' spotify\'dan idsi getirildi. ');
        }
        $this->info('Tamamlandı');
    }
}