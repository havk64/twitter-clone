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
        //button.style.display = 'none';
        button.disabled = 'true';
        button.style.cursor = 'not-allowed';
        button.style.backgroundColor = 'gray';
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
        reset();
        reply();
    });
}
