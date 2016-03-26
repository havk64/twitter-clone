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

var vowelTest = (function() { // => This functions checks if the value of weather starts with a vowel to show appropriate \
  var re = /^[aeiou].*/i;     // => message with "a" or "an" before the word. <<<<<<<<<<<<<<======<
  return function(s) {
    return re.test(s);
  }
})();

function message(res) { // => Sets the message to html.
    return (vowelTest(res)) ? "an "+res+" weather" : "a "+res+" weather" ;
} 

function callback(data){ // => Callback function used to wrap the result of request put it into the html element.
    'use strict';
    var weather = document.getElementById('weather');
    var pweather = document.getElementById('pweather');
    var res = data.current_weather;
    weather.innerHTML = message(res); // => Puts the result into the html element.
    switch ( res ) { // => Case Statement to change color of box background and other stuffs, according to weather.
        case "chilly":
            console.log("Chillyyy!!!");
            pweather.style.backgroundColor = 'salmon';
            break;
        case "icy":
            console.log("Bruuuuuu!!!");
            pweather.style.background = 'url(img/ice.jpg)';
            break;
        case "sunny":
            console.log("Yessss!!!");
            pweather.style.backgroundColor = "Yellow";
            break;
        case "cloudy":
            console.log("It's ok...");
            pweather.style.background = 'url(img/cloudy.jpg)';
            pweather.style.borderStyle =  'solid';
            pweather.style.borderWidth = '1px';
            pweather.style.borderColor = 'silver';
            break;
        case "snowy":
            console.log("Oh, shhhhhhh...!!");
            pweather.style.backgroundColor = "white";
            pweather.style.borderStyle =  'solid';
            pweather.style.borderWidth = '1px';
            pweather.style.borderColor = 'silver';
            break;
        case "rainy":
            console.log("Don't forget the Umbrella!");
            pweather.style.backgroundColor = "#d8d3d3";
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
        case "dark":
            console.log("Welcome to the Darkness!");
            pweather.style.background = 'black';
            pweather.style.color = 'silver';
            break;
        case "dreary":
            console.log("Boring day?");
            console.log("Let's building awesome CODE! >:-)");
            pweather.style.backgroundColor = 'grey';
            break;
        case "misty":
            console.log('What is "misty"?');
            pweather.style.backgroundColor = 'salmon';
            break;
        case "windy":
            console.log("Sssssssssss!!!");
            pweather.style.background = 'url(http://cache3.asset-cache.net/gc/463176601-dandelion-wind-drawing-gettyimages.jpg?v=1&c=IWSAsset&k=2&d=C0oeB%2BAfGrIh2FTziA0GmRIBpRdiYW55BxgHhSKMaFDgj3W6EfyPmrrpx2cDBxEj)';
            pweather.style.backgroundSize = '200px 200px';
            pweather.style.opacity = '0.7';
            weather.style.fontStyle = 'bold';
            weather.style.color = 'green';
            break;
        default:
            console.log("I don't know...");
            console.log(res);
    }
}
