var main = function() {
    $(".active").click(function() {
        $(".dropdown").toggle();
    });
};

$(document).ready(main);