document.addEventListener('DOMContentLoaded', request);

function request() { // => Using JSONP to request a cross domain remote JSON file.
    var upWeather = document.getElementById('upweather');
    upWeather.addEventListener('click', request); // => Adding event listener in the button used to update the weather.
    var script = document.createElement('script');
    script.type= "text/javascript";
    script.src = "https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=callback"; 
    document.body.appendChild(script);
    script.parentNode.removeChild(script);
}

function callback(data){ // => Callback function used to wrap the result of request put it into the html element.
    var weather = document.getElementById('weather');
    weather.innerHTML = "an "+JSON.stringify(data.current_weather)+" weather";
}
