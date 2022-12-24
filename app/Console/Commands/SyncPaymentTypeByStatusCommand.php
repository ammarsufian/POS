<?php

namespace App\Console\Commands;

use App\Models\CustomerTransaction;
use Illuminate\Console\Command;

class SyncPaymentTypeByStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:payment-type';

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
        CustomerTransaction::get()
            ->each(function (CustomerTransaction $transaction){
                if($transaction->status ==='pending') {
                    $transaction->update(['payment_type' => 'debit']);
                }
        });
    }
}
