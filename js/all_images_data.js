document.addEventListener("DOMContentLoaded", function(){
    var allImages = document.getElementById("all-images");
    allImages.addEventListener('click', function(){
        var body = document.getElementsByTagName('body')[0];
        var bodyStr = body.innerHTML
        var table = document.createElement('table');
        table.id = "all_images_data";
        var rootDiv = document.createElement("div");
        rootDiv.id = "all_images_data_other";
        rootDiv.insertAdjacentHTML('beforeend', bodyStr);
        rootDiv.style.display = 'none';
        body.innerHTML ='';
        body.appendChild(rootDiv);
        body.appendChild(table);
        var thead = document.createElement('thead');
        var tr1 = document.createElement('tr');
        var tr2 = document.createElement('tr');
        var tbody = document.createElement('tbody');
        var th1 = document.createElement('th');
        var th2 = document.createElement('th');
        var th3 = document.createElement('th');
        var head1 = document.createTextNode('Image');
        var head2 = document.createTextNode('Image Path');
        var head3 = document.createTextNode('Alternative text');
        th1.appendChild(head1);
        th2.appendChild(head2);
        th3.appendChild(head3);
        thead.appendChild(th1);
        thead.appendChild(th2);
        thead.appendChild(th3);
        table.appendChild(thead);
        var images = rootDiv.querySelectorAll('img');
        for(var i = 1; i < images.length; i++) {
            var row = document.createElement('tr');
            var tdr1 = document.createElement('td');
            var tdr2 = document.createElement('td');
            var tdr3 = document.createElement('td');
            tdr1.appendChild(images[i]);
            tdr2.innerHTML = images[i].src;
            tdr3.innerHTML = images[i].alt;
            row.appendChild(tdr1);
            row.appendChild(tdr2);
            row.appendChild(tdr3);
            tbody.appendChild(row);
            table.appendChild(tbody);
        }
        
        
    })
})


