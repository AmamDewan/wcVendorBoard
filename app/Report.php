<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'ws_dokan_vendor_balance';
    protected $primaryKey = 'vendor_id';

    public function getSale($year, $month)
    {
        return $this->where('vendor_id', auth()->id())->whereYear('balance_date', $year)->whereMonth('balance_date', $month)->get();
    }
}
