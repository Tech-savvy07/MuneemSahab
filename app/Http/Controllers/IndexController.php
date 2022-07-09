<?php

namespace App\Http\Controllers;

use App\Models\WebsiteSetting;
use App\Models\Service;
use App\Models\Contact;
use App\Models\Card;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Config;
use Alert;


class IndexController extends Controller
{
    // index
    public function index()
    {
        $vendor_id = Config::get('const.VENDOR_ID');
        $websiteSetting = WebsiteSetting::getWebsiteSettingByVendorId($vendor_id);
        $service = Service::getServiceByVendorId($vendor_id); 
        $serviceWithSubservice = Service::getServiceWithSubserviceByVendorId($vendor_id);    
        $card = Card::getCardByVendorId($vendor_id);    
        // echo "<pre>";
        // print_r($websiteSetting);
        // die;
        return view('index')->with(compact('websiteSetting','service','card','serviceWithSubservice'));
    }
    // Contact
    public function contact()
    { 
        $vendor_id = Config::get('const.VENDOR_ID');
        $websiteSetting = WebsiteSetting::getWebsiteSettingByVendorId($vendor_id);
        return view('contact', compact('websiteSetting'));
    }

    //Save contact
    public function saveContact(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            // print_r($data);
            // die;
            $validated = $request->validate([
               'name' => 'required',
               'mobile' => 'required|min:10|max:10',
            ]);

            if ($validated) {
                $vendor_id = Config::get('const.VENDOR_ID');
                $contact = new Contact;
                $contact->vendor_id = $vendor_id;
                $contact->name = $data['name'];
                $contact->mobile = $data['mobile'];
                $contact->email = $data['email'];
                $contact->message = $data['message'];

                // print_r($data);die;
                if ($contact->save()) {
                    alert()->success('We will contact you soon', 'Thank You!')->persistent('Close');
                    return redirect('/');
                } else {
                    alert()->error('Some error occured', 'Oops!')->persistent('Close');
                    return redirect('/');
                }
            }
        }
    }

    //Save appointment
    public function submitAppointmentForm(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            // print_r($data);
            // die;
            try {
                $validated = $request->validate([
                    $data['name'] => 'required',
                    $data['email'] => 'required',
                    $data['phone'] => 'required|min:10|max:10',
                    $data['appointmentDate'] => 'required',
                ]);
    
                
                if ($validated) {
                    $vendor_id = Config::get('const.VENDOR_ID');
                    $appointment = new Appointment;
                    $appointment->vendor_id = $vendor_id;
                    $appointment->name = $data['name'];
                    $appointment->phone = $data['phone'];
                    $appointment->email = $data['email'];
                    $appointment->appointmentDate = $data['appointmentDate'];
    
                    if ($appointment->save()) {
                        alert()->success('Your appointment booked for date..', 'Thank You!')->persistent('Close');
                        // return redirect('/');
                    } else {
                        alert()->success('Some error occured!', 'Sorry!')->persistent('Close');
                        // return redirect('/');
                    }
                }
            } catch (\Throwable $th) {
                print_r($th);
                die;
            }
        }
    }
}
