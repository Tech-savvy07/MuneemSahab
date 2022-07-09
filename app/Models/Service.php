<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "service";
    use HasFactory;
    public function getServiceByVendorId($vendor_id)
    {
        return Service::where(['vendor_id'=> $vendor_id,'is_active'=>1])->get()->toArray();;
    }

    public static function getServiceWithSubserviceByVendorId($vendor_id)
    {

        // DB::enableQueryLog();
        $getServiceWithSubservice = Service::with('getSubservices')->where(['vendor_id'=> $vendor_id,'is_active'=>1])->get();
    
        // dd(DB::getQueryLog());
        $getServiceWithSubservice = json_decode(json_encode($getServiceWithSubservice), true);
        // echo "<pre>";
        // print_r($getServiceWithSubservice);
        // die;
        return $getServiceWithSubservice;
    }

    public function getSubservices()
    {
        $subservices = $this->hasMany('App\Models\Subservice', 'service_id', 'id')->where(['is_active' => '1']);
        // echo "<pre>";
        // print_r($subservices);
        // die;
        return $subservices;
    }
  
}
