document.addEventListener("DOMContentLoader", function(){
    var allImages = document.getElementById("all-images");
    allImages.addEventListener('click', function(){
        var body = document.getElementsByTagName('body')[0];
        var bodyStr = body.innerHTML
        var table = document.createElement('table');
        table.id = "all_images_data_other";
        var rootDiv = document.createElement("div");
        rootDiv.id = "all_images_data_other";
        rootDiv.insertAdjacentHTML('beforeend', bodyStr);
        rootDiv.style.display = 'none';
        body.innerHTML ='';
        body.appendChild(rootDiv);
        rootDiv.appendChild(body.innerHTML); //First needs to detache from body <==Fix it!!!
        body.appendChild(table);
        
    })
})


/*
var body = document.getElementsByTagName('body')[0]; ==> already there
var bodyStr = document.getElementsByTagName('body')[0].innerHTML
rootDiv.insertAdjacentHTML('beforeend', bodyStr);
rootDiv.style.display = 'none';
body.appendChild(rootDiv);
var table = document.createElement('table');
table.id = "all_images_data_other";
body.appendChild(table);
c
table.appendChild()


