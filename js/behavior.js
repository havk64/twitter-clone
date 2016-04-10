document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('nav-button').addEventListener('click', function(){
    var body = document.getElementsByTagName('body')[0];
      body.className = (body.className == 'nav-show') ? body.className = '' : body.className = 'nav-show';

  })
});
