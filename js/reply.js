document.addEventListener("DOMContentLoaded", reply);

function reply() {
    var link = document.querySelectorAll('.replyLink');
    for(var i = 0; i < link.length; i++) {
        link[i].addEventListener('click', handler, false )
    }

}
function reset() {
    var link = document.querySelectorAll('.replyLink');
    for(var i = 0; i < link.length; i++) {
        link[i].removeEventListener('click', handler, false );
    };
}

function handler() {
    var form = document.getElementById(this.dataset.index);
    form.toggle();
}
