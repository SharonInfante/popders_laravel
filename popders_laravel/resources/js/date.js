import axios from 'axios';




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