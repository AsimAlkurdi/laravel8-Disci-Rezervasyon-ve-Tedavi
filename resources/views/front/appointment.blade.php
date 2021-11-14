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
                        <form onSubmit="return false" id="app_form">
                            <div class="row">
                                <div class="form-group col-md-3 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Name"  name="name" id="name"  required>
                                </div>
                                <div class="form-group col-md-3 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Phone No" name="phone" id="phone" required>
                                </div>
                                <div class="form-group col-md-3 col-sm-6">
                                    <input type="email" class="form-control" placeholder="Email address" name="email" id="email" required>
                                </div>
                                <div class="form-group col-md-3 col-sm-6">
                                    <input type="date" class="form-control" id="app_date" name="app_date"  placeholder="Appointment Date">
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <textarea placeholder="Message" cols="11" id="message" name="message" required></textarea>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <button type="submit" class="button3" id="btn_app_submit">Send</button>
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
