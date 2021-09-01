$(document).ready(function() {
    $("#navUserToggle").hide();
    $("#cartShopToggle").hide();

    $("#navUserProfile").click(function() {
        $("#navUserToggle").slideToggle();
    });
    $("#navUserToggle").mouseleave(function() {
        $(this).slideUp();
    });

    $("#cartShop").click(function() {
        $("#cartShopToggle").slideToggle();
    });
    $("#cartShopToggle").mouseleave(function() {
        $(this).slideUp();
    });


    // -----------------------


    $(".bc-menu ul li a").click(function () {
        $(".bc-menu ul li a").removeClass("bc-menu-active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("bc-menu-active");   
    });


    // -----------------------


    $("#mode1").click(function() {
        $(".mode1").show();
        $(".mode2").hide();
        $(".mode3").hide();
        $(".mode4").hide();
        $(".mode5").hide();
        $(".mode6").hide();
        $(".mode7").hide();
        $(".mode8").hide();
    });
    $("#mode2").click(function() {
        $(".mode2").show();
        $(".mode1").hide();
        $(".mode3").hide();
        $(".mode4").hide();
        $(".mode5").hide();
        $(".mode6").hide();
        $(".mode7").hide();
        $(".mode8").hide();
    });
    $("#mode3").click(function() {
        $(".mode3").show();
        $(".mode1").hide();
        $(".mode2").hide();
        $(".mode4").hide();
        $(".mode5").hide();
        $(".mode6").hide();
        $(".mode7").hide();
        $(".mode8").hide();
    });
    $("#mode4").click(function() {
        $(".mode4").show();
        $(".mode1").hide();
        $(".mode2").hide();
        $(".mode3").hide();
        $(".mode5").hide();
        $(".mode6").hide();
        $(".mode7").hide();
        $(".mode8").hide();
    });
    $("#mode5").click(function() {
        $(".mode5").show();
        $(".mode1").hide();
        $(".mode2").hide();
        $(".mode3").hide();
        $(".mode4").hide();
        $(".mode6").hide();
        $(".mode7").hide();
        $(".mode8").hide();
    });
    $("#mode6").click(function() {
        $(".mode6").show();
        $(".mode1").hide();
        $(".mode2").hide();
        $(".mode3").hide();
        $(".mode4").hide();
        $(".mode5").hide();
        $(".mode7").hide();
        $(".mode8").hide();
    });
    $("#mode7").click(function() {
        $(".mode7").show();
        $(".mode1").hide();
        $(".mode2").hide();
        $(".mode3").hide();
        $(".mode4").hide();
        $(".mode5").hide();
        $(".mode6").hide();
        $(".mode8").hide();
    });
    $("#mode8").click(function() {
        $(".mode1").show();
        $(".mode2").show();
        $(".mode3").show();
        $(".mode4").show();
        $(".mode5").show();
        $(".mode6").show();
        $(".mode7").show();
        $(".mode7").show();
    });
});