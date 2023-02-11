<?php

namespace App\Console\Commands;

use App\Interfaces\BitfinexServiceInterface;
use App\Interfaces\MarketStateRepositoryInterface;
use Illuminate\Console\Command;

class DailyTicker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ticker:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Collect daily data from bitfinex';

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
    public function handle(BitfinexServiceInterface $bitfinexService, MarketStateRepositoryInterface $marketStateRepository)
    {

        $tickerData = $bitfinexService->getTickerData();
        $marketStateRepository->create($tickerData);
        $this->info('Successfully sent daily quote to everyone.');
        return 0;
    }
}
