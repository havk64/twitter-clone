document.addEventListener("DOMContentLoaded", function(){
    (function geolocation () {

	var postButton = document.getElementById('sendButton');
        postButton.addEventListener('click', function () {
            if(document.getElementById('includeLocation').checked) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    alert('Your status was posted from ' + position.coords.latitude + ' ' + position.coords.longitude);
                    //console.log("Your current position is: "+ position.coords.latitude + ' ' + position.coords.longitude);
                });
			}
            else{
                alert('Your reply was posted!');
            }
        })
    })();
})