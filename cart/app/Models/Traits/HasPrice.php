<?php

namespace App\Models\Traits;

use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use App\Cart\Money;
use NumberFormatter;

trait HasPrice
{

    public function getPriceAttribute($value)
    {
        return new Money($value);
    }

    public function getFormattedPriceAttribute()
    {
//       return $this->price->formatted();
    }
}