@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Contact Us and Get Your Information - Sinergia Education Homeschooling</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=key&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=key&callback=initMap2&libraries=&v=weekly"
      defer
    ></script>
    <style>
        #map1, #map2 {
            height: 100%;
        }
        .section_contact{
            background-color: #e87511; 
            padding: 29px 0;
            background-clip: border-box;
            text-align: center;
        }
        .row0_contact{
            padding-top: 70px;
            padding-bottom: 80px;
            width: 80%;
            max-width: 980px;
            margin: auto;
            position: relative;
        }
        .text0_contact{
            margin-bottom: 1.5%;
            font-family: 'Playfair Display', Georgia, "Times New Roman", serif;
            font-size: 62px;
            color: #ffffff;
            line-height: 1.2em;
        }
        .text1_contact{
            margin-bottom: 0px;
            font-weight: 300;
            font-size: 24px;
            color: #ffffff;
            line-height: 1.2em;
            margin-top: 16px;
            max-width: 720px;
            margin: auto;
            text-align: center;
        }
        .row1_contact{
            max-width: 1174px;
            position: relative;
            width: 80%;
            max-width: 1080px;
            margin: auto;
        }
        .text2_contact{
            text-align: left;
            color: #ffffff;
            font-family: 'Play', Helvetica, Arial, Lucida, sans-serif;
            font-size: 18px;
            line-height: 1.4em;
            font-weight: 500;
        }
        .row2_contact{
            padding-bottom: 90px;
            max-width: 980px;
            position: relative;
            width: 80%;
            max-width: 1080px;
            margin: auto;
            text-align: left;
        }
        .column2_contact, .column3_contact, .column4_contact{
            display: inline-block;
        }
        .column2_contact{
            width: 48.5%;
            margin-right: 3%;
            position: relative;
        }
        .map0_contact{
            height: 280px;
            width: 100%;
        }
        .column3_contact{
            width: 21%;
            margin-right: 3%;
            text-align: center;
            position: relative;
            color: #ffffff;
        }
        .blank{
            margin-bottom: 6.593%;
            height: 60px;
        }
        .imageicon{
            margin-bottom: 23px;
            text-align: center;
            opacity: 1;
            line-height: 0;
        }
        .text3_contact{
            font-family: 'Source Sans Pro', Helvetica, Arial, Lucida, sans-serif;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 6px;
        }
        .text4_contact{
            font-family: 'Source Sans Pro', Helvetica, Arial, Lucida, sans-serif;
            margin: auto;
            word-wrap: break-word;
        }
        .column4_contact{
            width: 21%;
            color: #ffffff;
            margin: auto;
            text-align: center;
        }
        .text5_contact{
            font-family: 'Source Sans Pro', Helvetica, Arial, Lucida, sans-serif;
            font-weight: 300;
            font-size: 18px;

        }
    </style>
    <script>
        "use strict";
    
        let map;
        let map2;
    
        function initMap() {
            var sinergiajakartaKoor = {lat: -6.227956346613049,
                lng: 106.79863352014924 }

            var map = new google.maps.Map(document.getElementById("map1"), {
                center: sinergiajakartaKoor,
                zoom: 17
            });
            var marker = new google.maps.Marker({
                position: sinergiajakartaKoor, 
                map: map
            })
        }
        function initMap2() {
            var sinergiasurabayaKoor = {lat: -7.2768202427256465,
                lng: 112.6966416752441 }

            var map = new google.maps.Map(document.getElementById("map2"), {
                center: sinergiasurabayaKoor,
                zoom: 17
            });
            var marker = new google.maps.Marker({
                position: sinergiasurabayaKoor, 
                map: map
            })
        }
      </script>
</head>
@section('content')
<div id="main_contact" style="padding-top: 90px">
    <div class="section_contact section0_contact">
        <div class="row0_contact">
            <div class="column0_contact">
                <div class="text0_contact">
                    <p>Our Contacts</p>
                </div>
                <div class="text1_contact">
                    <p>
                        Any question? Need more information? Call us or send email. We’d be glad to help.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section_contact section1_contact">
        <div class="row1_contact">
            <div class="column1_contact">
                <div class="text2_contact">
                    <p>SINERGIA INTERNATIONAL JAKARTA (CENTER)</p>
                </div>
            </div>
        </div>
        <div class="row2_contact">
            <div class="column2_contact">
                <div class="map0_contact">
                    <div id="map1"></div>
                </div>
            </div>
            <div class="column3_contact">
                <div class="imageicon">
                    <img src="{{ asset('images/telephoneicon.png') }}" alt="">
                </div>
                <div class="text3_contact">
                    <p>021-57931911 / 081287693029</p>
                    <p>081287118389 / 082125513378</p>
                </div>
                <div class="text4_contact">info@sinergiaeducation.com</div>
            </div>
            <div class="column4_contact">
                <div class="blank"></div>
                <div class="imageicon">
                    <img src="{{ asset('images/pinicon.png') }}" alt="">
                </div>
                <div class="text5_contact">
                    STC Senayan 2nd Floor no. 51/54 Jl. Asia Afrika Senayan, Central Jakarta, 10270
                </div>
            </div>
        </div>
    </div>
    <div class="section_contact section2_contact">
        <div class="row1_contact">
            <div class="column1_contact">
                <div class="text2_contact">
                    <p>SINERGIA INTERNATIONAL SURABAYA</p>
                </div>
            </div>
        </div>
        <div class="row2_contact">
            <div class="column2_contact">
                <div class="map0_contact">
                    <div id="map2"></div>
                </div>
            </div>
            <div class="column3_contact">
                <div class="imageicon">
                    <img src="{{ asset('images/telephoneicon.png') }}" alt="">
                </div>
                <div class="text3_contact">
                    <p>0821-3146-2895</p>
                </div>
                <div class="text4_contact">sinergiasurabaya@sinergiaeducation.com</div>
            </div>
            <div class="column4_contact">
                <div class="blank"></div>
                <div class="imageicon">
                    <img src="{{ asset('images/pinicon.png') }}" alt="">
                </div>
                <div class="text5_contact">
                    Jl. Pattimura Ruko Plasa Segi 8 Kav A 853 Surabaya, 60111
                </div>
            </div>
        </div>
    </div>
</div>

@endsection