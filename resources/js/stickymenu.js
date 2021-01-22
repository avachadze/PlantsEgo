window.onload = iniciar;
var nav = null;
var drop1= null;
var drop2= null;

function iniciar() {
    nav = document.getElementById("nav");
    drop1= document.getElementById("drop1");
    drop2= document.getElementById("drop2");
    drop3= document.getElementById("drop3");

    if ($(window).width() > 992) {
        nav.setAttribute("data-toggle", "sticky-onscroll");
        sticky();
    } else {
        nav.setAttribute("data-toggle", "");
    }
}
window.onresize = actualizar;

function actualizar() {
    // quitar desplegable
    var cosoquebaja = document.getElementById('navbarToggleExternalContent');
    if (cosoquebaja.classList.contains('show'))
        cosoquebaja.classList.remove('show');
}
//$(document).ready(
function sticky() {
    // Custom
    var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
            sticky.addClass("navbar-dark");
            dropup_down(true);
        } else {
            sticky.removeClass("is-sticky");
            sticky.removeClass("navbar-dark");
            stickyWrapper.height('auto');
            dropup_down(false);
        }
    };

    // Find all data-toggle="sticky-onscroll" elements
    $('[data-toggle="sticky-onscroll"]').each(function() {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');

        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
            stickyToggle(sticky, stickyWrapper, $(this));
        });

        // On page load
        stickyToggle(sticky, stickyWrapper, $(window));
    });

    function dropup_down($bool)
    {
        if ($bool)
        {
            drop1.classList.remove('dropup');
            drop1.classList.add('dropdown');

            drop2.classList.remove('dropup');
            drop2.classList.add('dropdown');

            drop3.classList.remove('dropup');
            drop3.classList.add('dropdown');
        }
            else
            {
                drop1.classList.remove('dropdown');
                drop1.classList.add('dropup');

                drop2.classList.remove('dropdown');
                drop2.classList.add('dropup');

                drop3.classList.remove('dropdown');
                drop3.classList.add('dropup');
            }
    }
}
