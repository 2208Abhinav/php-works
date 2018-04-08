$(document).ready(function (){
    $(".regOption").mouseover(function (){
        $(".loginContent").fadeOut(100, function (){
            $(".registerContent").fadeIn(400);
        });
    });

    $(".regOption").on("click", function (){
        return false;
    });

    $(".logOption").mouseover(function (){
        $(".registerContent").fadeOut(100, function (){
            $(".loginContent").fadeIn(400);
        });
    });

    $(".logOption").on("click", function (){
        return false;
    });

    $("#for-home-btn").on("click", function (){
        window.location.replace("../index.php");
    });

    $("#for-logout-btn").on("click", function (){
        window.location.replace("logout.php");
    });

    //$(window).on("beforeunload", function (){
     //   $(".profile-mssg1").remove();
    //});
});
