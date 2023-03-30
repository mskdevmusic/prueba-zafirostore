<?php

namespace App\Console\Commands;

use App\Products;
use Illuminate\Console\Command;

class DeleteProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:DeleteProducts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Products with status 0';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Products::where('status', 0)->delete();
        return 0;
    }
}
