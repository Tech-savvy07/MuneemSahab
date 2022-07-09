<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutualFundPartner extends Model
{
    protected $table = "mutual_fund_partners";
    use HasFactory;

    public function getMutualFundPartnersByVendorId($vendor_id)
    {
        $mutualFundPartners = MutualFundPartner::where('vendor_id', $vendor_id)->get();
        return $mutualFundPartners;
    }}
