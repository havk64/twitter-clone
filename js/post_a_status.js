document.addEventListener("DOMContentLoaded", function() {
    console.log('status');
  document.getElementById('show-hide').addEventListener('click', function(){
    var form = document.getElementById('form');
      form.toggle();
  })
});
