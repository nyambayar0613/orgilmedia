@extends('admin.layouts.master')
@section('title', 'ХОЛБОГДОХ МЭДЭЭЛЭЛ')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="contactForm" id="contactForm" method="POST" action="{{ route('admin.contact.update') }}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label" for="lat">Өргөрөг</label>
                                    <input type="text" class="form-control" id="lat" name="lat" value="{{ $contact_info->lat }}" readonly />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label" for="long">Уртраг</label>
                                    <input type="text" class="form-control" id="long" name="long" value="{{ $contact_info->long }}" readonly />
                                </div>
                                <div class="col-sm-12">
                                    <div id="map_canvas" style="width: 100%; height: 300px; margin-top: 20px"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Утасны дугаар</label>
                            <input type="text" class="form-control parsley-error" name="phone_number" id="phone_number" value="{{ $contact_info->phone_number }}"   >
                        </div>

                        <div class="form-group">
                            <label for="email">Имэйл хаяг</label>
                            <input type="text" class="form-control parsley-error" name="email" id="email" value="{{ $contact_info->email }}"  >
                        </div>

                        <div class="form-group">
                            <label for="address">Хаяг</label>
                            <textarea name="address" class="form-control" id="address" cols="20" rows="10">{{ $contact_info->address }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="facebook_link">Zip код</label>
                            <input type="text" class="form-control parsley-error" name="zipcode" id="facebook_link" value="{{ $contact_info->zipcode }}"  >
                        </div>

                        <div class="form-group">
                            <label for="facebook_link">Facebook хаяг</label>
                            <input type="text" class="form-control parsley-error" name="facebook_link" id="facebook_link" value="{{ $contact_info->facebook_link }}"  >
                        </div>

                        <div class="form-group">
                            <label for="youtube_link">Youtube хаяг</label>
                            <input type="text" class="form-control parsley-error" name="youtube_link" id="youtube_link" value="{{ $contact_info->youtube_link }}"  >
                        </div>

                        <div class="form-group">
                            <label for="instagram_link">Instagram хаяг</label>
                            <input type="text" class="form-control parsley-error" name="instagram_link" id="instagram_link" value="{{ $contact_info->instagram_link }}"  >
                        </div>

                        <div class="">
                            <button type="submit" class="btn info" >Хадгалах</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @if(session()->has('success'))
        <script>
            toastMessage("{{ session()->get('success') }}", "success");
        </script>
    @endif

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk5FCo6Gu-bx20oMbNNHcgrhoh7_w3Lmk&callback=initialize&libraries=&v=weekly" defer ></script>
    <script>
        var map;
        function initialize() {
            var myLatlng = new google.maps.LatLng({{ $contact_info->lat }}, {{ $contact_info->long }});

            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            var marker = new google.maps.Marker({
                draggable: true,
                position: myLatlng,
                map: map,
                title: "Your location",
                icon: '/img/marker.png'
            });

            google.maps.event.addListener(marker, 'dragend', function (event) {
                document.getElementById("lat").value = event.latLng.lat();
                document.getElementById("long").value = event.latLng.lng();
                infoWindow.open(map, marker);
            });
        }
        google.maps.event.addDomListener(window, "load", initialize());


        $().ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    content_title: {
                        required: true
                    },
                },
                messages: {
                    content_title: "Агуулга Гарчиг оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.contact.update') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            })
        })
    </script>
@endsection
