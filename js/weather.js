document.addEventListener('DOMContentLoaded', request);

function request() {
    var upWeather = document.getElementById('upweather');
    upWeather.addEventListener('click', request);
    var script = document.createElement('script');
    script.type= "text/javascript";
    script.src = "https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=callback"; 
    document.body.appendChild(script);
}

function callback(data){
    var weather = document.getElementById('weather');
    weather.innerHTML = "an "+JSON.stringify(data.current_weather)+" weather";
}
