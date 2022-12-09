<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['transaction_status'];

    public function getTransactionStatusAttribute():string
    {
        if ($this->attributes['status'] === 'paid') {
            return 'كاش';
        }
        return 'ذمم';
    }
}
