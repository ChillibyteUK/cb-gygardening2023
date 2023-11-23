// Add your custom JS here.

const getScrollbarWidth = () => window.innerWidth - document.documentElement.clientWidth;
console.log(getScrollbarWidth());

var menutoggle = document.getElementById('menutoggle');
var myOffcanvas = document.getElementById('rightOffcanvas');
myOffcanvas.addEventListener('show.bs.offcanvas', function () {
    console.log('show');
    menutoggle.classList.add('pe-4');
});
myOffcanvas.addEventListener('hidden.bs.offcanvas', function () {
    console.log('hidden');
    menutoggle.classList.remove('pe-4');
});

// window.addEventListener("load", function () {
//   AOS.init({
//     duration: 2000,
//     once: true,
//   });
// });


// (function(){


  
// })();
