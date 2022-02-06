// ARROW CHANGE ON CLICK

function UsersArrow() {
    var change = document.getElementById("User-arrow-change");

    if (change.classList.contains("fa-arrow-down")) {
        change.classList.remove("fa-arrow-down");
        change.classList.add("fa-arrow-up");
    }
    else if (change.classList.contains("fa-arrow-up")) {
        change.classList.remove("fa-arrow-up");
        change.classList.add("fa-arrow-down");
    }
}

function ServicesArrow() {
    var change = document.getElementById("services-arrow-change");

    if (change.classList.contains("fa-arrow-down")) {
        change.classList.remove("fa-arrow-down");
        change.classList.add("fa-arrow-up");
    }
    else if (change.classList.contains("fa-arrow-up")) {
        change.classList.remove("fa-arrow-up");
        change.classList.add("fa-arrow-down");
    }
}

function ServicesPagesArrow() {
    var change = document.getElementById("Services-pages-arrow-change");

    if (change.classList.contains("fa-arrow-down")) {
        change.classList.remove("fa-arrow-down");
        change.classList.add("fa-arrow-up");
    }
    else if (change.classList.contains("fa-arrow-up")) {
        change.classList.remove("fa-arrow-up");
        change.classList.add("fa-arrow-down");
    }
}

// ---------------------------------------

// BURGER BTN 

// $('#burgerbtn').click(function () {
//     $('#sidebar').toggle();
//     if ($('.main-cont').hasClass('width')) {
//         $('.main-cont').removeClass('width')
//     }

//     else ($('.main-cont').addClass('width'))

// });



$('#burgerbtn').click(function () {

    if ($('#sidebar').hasClass('hidden')) {
        $('#sidebar').removeClass('hidden')
            ($('#sidebar').addClass('show'))
    }

    else {
        ($('#sidebar').addClass('hidden'))
            ($('#sidebar').removeClass('show'))

    }

});


$('#closebtn').click(function () {

    if ($('#sidebar').hasClass('hidden')) {
        $('#sidebar').removeClass('hidden')
            ($('.main-cont').addClass('show'))
    }

    else {
        ($('#sidebar').addClass('hidden'))
            ($('.main-cont').removeClass('show'))
    }

});


