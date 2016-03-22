document.addEventListener("DOMContentLoaded", postStatus);

function postStatus() {
    document.getElementById('show-hide').addEventListener('click', function() {
    var form = document.getElementById('form');
        form.toggle();
  })
}