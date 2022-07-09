<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsurancePartners extends Model
{
    protected $table = "insurance_partners";
    use HasFactory;

    public function getInsurancePartnersByVendorId($vendor_id)
    {
        $insurancePartners = InsurancePartners::where('vendor_id', $vendor_id)->get();
        return $insurancePartners;
    }
}
