<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceTypes extends Model
{
    protected $table = "insurance_types";
    use HasFactory;

    public function getInsuranceTypesByVendorId($vendor_id)
    {
        $insuranceTypes = InsuranceTypes::where('vendor_id', $vendor_id)->get();
        return $insuranceTypes;
    }
}
