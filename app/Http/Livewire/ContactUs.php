<?php

namespace App\Http\Livewire;

use App\Mail\Contact as MailContact;
use App\Mail\ThankYou;
use App\Models\Contact;
use App\Models\UserVisit;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{


    public $name;
    public $email;
    public $msg;
    public $service_id;
    public $mobile_no;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'msg' => 'required',
        'service_id' => 'required',
        'mobile_no' => 'required',

    ];

    public function save(Request $request)
    {

        $userIpAddress = $request->ip();;
        $this->validate();

        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'msg' => 'required',
            'service_id' => 'required',
            'mobile_no' => 'required',
        ]);

        $validatedData['ip_address'] = $userIpAddress; // Add the IP address to the validated data
        $geoData = [];
        // for LOCAL TESTING
        // $userIpAddress = "137.96.143.251";


        $contact = Contact::create($validatedData);



        // Get the approximate user location using an IP geolocation service
        $geoData = Http::get('http://ip-api.com/json/' . $userIpAddress)->json();

        $geoData['contact_id'] = $contact->id;
        $geoData['mode'] = 1;

        // if ($geoData && $geoData['status'] === 'success') {
        //     // $validatedData['ip_location'] = json_encode($geoData);
        // }
        UserVisit::create($geoData);
        Mail::to('surmansalman@gmail.com')->bcc(['snhlrj9@gmail.com', 'surmansalman@gmail.com'])->send(new MailContact($contact));
        Mail::to($contact->email)->bcc(['snhlrj9@gmail.com', 'surmansalman@gmail.com'])->send(new ThankYou());

            //sample response
        // {
        //     "status": "success",
        //     "country": "Finland",
        //     "countryCode": "FI",
        //     "region": "18",
        //     "regionName": "Uusimaa",
        //     "city": "Espoo",
        //     "zip": "02150",
        //     "lat": 60.1698,
        //     "lon": 24.8292,
        //     "timezone": "Europe/Helsinki",
        //     "isp": "Fortum",
        //     "org": "Fortum Oyj",
        //     "as": "AS1234 Fortum",
        //     "query": "137.96.143.251"
        //     }


        session()->flash('message', 'Thank You! Our representative will contact you soon!');
        $this->name = "";
        $this->email= "";
        $this->msg= "";
        $this->service_id= "";
        $this->mobile_no= "";

    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
