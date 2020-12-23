(function ($) {
    "use strict";


    /* ===================================
        Side Menu
    ====================================== */
    if ($("#sidemenu_toggle").length) {

        $("#sidemenu_toggle").on("click", function () {
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
        }), $(".side-nav .navbar-nav").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        }), $("#btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        });
    }

    // Navbar Scroll Function
    var $window = $(window);
    $window.scroll(function () {
        var $scroll = $window.scrollTop();
        var $navbar = $(".header-nav");
        if (!$navbar.hasClass("sticky-bottom")) {
            if ($scroll > 250) {
                $navbar.addClass("fixed-menu");
            } else {
                $navbar.removeClass("fixed-menu");
            }
        }
    });



    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        spaceBetween: 30,
        centeredSlides: true,
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        autoHeight: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });

    mySwiper.init;




    var form = $("#placaSteps");

    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            size: { required: true },
            model: { required: true },
            design: { required: true },
            name: { required: true },
            birthdate: { required: true },
            deathdate: { required: true },
        },
        messages: {
            size: { required: "Por favor, selecione um tamanho." },
            model: { required: "Por favor, selecione um modelo." },
            design: { required: "Por favor, selecione uma moldura." },
            name: { required: "Por favor, digite um nome e sobrenome." },
            birthdate: { required: "Por favor, digite a data de nascimento." },
            deathdate: { required: "Por favor, digite a data de falecimento." },

        }
    });

    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        labels: {
            cancel: "Cancelar",
            current: "current step:",
            pagination: "Pagination",
            finish: "Finalizar",
            next: "Próximo",
            previous: "Voltar",
            loading: "Carregando ..."
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            form.submit();
        }
    });


    $("#inputGroupFile01").change(function (event) {
        RecurFadeIn();
        readURL(this);
    });
    $("#inputGroupFile01").on('click', function (event) {
        RecurFadeIn();
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var filename = $("#inputGroupFile01").val();
            filename = filename.substring(filename.lastIndexOf('\\') + 1);
            reader.onload = function (e) {
                debugger;
                $('#blah').attr('src', e.target.result);
                $('#blah').hide();
                $('#blah').fadeIn(500);
                $('.custom-file-label').text(filename);
            }
            reader.readAsDataURL(input.files[0]);
        }
        $(".alert").removeClass("loading").hide();
    }
    function RecurFadeIn() {
        console.log('ran');
        FadeInAlert("Wait for it...");
    }
    function FadeInAlert(text) {
        $(".alert").show();
        $(".alert").text(text).addClass("loading");
    }


    $('.cep').mask('00000-000');
    $('.cpf').mask('000.000.000-00', {reverse: true});
	$('.data').mask('00/00/0000');
	$('.validade').mask('00/0000');
	$('.creditcard').mask('0000 0000 0000 0000');

    $('.telefone').focusout(function(){
    	var phone, element;
    	element = $(this);
    	element.unmask();
    	phone = element.val().replace(/\D/g, '');
    	if(phone.length > 10) {
    		element.mask("(99) 99999-9999");
    	} else {
    		element.mask("(99) 9999-99999");
    	}
    }).trigger('focusout');

})(jQuery, window, document);