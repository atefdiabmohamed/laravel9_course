<?php

namespace App\Console\Commands;
use App\Models\job;
use Illuminate\Console\Command;

class Atef extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'atef';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       update(new job(),array("active"=>0),array("active"=>1));
    }
}
