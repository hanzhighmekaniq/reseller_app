<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ResetProductStock extends Command
{
    protected $signature = 'product:reset-stock';
    protected $description = 'Reset product stock to 0 every day';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Product::query()->update(['qty' => 0]);
        $this->info('Product stock has been reset to 0.');
    }
}
