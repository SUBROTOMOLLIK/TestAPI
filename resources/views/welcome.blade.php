<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Google Autocomplete Address Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
            height: 400px;
            width: 100%;
            margin: 20px auto;
        }
    </style>
</head>

<body>

    <div class="data mx-3">

    </div>

    <div class="card-body">
        <div class="my-3">
            <label for="autocomplete"> Location/City/Address :<span class="text-danger">*</span></label>
            <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Enter Location">
        </div>
        <div class="form-group" id="latitudeArea">
            <label>Latitude</label>
            <input type="text" id="latitude" name="latitude" class="form-control">
        </div>
        <div class="form-group" id="longtitudeArea">
            <label>Longitude</label>
            <input type="text" name="longitude" id="longitude" class="form-control">
        </div>
    </div>
    <div class="card-footer">
        <div class="mt-3 text-center">
            <button type="submit" onclick="initMap()" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <div class="container mt-5">
        <div id="map"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#latitudeArea").addClass("d-none");
            $("#longtitudeArea").addClass("d-none");
        });
    </script>

    <script>
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());
                $("#latitudeArea").removeClass("d-none");
                $("#longtitudeArea").removeClass("d-none");

            });
        }
    </script>
        <script type="text/javascript">

            function initMap() {
                var myLatLng = { lat:38.301792 ,lng:-76.511192 };
                new google.maps.Map(document.getElementById("map"), {
                zoom: 10,
                center: myLatLng,
                });

                // new google.maps.Marker({
                // position: myLatLng,
                // map,
                // title: "Hello Rajkot!",
                // });
            }

            initMap(0,0);


            window.initMap = initMap;
        </script>
</body>
</html>

