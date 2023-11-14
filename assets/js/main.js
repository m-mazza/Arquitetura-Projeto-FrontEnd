$(document).ready(function() {


    var lightboxDescription = GLightbox({
        selector: '.glightbox2'
    });

//BANNER
    $('.banner').owlCarousel({
        loop:true,
  
        autoWidth: true,
        items: 1,
        dots: false,
        navText: false,
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        navText: ['','<i class="las la-angle-right"></i>'],
        animateOut: 'fadeOut',
        responsive : {
            768 : {
                nav: true,
                mouseDrag: false,
            }
        },
        
    });

    $('.banner-item-wrapper').each(function() {
        var banner = $(this).data('banner');
        $(this).css('background-image', 'url('+ banner +')');
    });
        

// VALIDAÇÃO DE FORMULÁRIO
    $('form').on('submit', function(e) {
        var idForm = this.id;
        var parametro = '#' + idForm + ' input, #' + idForm + ' textarea';
        var textbtn =  $('#'+ idForm +' button').html();
        $('#'+ idForm +' button').attr('disabled', true);
        $('#'+ idForm +' button').html('<i class="fa fa-spinner fa-pulse"></i> Aguarde...');
  
        $(parametro).each(function() {
            var campo = $(this).val();  
            if(campo == "") {
                $('#'+ idForm +' button').attr('disabled', false);
                $('#'+ idForm +' button').html(textbtn);
                var nomeCampo = $(this).data('name');
                // if( nomeCampo == undefined) {
                //     if(grecaptcha.getResponse() != '') {
                //         return true;
                //     } else {
                //         var nomeCampo = $(this).data('name');
                //         $('.modal-header p').html('Não é possível enviar o formulário');
                //         $('.modal-body p').html('Selecione "Eu não sou um robô!');
                //         $('#modal_validation').modal('toggle');
                //         e.preventDefault();
                //         return false;
                //     }
                // }
                $('.modal-header p').html('Não é possível enviar o formulário');
                $('.modal-body p').html('O campo "<strong>'+nomeCampo+'</strong>" está vazio.');
                $('#modal_validation').modal('toggle');
                e.preventDefault();
                return false;
            }
        });    
    });    


// NAVBAR FIXA
    $(document).on('scroll', function(e) {
        var d = $(this).scrollTop();
        if( d > 90){
            $('#navbarArea').addClass('navbar-fixed');
            $('.logo-wrapper a h1').addClass('text-dark');
            $('.logo-wrapper a h1').removeClass('text-light');
        } else {
            $('#navbarArea').removeClass('navbar-fixed');
            $('.logo-wrapper a h1').addClass('text-light');
            $('.logo-wrapper a h1').removeClass('text-dark');
        }
    });

// NAVBAR MOBILE
    $('.mobile-trigger i').on('click', function(e) {
        $('.mobile-menu-wrapper').css('transform', 'translate(0%)');
        if(e.target.className != 'las la-bars'){
            $('.mobile-menu-wrapper').css('transform', 'translate(-100%)');
        }
    });

    $(window).resize(function() {
        $('.mobile-menu-wrapper').css('transform', 'translate(-100%)');
    })


// MASCARA DE IPUT TELEFONE
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.telefone').mask(SPMaskBehavior, spOptions);
    

//SCROLL
    $('.link-wrapper ul li a').on('click', function(e){
        var link = $(this).attr('href'), target = $('#'+link+'').offset().top;
        if(link == 'contato') {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target - 180
            }, 800)
        }
      
    })
//LOAD
    setTimeout(function() {
        $('.load-wrapper').css('display','none');
    }, 2500)

   
});

