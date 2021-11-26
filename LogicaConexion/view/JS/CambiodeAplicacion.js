document.addEventListener('click', function(event) {
    var target = event.target;
    if (target.tagName.toLowerCase() == 'a'){
        var port = target.getAttribute('href').match(/^:(\d+)(.*)/);
        if (port){
           target.href = window.location.origin;
           target.port = port[1];
        }
    }
  }, false);