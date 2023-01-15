<?php

namespace App\Models;

use App\Observers\CustomerTransactionObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerTransaction extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['translated_payment_type'];

    protected static function boot()
    {
        parent::boot();

        self::observe(CustomerTransactionObserver::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function getTransactionStatusAttribute(): string
    {
        if ($this->attributes['status'] === 'paid') {
            return 'مدفوع';
        }
        return 'لم تدفع بعد';
    }

    public function getTranslatedPaymentTypeAttribute(): string
    {
        if ($this->attributes['payment_type'] === 'cash') {
            return 'كاش';
        }
        return 'ذمم';
    }
}
