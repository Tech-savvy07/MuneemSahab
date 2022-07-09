<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    protected $table = "website_setting";
    use HasFactory;
    public function getWebsiteSettingByVendorId($vendor_id)
    {
        $websiteSetting = WebsiteSetting::where('vendor_id', $vendor_id)->first();
        return $websiteSetting;
    }
}
