

jQuery(function ($) {
    //CORRECTION BUG DIV COUPER

    $('nav ul li a').click(function () {

        const page = $(this).attr('href');
        const speed = 750;

        $('html, body').animate({ scrollTop: $(page).offset().top - 80 }, speed);
        return false;

    });
    $('#arrow').click(function () {

        const page = $(this).attr('href');
        const speed = 750;

        $('html, body').animate({ scrollTop: $(page).offset().top - 80 }, speed);
        return false;

    });
    $('.gotop').click(function () {

        const page = $(this).attr('href');
        const speed = 750;

        $('html, body, header').animate({ scrollTop: $(page).offset().top = 0 }, speed);
        return false;

    });



    //SCROLL FUNCTION

    $(window).scroll(function () {

        if ($(this).scrollTop() > 35) {

            $('.reseau').css('opacity', '0.3');

        }
        if ($(this).scrollTop() < 35) {

            $('.reseau').css('opacity', '0');

        }

        if ($(this).scrollTop() > 35) {

            $('#menu_top').css('opacity', '1');
      
        }
        if ($(this).scrollTop() < 35) {

            $('#menu_top').css('opacity', '0');
         
        }

        if ($(this).scrollTop() > 400) {

            $('.photo').css('opacity', '1');

        }
        if ($(this).scrollTop() < 100) {

            $('.photo').css('opacity', '0');

        }
        //RESEAUX

        if ($(this).scrollTop() < 35) {

            $('.reseaux').css('opacity', '0');

        }
        if ($(this).scrollTop() > 35) {

            $('.reseaux').css('opacity', '0.5');

        }

        //CLASS ACTIVE

        if ($(this).scrollTop() > 400) {

            $('cat1').css('color', 'pink');

        }
        if ($(this).scrollTop() < 100) {

            $('cat1').css('color', 'white');

        }

        //RESEAUX

        if ($(this).scrollTop() < 35) {

            $('.reseaux').css('opacity', '0');

        }
        if ($(this).scrollTop() > 35) {

            $('.reseaux').css('opacity', '0.5');

        }


        //COMPETENCES

        $('.progress-bar').css('width', '0%');

        if ($(this).scrollTop() > 1200) {

            $('.progress-bar').css('width', '');

        }

        
    });


    //ONGLET DES RESEAUX SOCIAUX 
    $('.fa-arrow-right').click(function () {


        if ($('.reseaux').css('margin-left') == '-200px') {

            $('.reseaux').css('margin-left', '0px');
            $('.fa-arrow-right').css('transform', 'rotate(180deg)');
            $('.reseaux').css('opacity', '1');

        }

        else {
            $('.reseaux').css('margin-left', '-200px');
            $('.fa-arrow-right').css('transform', 'rotate(360deg)');
            $('.reseaux').css('opacity', '0.5');
        }

    });


  
    //LOADER

    $(function (){

        $(window).ready(function() {
            setTimeout(supprimerloader,1000);
           })

        function supprimerloader(){
            $('.loaderB').css("opacity","0");
            $('.loaderB').css("display","none");
        }



    })

  //MESSAGE TOP 

    $(function () {

        $(document).ready(function () {
            setTimeout(text_top, 1200);
        })
    });
    function text_top() {

        function extraire() {
            character = message.substring(I, I = I + 1);
            if (character == "-" && message.substr(I, 5) == "stop-") {
                character = "<br>";
                I = I + 5;
            }
            mySpan.innerHTML += character;
            if (I < message.length) setTimeout(extraire, 100);
        }
        I = 0;
        message = "-stop-Pierre-Edouard COURQUIN-stop- developpeur WEB";
        extraire();

    }



    //ARROW
    function deplacement() {
        var arrow = $('.arrow');
        var margeTop = arrow.css('bottom');


        if (margeTop == '10px') {

            arrow.css('bottom', '0px');
        }
        else {
            arrow.css('bottom', '10px');
        }
    }


    var temps = setInterval(deplacement, 500);


    //POP UP SITE 1
    $('.img1').click(function () {

        $('#pop1').css('height', '80%');
        $('.black_bord').css('height', '100%');
        $('.reseaux').css('opacity', '0');
        $('#menu_top').css('display', 'none');
        $('.reseaux').css('display', 'none');
       
    });

    $('.fa-times').click(function () {

        $('#pop1').css('height', '0%');
        $('.black_bord').css('height', '0%');
        $('.reseaux').css('opacity', '0.5');
        $('#menu_top').css('display', 'flex');
        $('.resaux').css('display', 'flex');
        

    });

    //POP UP SITE 2
    $('.img2').click(function () {

        $('#pop2').css('height', '80%');
        $('.black_bord').css('height', '100%');
        $('.reseaux').css('opacity', '0');
        $('#menu_top').css('display', 'none');
        $('.reseaux').css('display', 'none');
    });

    $('.fa-times').click(function () {

        $('#pop2').css('height', '0%');
        $('.black_bord').css('height', '0%');
        $('.reseaux').css('opacity', '0.5');
        $('#menu_top').css('display', 'flex');
        $('.resaux').css('display', 'flex');

    });

    //POP UP SITE 3
    $('.img3').click(function () {

        $('#pop3').css('height', '80%');
        $('.black_bord').css('height', '100%');
        $('.reseaux').css('opacity', '0');
        $('#menu_top').css('display', 'none');
        $('.reseaux').css('display', 'none');
    });

    $('.fa-times').click(function () {

        $('#pop3').css('height', '0%');
        $('.black_bord').css('height', '0%');
        $('.reseaux').css('opacity', '0.5');
        $('#menu_top').css('display', 'flex');
        $('.resaux').css('display', 'flex');

    });


});
