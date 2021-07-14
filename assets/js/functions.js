var $ = jQuery.noConflict();
//
/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
window.onscroll = function() {
	headerVisible()
};
var navbar = document.getElementById("navegation");
var prevScrollpos = window.pageYOffset;
function headerVisible() {
  var currentScrollPos = window.pageYOffset;
  if (currentScrollPos === 0) {
    navbar.style.opacity = "1";
    navbar.style.zIndex = "9999999";
  }
  else if (prevScrollpos > currentScrollPos) {
    navbar.style.opacity = "0";
    navbar.style.zIndex = "9999999";
  } else {
    navbar.style.opacity = "0";
    navbar.style.zIndex = "-1";
  } 
  prevScrollpos = currentScrollPos; 
}
// ---***--- //
//

/* var switchNavegation = document.getElementById('switch_navegation');
function btnNavigation(){
	console.log(switchNavegation.checked);
	if (switchNavegation.checked == false) {
		$('body').css('position', 'fixed');
	}
	if (switchNavegation.checked == true) {
		$('body').css('position', 'unset');
	}
}; */

// ---***--- //
$(document).ready(function(){

  // Slider de Skills
  $('.slider_skills').slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


});

/* Descarga de archivos */

    document.addEventListener('wpcf7mailsent', function(event) {
        alert("Fire!");

        var file_path = 'https://webskillscr.com/manuelbarrientoscr/wp-content/uploads/2021/03/foto-footer.png';
        var a = document.createElement('A');
        a.href = file_path;
        a.download = file_path.substr(file_path.lastIndexOf('/') + 1);
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }, false);



