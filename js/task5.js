document.addEventListener("DOMContentLoaded", loadFirst);

function loadFirst() {
        Handlebars.registerHelper("math", function(lvalue, operator, rvalue, options) {
        lvalue = parseFloat(lvalue);
        rvalue = parseFloat(rvalue);

        return {
            "+": lvalue + rvalue * 10,
        }[operator];
    });

    ajaxGet( 'statuses-1.html', function (res) {
        var divTemplate = document.getElementById('template');
        divTemplate.innerHTML = res;
        getContext(0);
    })
}