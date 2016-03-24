document.addEventListener("DOMContentLoaded", loadMore);

function loadMore() {
    Handlebars.registerHelper("math", function(lvalue, operator, rvalue, options) {
        lvalue = parseFloat(lvalue);
        rvalue = parseFloat(rvalue);

        return {
            "+": lvalue + rvalue,
        }[operator];
    });
    var button = document.getElementById('seeMore');
    button.style.cursor = 'pointer';
    button.addEventListener('click', function() {
        this.style.display = 'none';
        this.disabled = 'true';
        this.style.cursor = 'not-allowed';
        //button.style.backgroundColor = 'gray';
        setTimeout( function() {
            ajaxGet( './statuses-1.html', function (res) {
                var divTemplate = document.getElementById('template');
                divTemplate.innerHTML = res;
                getContext();
            })
        }, 200 )
    })
    
}

function getContext() {
    ajaxGet('js/statuses-1.json', function (response) {
        var source = document.getElementById('handlebars-template').textContent;
        var template = Handlebars.compile(source);
        var context = JSON.parse(response);
        var html = template(context);
        var statuses = document.getElementById('extrastatuses');
        var div = document.createElement('div'); 
        div.innerHTML = html;
        statuses.appendChild(div);
        createButton(statuses);
        reset();
        reply();
    });
}

function createButton(statuses) {
    var newbutton = document.createElement('div'); // => Creating new Button <<<
    newbutton.className = 'seeMore';
    newbutton.innerHTML = 'See More Statuses';
    newbutton.style.cursor = 'pointer';
    statuses.appendChild(newbutton);
    newbutton.addEventListener('click', function(){
        newbutton.style.display = 'none';
        ajaxGet('./status-1.html', function(res){
            var divTemplate = document.getElementById('template');
            divTemplate.innerHTML = res;
            getContext();
        })
    })

}
