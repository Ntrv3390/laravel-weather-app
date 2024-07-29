<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather Application</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include('components.header')
        <div class="container">
            <h1 class="mt-5 mb-4">Weather Application</h1>
            <div class="input-group mb-3">
                <form action="{{route('weather.form')}}" method="post" class="form-inline">
                    @csrf
                    <div class="d-flex">
                        <div class="form-group">
                            <select class="form-select" name="city" id="city">
                                <option value="-1">-- Select City --</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Surat">Surat</option>
                                <option value="Pune">Pune</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Lucknow">Lucknow</option>
                                <option value="Kanpur">Kanpur</option>
                                <option value="Nagpur">Nagpur</option>
                                <option value="Indore">Indore</option>
                                <option value="Thane">Thane</option>
                                <option value="Bhopal">Bhopal</option>
                                <option value="Visakhapatnam">Visakhapatnam</option>
                                <option value="Pimpri-Chinchwad">Pimpri-Chinchwad</option>
                                <option value="Patna">Patna</option>
                                <option value="Vadodara">Vadodara</option>
                                <option value="Ghaziabad">Ghaziabad</option>
                                <option value="Ludhiana">Ludhiana</option>
                                <option value="Agra">Agra</option>
                                <option value="Nashik">Nashik</option>
                                <option value="Faridabad">Faridabad</option>
                                <option value="Meerut">Meerut</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Kalyan-Dombivli">Kalyan-Dombivli</option>
                                <option value="Vasai-Virar">Vasai-Virar</option>
                                <option value="Varanasi">Varanasi</option>
                                <option value="Srinagar">Srinagar</option>
                                <option value="Aurangabad">Aurangabad</option>
                                <option value="Dhanbad">Dhanbad</option>
                                <option value="Amritsar">Amritsar</option>
                                <option value="Navi Mumbai">Navi Mumbai</option>
                                <option value="Allahabad">Allahabad</option>
                                <option value="Ranchi">Ranchi</option>
                                <option value="Howrah">Howrah</option>
                                <option value="Coimbatore">Coimbatore</option>
                                <option value="Jabalpur">Jabalpur</option>
                                <option value="Gwalior">Gwalior</option>
                                <option value="Vijayawada">Vijayawada</option>
                                <option value="Jodhpur">Jodhpur</option>
                                <option value="Madurai">Madurai</option>
                                <option value="Raipur">Raipur</option>
                                <option value="Kota">Kota</option>
                                <option value="Guwahati">Guwahati</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Solapur">Solapur</option>
                                <option value="Hubli-Dharwad">Hubli-Dharwad</option>
                                <option value="Mysore">Mysore</option>
                                <option value="Tiruchirappalli">Tiruchirappalli</option>
                                <option value="Bareilly">Bareilly</option>
                                <option value="Aligarh">Aligarh</option>
                                <option value="Tiruppur">Tiruppur</option>
                                <option value="Gurgaon">Gurgaon</option>
                                <option value="Moradabad">Moradabad</option>
                                <option value="Jalandhar">Jalandhar</option>
                                <option value="Bhubaneswar">Bhubaneswar</option>
                                <option value="Salem">Salem</option>
                                <option value="Mira-Bhayandar">Mira-Bhayandar</option>
                                <option value="Warangal">Warangal</option>
                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                <option value="Guntur">Guntur</option>
                                <option value="Bhiwandi">Bhiwandi</option>
                                <option value="Saharanpur">Saharanpur</option>
                                <option value="Gorakhpur">Gorakhpur</option>
                                <option value="Bikaner">Bikaner</option>
                                <option value="Amravati">Amravati</option>
                                <option value="Noida">Noida</option>
                                <option value="Jamshedpur">Jamshedpur</option>
                                <option value="Bhilai">Bhilai</option>
                                <option value="Cuttack">Cuttack</option>
                                <option value="Firozabad">Firozabad</option>
                                <option value="Kochi">Kochi</option>
                                <option value="Nellore">Nellore</option>
                                <option value="Bhavnagar">Bhavnagar</option>
                                <option value="Dehradun">Dehradun</option>
                                <option value="Durgapur">Durgapur</option>
                                <option value="Asansol">Asansol</option>
                                <option value="Rourkela">Rourkela</option>
                                <option value="Nanded">Nanded</option>
                                <option value="Kolhapur">Kolhapur</option>
                                <option value="Ajmer">Ajmer</option>
                                <option value="Gulbarga">Gulbarga</option>
                                <option value="Jamnagar">Jamnagar</option>
                                <option value="Ujjain">Ujjain</option>
                                <option value="Loni">Loni</option>
                                <option value="Siliguri">Siliguri</option>
                                <option value="Jhansi">Jhansi</option>
                                <option value="Ulhasnagar">Ulhasnagar</option>
                                <option value="Nellore">Nellore</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Anantapur">Anantapur</option>
                                <option value="Bilaspur">Bilaspur</option>
                                <option value="Panipat">Panipat</option>
                            </select>
                        </div>
                        <button style="margin-left: 20px;" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Looks Like</h5>
                            <br>
                            <b>
                                @if(isset($weatherData["weather"]['0']['description']))
                                    {{$weatherData["weather"]['0']['description']}} 
                                @else
                                    --
                                @endif
                            </b>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Location Details</h5>
                            <br>
                            <p class="card-text">Country: <b>@if(isset($weatherData["sys"]['country']))
                                    {{$weatherData["sys"]['country']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Name: <b>@if(isset($weatherData["name"]))
                                    {{$weatherData["name"]}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Latitude: <b>@if(isset($weatherData["coord"]['lat']))
                                    {{$weatherData["coord"]['lat']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Longitude: <b>@if(isset($weatherData["coord"]['lon']))
                                    {{$weatherData["coord"]['lon']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Sunrise: <b>@if(isset($weatherData["sys"]['sunrise']))
                                    {{$weatherData["sys"]['sunrise']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Sunset: <b>@if(isset($weatherData["sys"]['sunset']))
                                    {{$weatherData["sys"]['sunset']}} 
                                @else
                                    --
                                @endif</b></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Temperature &deg; C | &deg; F</h5>
                            <br>
                            <p class="card-text">Temp: <b>@if(isset($weatherData["main"]['temp']))
                                    {{$weatherData["main"]['temp']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Min Temp: <b>@if(isset($weatherData["main"]['temp_min']))
                                    {{$weatherData["main"]['temp_min']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Max Temp: <b>@if(isset($weatherData["main"]['temp_max']))
                                    {{$weatherData["main"]['temp_max']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Feels Like: <b>@if(isset($weatherData["main"]['feels_like']))
                                    {{$weatherData["main"]['feels_like']}} 
                                @else
                                    --
                                @endif</b></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Precipitation &percnt;</h5>
                            <br>
                            <p class="card-text">Humidity: <b>@if(isset($weatherData["main"]['humidity']))
                                    {{$weatherData["main"]['humidity']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Pressure: <b>@if(isset($weatherData["main"]['pressure']))
                                    {{$weatherData["main"]['pressure']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Sea Level: <b>@if(isset($weatherData["main"]['sea_level']))
                                    {{$weatherData["main"]['sea_level']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Ground Level: <b>@if(isset($weatherData["main"]['grnd_level']))
                                    {{$weatherData["main"]['grnd_level']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Visibility: <b>@if(isset($weatherData["visibility"]))
                                    {{$weatherData["visibility"]}} 
                                @else
                                    --
                                @endif</b></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Wind m/h</h5>
                            <br>
                            <p class="card-text">Speed: <b>@if(isset($weatherData["wind"]['speed']))
                                    {{$weatherData["wind"]['speed']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Degree: <b>@if(isset($weatherData["wind"]['deg']))
                                    {{$weatherData["wind"]['deg']}} 
                                @else
                                    --
                                @endif</b></p>
                            <p class="card-text">Gust: <b>@if(isset($weatherData["wind"]['gust']))
                                    {{$weatherData["wind"]['gust']}} 
                                @else
                                    --
                                @endif</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.footer')
    </body>
</html>