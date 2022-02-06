
$('.arrow-cont').on('click', function () {
    if ($(".nav-cont").hasClass("none") && $(".fa-arrow-alt-circle-down").hasClass("arrowNoRotate")) {

        $(".nav-cont").addClass("disp")
        $(".nav-cont").removeClass("none")

        $(".fa-arrow-alt-circle-down").addClass("arrowRotate")
        $(".fa-arrow-alt-circle-down").removeClass("arrowNoRotate")
    }
    else if ($(".nav-cont").hasClass("disp") && $(".fa-arrow-alt-circle-down").hasClass("arrowRotate")) {

        $(".nav-cont").addClass("none")
        $(".nav-cont").removeClass("disp")

        $(".fa-arrow-alt-circle-down").addClass("arrowNoRotate")
        $(".fa-arrow-alt-circle-down").removeClass("arrowRotate")
    }
});