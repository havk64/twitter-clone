document.addEventListener("DOMContentLoaded", function() {
  var link = document.querySelectorAll('.replyLink');
  for(var i = 0; i < link.length; i++){
      link[i].addEventListener('click', function(){
          var form = document.getElementById(this.dataset.index);
          form.style.display = 'block';
          //form.toggle();
      }, false )
  }

})
