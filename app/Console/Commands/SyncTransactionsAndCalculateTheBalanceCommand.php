<?php

namespace App\Console\Commands;

use App\Models\balance;
use App\Models\CustomerTransaction;
use Illuminate\Console\Command;

class SyncTransactionsAndCalculateTheBalanceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:balance';

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
        CustomerTransaction::get()->map(function($customerTransaction){
            $balance = $this->firstOrCreate($customerTransaction);

            if($customerTransaction->status === 'pending'){
                $balance->update(['debit' => $customerTransaction->debit + $balance->debit ]);
            }else{
                $balance->update(['cash' => $customerTransaction->cash + $balance->cash ]);
            }
        });

    }

    private function firstOrCreate($customerTransaction){
        $balance = balance::where('customer_id',$customerTransaction->customer_id)->first();

        if(!$balance)
        {
           $balance = balance::create([
               'customer_id' => $customerTransaction->customer_id,
               'cash' => 0,
               'debit' => 0
           ]);
        }

        return $balance;
    }
}
