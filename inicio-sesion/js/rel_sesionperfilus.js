(function() {
  document.addEventListener("DOMContentLoaded", function() {
    var menuItems = document.querySelectorAll('.item');
    menuItems.forEach(item => {
      const link = item.querySelector('a');
      const target = link.getAttribute('href');
    
      link.addEventListener("click", function(event){
        event.preventDefault();
        loadContent(target);
      });
    });
  });
})();



function loadContent(url) {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      document.getElementsByClassName('main-container')[0].innerHTML = this.responseText;
    }
  };
  xhttp.open('GET', url, true);
  xhttp.send();
}