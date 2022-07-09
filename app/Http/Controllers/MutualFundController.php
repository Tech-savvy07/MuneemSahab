<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\Models\WebsiteSetting;
use App\Models\InsuranceTypes;
use App\Models\MutualFundPartner;



class MutualFundController extends Controller
{
    public function mutualFund()
{
        $vendor_id = Config::get('const.VENDOR_ID');
        $websiteSetting = WebsiteSetting::getWebsiteSettingByVendorId($vendor_id);
        $insuranceTypes = InsuranceTypes::getInsuranceTypesByVendorId($vendor_id);
        $mutualFundPartners = MutualFundPartner::getMutualFundPartnersByVendorId($vendor_id);
        // $service = Service::getServiceByVendorId($vendor_id); 
        // $serviceWithSubservice = Service::getServiceWithSubserviceByVendorId($vendor_id);    
        // $card = Card::getCardByVendorId($vendor_id);    
        // echo "<pre>";
        // print_r($card);
        // die;
        return view('mutual_fund')->with(compact('websiteSetting','mutualFundPartners','insuranceTypes'));
}
}
