<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "card";
    use HasFactory;
    public function getCardByVendorId($vendor_id)
    {
        return Card::where(['vendor_id'=> $vendor_id,'is_active'=>1])->get()->toArray();
    }
}
