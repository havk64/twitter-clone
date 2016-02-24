document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('show-hide').addEventListener('click', function(){
    var form = document.getElementById('form');
      form.toggle();
    /*if (form.style.display == '') {
      form.style.display = 'block';
    }*/
  })
});
