//document.addEventListener("DOMContentLoaded", loadMore); disabling the previous versionn of this function <<<

function loadMore() { // ==> Function used up to task 3. Substituted by the function in file task5.js
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
        //this.disabled = 'true';
        this.style.cursor = 'not-allowed';
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

function getContext(n) {  //=> Function to get the context(JSON file) and compile with template to generate valid HTML.
    ajaxGet('js/statuses-'+n+'.json', function (response) {
        var source = document.getElementById('handlebars-template').textContent;
        var template = Handlebars.compile(source);
        var context = JSON.parse(response);
        var html = template(context);
        var statuses = document.getElementById('extrastatuses');
        var div = document.createElement('div');  // => Creating new element to be appended to appropriate location.
        div.innerHTML = html;
        statuses.appendChild(div);
        reset(); // => Remove eventListener before reapply them.
        reply(); // => Reapply eventListener to each "reply" element.
        if(context.last_page == false) // => To stop creating button after read/compile last page. 
            createButton(n+1,statuses);
    });
}

function createButton(n, statuses) {
    var newbutton = document.createElement('div'); // => Creating new Button <<<
    newbutton.className = 'seeMore';
    newbutton.innerHTML = 'See More Statuses';
    newbutton.style.cursor = 'pointer';
    statuses.appendChild(newbutton); // => Appending the button to the statuses element.
    newbutton.addEventListener('click', function(){
        newbutton.style.display = 'none';
         getContext(n);
    })

}
