@extends('template')

@section('content')

    <div class="container flex flex-col bg-stone-50 opacity-50 rounded-md">
        <a href="{{ route('login') }}">Longin</a>
        <a href="{{ route('register') }}">Register</a>

        
        <div class="flex justify-center mt-16">
            <div class="h-64 w-64 flex justify-center">
                <div class="rounded-full h-48 w-48 border-4 border-amber-400 text-center flex items-center justify-center"><a
                        href="{{ route('playlist.index') }}">Playlist</a></div>
            </div>
            <div class="flex flex-col justify-center">
                <div class="ml-10 text-center">
                    <ul class="flex">
                        <li><span id="search-form" class="geolocations col-2">
                                <a href="#" id="geolocation">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFBE02"
                                        class="bi bi-geo-alt-fill text-center" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li id="city" class="city"></li>
                        <li id="fa-duotone fa-gear"></i>
                        <li><img src=" " id="weather-icon" width="35px" /></li>
                        <li id="degrees">ºC</li>
                        <li id="date"></li>
                    </ul>
                </div>
                <h2 class='text-center text-2xl leading-loose mr-20'>- Lunes con L de -<br />
                    <span class="text-7xl text-amber-400">Lograr</span><br />
                    - Todos tus objetivos -
                </h2>
            </div>
        </div>
        <div class="flex justify-center align-bottom">
            <div class="rounded-full h-20 w-20 border-4 border-amber-400 text-center flex items-center justify-center m-5">
            </div>
            <div class="rounded-full h-20 w-20 border-4 border-amber-400 text-center flex items-center justify-center m-5">
            </div>
            <div class="rounded-full h-20 w-20 border-4 border-amber-400 text-center flex items-center justify-center m-5">
            </div>
            <div class="rounded-full h-20 w-20 border-4 border-amber-400 text-center flex items-center justify-center m-5">
            </div>
        </div>



    </div>
    <script>
        function newDay(date) {
    let days = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ];
    let day = days[date.getDay()];
    let hour = date.getHours();
    if (hour < 10) {
      hour = `0${hour}`;
    }
    let minutes = date.getMinutes();
    if (minutes < 10) {
      minutes = `0${minutes}`;
    }
  
    return `${day} ${hour}:${minutes}`;
  }
  
  
  function infoTemperature(response) {
    let tempElement = document.querySelector("#degrees");
    let cityElement = document.querySelector("#city");
    let iconElement = document.querySelector("#weather-icon");
    let date = document.querySelector("#date");
  
    date.innerHTML = newDay(new Date());
    celsiusDegrees = response.data.main.temp;
    tempElement.innerHTML = Math.round(celsiusDegrees);
    cityElement.innerHTML = response.data.name;
    iconElement.setAttribute(
      "src",
      `http://openweathermap.org/img/wn/${response.data.weather[0].icon}@2x.png`
    );
    iconElement.setAttribute("alt", response.data.weather[0].description);
   
  }
  
  
  function searchInfo(city) {
    let apiKey = "a3c3f210b30127cb5ef5c59041b27e29";
    let apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;
    axios.get(apiUrl).then(infoTemperature);
  }
  
  function submit(event) {
    event.preventDefault();
    let formSearch = document.querySelector("#search-text");
    searchInfo(formSearch.value);
  }
  
  function showPosition(position) {
    let apiKey = "a3c3f210b30127cb5ef5c59041b27e29";
    let latitude = position.coords.latitude;
    let longitude = position.coords.longitude;
    let geoApiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${apiKey}&units=metric`;
    axios.get(geoApiUrl).then(infoTemperature);
  }
  
  function getPosition(event) {
    event.preventDefault();
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  
  function celsiusElement(event) {
    event.preventDefault();
    let tempElement = document.querySelector("#degrees");
    tempElement.innerHTML = Math.round(celsiusDegrees);
  }
  let celsiusDegrees = null;
  
  let form = document.querySelector("#search-form");
  form.addEventListener("submit", submit);
  
 let getCurrentIcon = document.querySelector("#geolocation");
  getCurrentIcon.addEventListener("click", getPosition);
  
  
  searchInfo("Barcelona");
    </script>
@endsection
