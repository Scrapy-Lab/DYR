<div class="auto-container">
    <div class="outer-box">
        <div class="row clearfix">
            <div class="reserv-col col-lg-8 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="title">
                        <h2>Get In Touch</h2>
                        <div class="request-info">Call at <a href="tel:+919110150863">+91 911-015-0863 </a> / <a
                                href="tel:+917979068408"> +91 797-906-8408</a> or fill out
                            the form</div>
                    </div>
                    <div class="default-form reservation-form">
                        <form  wire:submit.prevent="save">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <input type="text" wire:model.lazy="name" placeholder="Your Full Name">
                                        @if ($errors->has('name'))
                                            <span style="color: red">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <div class="input-group mb-2">

                                            {{-- <div class="container countryCodeDiv">
                                                <div class="row"> --}}

                                            {{-- <div class="col-md-4 col-sm-4 countryCodeCode">
                                                        <select name="country_code" class="country_code">
                                                            <option></option>
                                                            <option selected>+912</option>
                                                            <option>+92</option>
                                                            <option>+1234</option>
                                                        </select>
                                                        {{-- <input type="text" name="c_number" value=""
                                                        placeholder="Contact Number" > --}}

                                            {{-- </div> --}}
                                            {{-- <div class="col-md-8 col-sm-8 countryCodeNo"> --}}

                                            <input type="text" wire:model.lazy="mobile_no" name="mobile_no"
                                                value="" placeholder="Contact Number">
                                            @if ($errors->has('mobile_no'))
                                                <span style="color: red">{{ $errors->first('mobile_no') }}</span>
                                            @endif
                                            {{-- </div> --}}
                                            {{-- </div>
                                            </div> --}}


                                            {{-- <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username"> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">
                                        <span class="alt-icon far fas fa-pencil-ruler"></span>
                                        <select name="service_id" class="l-icon" wire:model.lazy="service_id">
                                            <option value="">Select Service</option>
                                            <option value="2">Architecture</option>
                                            <option value="2">2 Person</option>
                                            <option value="2">3 Person</option>
                                            <option value="2">4 Person</option>
                                            <option value="2">5 Person</option>
                                            <option value="2">6 Person</option>
                                            <option value="2">7 Person</option>
                                        </select>
                                        @if ($errors->has('service_id'))
                                            <span style="color: red">{{ $errors->first('service_id') }}</span>
                                        @endif
                                        <span class="arrow-icon far fa-angle-down"></span>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="field-inner">

                                        <input type="email" wire:model.lazy="email" name="email" value=""
                                            placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span style="color: red">{{ $errors->first('email') }}</span>
                                        @endif
                                        {{-- <span class="alt-icon far fa-calendar"></span>
                                        <input class="l-icon datepicker" type="text" name="fieldname" value="" placeholder="DD-MM-YYYY"  readonly>
                                        <span class="arrow-icon far fa-angle-down"></span> --}}
                                    </div>
                                </div>
                                {{-- <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <span class="alt-icon far fa-clock"></span>
                                        <select class="l-icon">
                                            <option>08 : 00 am</option>
                                            <option>09 : 00 am</option>
                                            <option>10 : 00 am</option>
                                            <option>11 : 00 am</option>
                                            <option>12 : 00 pm</option>
                                            <option>01 : 00 pm</option>
                                            <option>02 : 00 pm</option>
                                            <option>03 : 00 pm</option>
                                            <option>04 : 00 pm</option>
                                            <option>05 : 00 pm</option>
                                            <option>06 : 00 pm</option>
                                            <option>07 : 00 pm</option>
                                            <option>08 : 00 pm</option>
                                            <option>09 : 00 pm</option>
                                            <option>10 : 00 pm</option>
                                        </select>
                                        <span class="arrow-icon far fa-angle-down"></span>
                                    </div>
                                </div> --}}
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">
                                        <textarea name="msg" wire:model.lazy="msg" placeholder="Message"></textarea>
                                        @if ($errors->has('msg'))
                                            <span style="color: red">{{ $errors->first('msg') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="field-inner">

                                        <button type="submit" class="theme-btn btn-style-one clearfix">
                                            <span class="btn-wrap">
                                                <span class="text-one">book a Call</span>
                                                <span class="text-two">book a call</span>
                                            </span>
                                        </button>

                                    </div>
                                    <div class="mt-2">
                                        @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="info-col col-lg-4 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="title">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="data">
                        <div class="booking-info">
                            <div class="bk-title">Direct Contact</div>
                            <div class="bk-no"><a href="tel:+919110150863">+91 911-015-0863</a></div>
                        </div>
                        <div class="separator"><span></span></div>
                        <ul class="info">
                            <li><strong>Location</strong><br>Restaurant St, Delicious City, London 9578, UK</li>
                            <li><strong>Working Hours</strong><br>Monday to Sunday <br>09:00 AM - 7:00 PM</li>
                            {{-- <li><strong>Dinner Time</strong><br>Monday to Sunday <br>05.00 pm - 10.00pm</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
