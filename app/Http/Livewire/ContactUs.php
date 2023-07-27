<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

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

    public function save(){

        $this->validate();

        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'msg' => 'required',
            'service_id' => 'required',
            'mobile_no' => 'required',
        ]);

        Contact::create($validatedData);

        session()->flash('message', 'Thank You! Our representative will contact you soon!');

    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
