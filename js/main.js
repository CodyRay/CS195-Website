// Restyle menu items for the current page; requires jquery library.
// Provided by Cameron Spear at css-tricks.com/snippets/jquery/highlight-all-links-to-current-page/

$(document).ready(function() {
        $('a').each(function() {
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('current');
            }
        });
    });
