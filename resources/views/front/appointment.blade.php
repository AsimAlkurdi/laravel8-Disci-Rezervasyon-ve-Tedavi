@Section('appointment')

    <section class="toggler">
    <h3 class="hidden">hidden</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clientsDropDown text-center">
                    <div class="toggle-button">

                        <span class="btn-slide"><i class="icon-chevron-thin-up"></i><i class="icon-chevron-thin-down"></i>Make an appointment</span>
                    </div>
                    <div class="form-container" style="display:none;">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div id="result"></div></div></div>
                        <form class="callus" action="{{route('user_randevu_store')}}" method="post" id="app_form">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">
                                    <div id="result" class="text-center form-group"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control"  type="text" name="name" id="email" placeholder="Patient Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control"  type="text" name="email" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control"  type="text" name="phone" id="email" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select   name="treatmentid" class="placeholder js-states form-control" required>
                                            <option>Treatments :</option>
                                            @foreach($datalistss as $da)

                                                <option value="{{$da->id}}" >{{$da->title}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select   name="doctorid" class="placeholder js-states form-control" required>
                                            <option>Doctors :</option>
                                            @foreach($datalists as $da)

                                                <option value="{{$da->id}}" >{{$da->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select   name="time" class="placeholder js-states form-control" required>
                                            <option  class=" ">time</option>
                                            <option value="09:00 - 10:00" class=" ">09:00 - 10:00</option>
                                            <option value="10:00 - 11:00" class=" ">10:00 - 11:00</option>
                                            <option value="11:00 - 12:00" class=" ">11:00 - 12:00</option>
                                            <option value="12:00 - 13:00" class=" ">12:00 - 13:00</option>
                                            <option value="14:00 - 15:00" class=" ">14:00 - 15:00</option>
                                            <option value="15:00 - 16:00" class=" ">15:00 - 16:00</option>
                                            <option value="16:00 - 17:00" class=" ">16:00 - 17:00</option>
                                            <option value="17:00 - 18:00" class=" ">17:00 - 18:00</option>
                                            <option value="18:00 - 19:00" class=" ">18:00 - 19:00</option></select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="Date" class="form-control" placeholder="Appointment Date" id="app_date" name="app_date" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea placeholder="Message" cols="11" id="message" name="message" required></textarea>
                                    </div>
                                    @auth
                                        <div class="form-group">

                                            <div class="btn-submit button3">
                                                <input type="submit" id="btn_app_submit" value="Submit Request" />
                                            </div> </div>
                                    @else
                                        <div class="form-group">
                                            <div class="btn-submit button3">
                                                <a href="\login" class="btn-submit button3" >For Make Appointment Please Login</a>
                                            </div></div>
                                    @endauth

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
