document.addEventListener("DOMContentLoaded", loadMore);

function loadMore() {
    var button = document.getElementById('seeMore');
    button.addEventListener('click', function(){
        button.style.display = 'none';
        ajaxGet( './statuses-1.html', function (res) {
            var moreStatuses = document.getElementById('extrastatuses');
            moreStatuses.innerHTML = res;
            reset();
            reply();
        })
    })
    
}