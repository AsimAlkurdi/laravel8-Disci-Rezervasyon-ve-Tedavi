@Section('slider')

    <section class="slider-main" >

    <div class="rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER 5.0 auto mode -->
        <div id="rev_slider" class="rev_slider"  data-version="5.0">
            <ul>
            @php
                $i=0;
            @endphp
                @foreach($slider as $rs)
                    @php
                        $i+=1;
                    @endphp
                <!-- SLIDE  -->
                <li  data-transition="fade" @if($i==1) active @endif>
                    <img src="{{url('/')}}/userfile/{{$rs->image}}"  alt="" data-bgposition="center center" data-bgfit="cover">
                    <h1 class="tp-caption tp-resizeme"
                        data-x="left" data-hoffset="650"
                        data-y="200" data-width="full"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="500"
                        data-splitin="none"
                        data-splitout="none"
                        style="z-index: 6;">
                        <span>Medical Services</span> <br> {{$rs->title}} <span class="color">just {{$rs->price}}</span>
                    </h1>
                    <p class="tp-caption tp-resizeme"
                       data-x="left" data-hoffset="650"
                       data-y="340"
                       data-width="full"
                       data-transform_idle="o:1;"
                       data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                       data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                       data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                       data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                       data-start="800">
                        <a href="{{route('appointment',['id' => $rs->id])}}" type="button" class="btn btn-primary">Make an appointment</a>

                    </p>
                </li>


                    @endforeach
            </ul>
        </div><!-- END REVOLUTION SLIDER -->
    </div>

</section>



@endsection

