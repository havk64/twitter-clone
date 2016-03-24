document.addEventListener("DOMContentLoaded", loadFirst);

function loadFirst() {  // => Function used to load the first page using the same template used to load more statuses.
        Handlebars.registerHelper("math", function(lvalue, operator, rvalue, options) {
        lvalue = parseFloat(lvalue);
        rvalue = parseFloat(rvalue);

        return {
            "+": lvalue + rvalue * 10, // => This Handlebars template is used in order to make it possible to add the @index to the number of current Page(JSON file). It is multiplying 10 to the number of the page and each JSON file has 10 statuses.
        }[operator];
    });

    ajaxGet( 'statuses-1.html', function (res) { // => Ajax call to get the template and append it to the html document.
        var divTemplate = document.getElementById('template');
        divTemplate.innerHTML = res;
        getContext(0);
    })
}