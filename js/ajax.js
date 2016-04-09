function ajaxGet(url, onSuccess) { // => Factorized function to make Ajax requests.
        httpRequest = (window.XMLHttpRequest) ? new XMLHttpRequest: new ActiveXObject("Microsoft.XMLHTTP");
        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState == 4 && httpRequest.status == 200) {
                onSuccess(httpRequest.responseText);
            }
        }
        httpRequest.open("GET", url, true );
        httpRequest.send();
}
