/* Simple VanillaJS to toggle class */

var openFormTimer = setTimeout(function(){
  document.getElementById('toggleProfile').click()
}, 2000); 

document.getElementById('toggleProfile').addEventListener('click', function () {
  [].map.call(document.querySelectorAll('.profile'), function(el) {
    el.classList.toggle('profile--open');
    clearTimeout(openFormTimer);
  });
});


