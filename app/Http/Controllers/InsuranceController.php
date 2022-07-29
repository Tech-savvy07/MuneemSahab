<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\Models\WebsiteSetting;
use App\Models\Page;
use App\Models\Service;
use App\Models\InsuranceTypes;
use App\Models\InsurancePartners;

class InsuranceController extends Controller
{
    public function insurance()
    {
        $vendor_id = Config::get('const.VENDOR_ID');
        $currentURL = request()->segment(count(request()->segments()));
        $page = Page::getPageByPageName($currentURL); 
        $websiteSetting = WebsiteSetting::getWebsiteSettingByVendorId($vendor_id);
        $insuranceTypes = InsuranceTypes::getInsuranceTypesByVendorId($vendor_id);
        $insurancePartners = InsurancePartners::getInsurancePartnersByVendorId($vendor_id);
        $serviceWithSubservice = Service::getServiceWithSubserviceByVendorId($vendor_id);  
        $service = Service::getServiceByVendorId($vendor_id); 
        // $card = Card::getCardByVendorId($vendor_id);    
        return view('insurance')->with(compact('websiteSetting','insuranceTypes','insurancePartners','serviceWithSubservice','service','page'));
    }
}
