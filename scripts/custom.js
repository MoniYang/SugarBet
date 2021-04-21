
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 10) {
            $(".header").addClass("fixed");
        } else {
            $(".header").removeClass("fixed");
        }
    });

    $(".login_btn").click(function () {
        if ($(".login_form").hasClass("open")) {
            $(".login_form").removeClass('open');
            $(".login_form").slideUp()
            //  $(".law_btn").addClass('close');
        } else {
            $('.login_form.open').removeClass('open');
            $(".login_form").addClass('open').slideDown();
            //  $(".law_btn.close").removeClass('close');
        }
    })


    $('.livechat--btn').click(function(){
        $('.livechat .box').toggleClass('open');
        $('.livechat--btn').toggleClass('open');

    });
    $('.trans_btn').click(function(){
        $('.transfer_box').toggleClass('open');
        $('.trans_btn').toggleClass('open');
       
    });
   
   
  
    $('.mobileNav__btn').click(function(){
        $('.navbar').addClass('open');
        $('.navbar').removeClass('close');

    });

    $('.mobileNav--Closebtn').click(function(){
        $('.navbar').addClass('close');
        $('.navbar').removeClass('open');

    });
    $('.transbox--btnClick').click(function(){
        $('.upload--box').toggle();
      
    });
    $('.userBank--add').click(function(){
        $('.userBank__addCard').toggle();
      
    });
    $('.mobieUserInfo--btn').click(function(){
        $('.userInfo').toggle();
    })
    $('.userBank__submitBtn').click(function(){
        $('.userBank__addCard').hide();
    })
    $('.userInfo--edit').click(function(){
        $(".show_text").hide();
        $(".show_input").show();
    });
    $('.userInfo--submit').click(function(){
        $(".show_text").show();
        $(".show_input").hide();
    });
    $('.new_bank--click').click(function(){
        $('.bank_info').toggle();
        $('.new_bank--click').addClass('open');
        if ($('.new_bank--click.open').hasClass('open')){
            $('.new_bank--click.open').removeClass('open');
            // $('.new_bank--click.open').addClass('open');
        }
      
    });

        $('.index_slider.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots:false,
            autoplay:true,
            animateOut: 'fadeOut',
    // animateIn: 'flipInX',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })




    $('.index_game_area.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots:true,
        autoplay:true,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items:5
            },
            1000: {
                items:5
            }
        }
    })
    $('.gameChoice--owl.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots:true,
        // autoplay:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items:1
            },
            1000: {
                items:1
            }
        }
    });
    $('.dropdown--owl.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots:true,
        // autoplay:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items:5
            },
            1000: {
                items:6
            }
        }
    })
   