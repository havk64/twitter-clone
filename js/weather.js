document.addEventListener('DOMContentLoaded', request);

function request() { // => Using JSONP to request a cross domain remote JSON file.
    "use strict";
    var upWeather = document.getElementById('upweather');
    upWeather.addEventListener('click', request); // => Adding event listener in the button used to update the weather.
    var script = document.createElement('script');
    script.type= "text/javascript";
    script.src = "https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=callback"; 
    document.body.appendChild(script);
    script.parentNode.removeChild(script); // => Remove the recently inserted script from the body element.
}

function callback(data){ // => Callback function used to wrap the result of request put it into the html element.
    'use strict';
    var weather = document.getElementById('weather');
    var pweather = document.getElementById('pweather');
    var res = data.current_weather;
    weather.innerHTML = "an "+res+" weather"; // => Puts the result into the html element.
    switch ( res ) { // => Case Statement to change color of box background and other stuffs, according to weather.
        case "chilly":
            console.log("Chillyyy!!!");
            pweather.style.backgroundColor = 'salmon';
            break;
        case "icy":
            console.log("Bruuuuuu!!!");
            pweather.style.backgroundColor = "aqua";
            break;
        case "sunny":
            console.log("Yessss!!!");
            pweather.style.backgroundColor = "Yellow";
            break;
        case "cloudy":
            console.log("It's ok...");
            pweather.style.backgroundColor = 'silver';
            break;
        case "snowy":
            console.log("Oh, shhhhhhh...!!");
            pweather.style.backgroundColor = "white";
            pweather.style.borderStyle =  'solid';
            pweather.style.borderWidth = '1px';
            pweather.style.borderColor = 'silver';
            break;
        case "rainy":
            console.log("Umbrella!");
            pweather.style.backgroundColor = "gray";
            break;
        case "foggy":
            console.log("Can't see anything...");
            pweather.style.backgroundColor = "#d8d3d3";
            break;
        case "warm":
            console.log("Very hot!");
            pweather.style.backgroundColor = 'red';
        case "beautiful":
            console.log("That's awesome!!! :-)");
            pweather.style.background = '#87cefa'; // => "Light Sky Blue"
            break;
        default:
            console.log("I don't know, for sure!");
            console.log(res);
    }
}
