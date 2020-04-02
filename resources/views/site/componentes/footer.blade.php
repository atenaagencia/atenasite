 <!-- Footer -->
 <section class="w3l-footers-1" id="afooter">
    <div class="footer bg-purple">
     <div class="container">
      <div class="footer-content">
       <div class="row">
        <div class="col-lg-8 footer-left">
         <p class="m-0">© Copyright 2020 Atena Agência.</p>
       </div>
       <div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
         <ul class="social m-0 p-0">
          <li><a href="https://www.facebook.com/atenaagencia/"target="_blank"><span class="fa fa-facebook"></span></a></li>
          <li><a href="https://www.instagram.com/atenaagencia/"target="_blank"><span class="fa fa-instagram"></span></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=5574988416893" target="_blank"><span class="fa fa-whatsapp"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- //Footer -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-secondary" title="Go to top">
<span class="fa fa-angle-up"></span>
</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
 scrollFunction()
};

function scrollFunction() {
 if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
     document.getElementById("movetop").style.display = "block";
 } else {
     document.getElementById("movetop").style.display = "none";
 }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
 document.body.scrollTop = 0;
 document.documentElement.scrollTop = 0;
}
</script>
<!-- /move top -->

<!-- common jquery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- //common jquery -->

<!-- // for banner slider -->
<script src="js/momentum-slider.min.js"></script>
<script>
(function () {

var slidersContainer = document.querySelector('.sliders-container');

// Initializing the numbers slider
var msNumbers = new MomentumSlider({
el: slidersContainer,
cssClass: 'ms--numbers',
range: [1, 4],
rangeContent: function (i) {
 return '';
},
style: {
 transform: [{
   scale: [0.4, 1]
 }],
 opacity: [0, 1]
},

interactive: false
});


// Initializing the titles slider
var titles = [
'Publicidade e Propaganda',
'Desenvolvimento e Criação',
'Comunicação Social',
'Consultoria Empresarial'
];

var msTitles = new MomentumSlider({
el: slidersContainer,
cssClass: 'ms--titles',
range: [0, 3],
rangeContent: function (i) {
 return '<h4 class="titulo-banner">' + titles[i] + '</h4>';
},
vertical: true,
reverse: true,
style: {
 opacity: [0, 1]
},

interactive: false
});


// Initializing the links slider
var msLinks = new MomentumSlider({
el: slidersContainer,
cssClass: 'ms--links',
range: [0, 3],
rangeContent: function () {
 return '<a href="about.html" class="ms-slide__link btn">Ver mais</a>';
},
vertical: true,
interactive: false
});


// Get pagination items
var pagination = document.querySelector('.pagination');
var paginationItems = [].slice.call(pagination.children);

// Initializing the images slider
var msImages = new MomentumSlider({
// Element to append the slider
el: slidersContainer,
// CSS class to reference the slider
cssClass: 'ms--images',
// Generate the 4 slides required
range: [0, 3],
rangeContent: function () {
 return '<div class="ms-slide__image-container"><div class="ms-slide__image"></div></div>';
},
// Syncronize the other sliders
sync: [msNumbers, msTitles, msLinks],
// Styles to interpolate as we move the slider
style: {
 '.ms-slide__image': {
   transform: [{
     scale: [1.5, 1]
   }]
 }
},


// Update pagination if slider change
change: function (newIndex, oldIndex) {
 if (typeof oldIndex !== 'undefined') {
   paginationItems[oldIndex].classList.remove('pagination__item--active');
 }
 paginationItems[newIndex].classList.add('pagination__item--active');
}
});


// Select corresponding slider item when a pagination button is clicked
pagination.addEventListener('click', function (e) {
if (e.target.matches('.pagination__button')) {
 var index = paginationItems.indexOf(e.target.parentNode);
 msImages.select(index);
}
});
var socialLeft = document.querySelector('.social .left');
var social = document.querySelector('.social');
var socialRight = document.querySelector('.social .right');
// var socialItems = [].slice.call(social.children);

socialLeft.addEventListener('click', function () {    
var valor = $('.social').data('contador');
 msImages.select(valor+1);
 if (valor < 4) {
     $('.social').data('contador', valor + 1);
 };
    
});

socialRight.addEventListener('click', function () {
var valor = $('.social').data('contador');
if (valor >= 1 || valor <= 4 ) {
  msImages.select(valor - 1);
  $('.social').data('contador', valor - 1);
};

});



})();
</script>
<!-- // for banner slider -->
<!-- stats number counter-->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
$('.counter').countUp();
</script>
<!-- //stats number counter -->
<!--  bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!--  //bootstrap js -->

<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
$('.navbar-toggler').click(function () {
$('body').toggleClass('noscroll');
})
});
</script>
<!-- disable body scroll which navbar is in active -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b8ee1ffafc2c34e96e83756/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
@yield("footer")