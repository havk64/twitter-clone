document.addEventListener('DOMContentLoaded', request);

function request() { // => Using JSONP in order to get a cross domain request to a remote JSON file.
    var upWeather = document.getElementById('upweather');
    upWeather.addEventListener('click', request); // => Adding event listener in the button used to update the weather.
    var script = document.createElement('script');
    script.type= "text/javascript";
    script.src = "https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=callback"; 
    document.body.appendChild(script);
}

function callback(data){ // => Callback function used to wrap the result of request and return the result to the html element.
    var weather = document.getElementById('weather');
    weather.innerHTML = "an "+JSON.stringify(data.current_weather)+" weather";
}
