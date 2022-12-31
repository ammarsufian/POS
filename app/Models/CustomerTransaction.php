<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['payment_type'];

    public function getTransactionStatusAttribute():string
    {
        if ($this->attributes['status'] === 'paid') {
            return 'مدفوع';
        }
        return 'لم تدفع بعد';
    }

    public function getPaymentTypeAttribute():string
    {
        if ($this->attributes['payment_type'] === 'cash') {
            return 'كاش';
        }
        return 'ذمم';
    }
}
