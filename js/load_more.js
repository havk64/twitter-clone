document.addEventListener("DOMContentLoaded", loadMore);

function loadMore() {
    var button = document.getElementById('seeMore');
    button.style.cursor = 'pointer';
    button.addEventListener('click', function(){
        //button.style.display = 'none';
        button.disabled = 'true';
        button.style.cursor = 'not-allowed';
        button.style.backgroundColor = 'gray';
        setTimeout( function() {
            ajaxGet( './statuses-1.html', function (res) {
                var moreStatuses = document.getElementById('extrastatuses');
                moreStatuses.innerHTML = res;
                reset();
                reply();
            })
        }, 2000 )
    })
    
}