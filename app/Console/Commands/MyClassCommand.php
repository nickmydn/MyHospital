<?php

namespace App\Console\Commands;

use App\Models\PoliAnakModel;
use App\Models\PoliGigiModel;
use Illuminate\Console\Command;

class MyClassCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:data-class';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menampilkan 3 baris data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dataA = PoliAnakModel::take(3)->get();
        $jsonA = $dataA->toJson(JSON_PRETTY_PRINT);
        $this->info($jsonA);

        $dataG = PoliGigiModel::take(3)->get();
        $jsonG = $dataG->toJson(JSON_PRETTY_PRINT);
        $this->info($jsonG);
    }
}
