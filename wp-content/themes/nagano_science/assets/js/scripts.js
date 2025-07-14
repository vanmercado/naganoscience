jQuery(document).ready(function () {

    // Fixedheader
    function fixedHeader() {
      jQuery(window).on('scroll', function () {
        if (jQuery(window).width() >= 992) {
          var iCurScrollPos = jQuery(window).scrollTop();
          if (iCurScrollPos >= 90) {
            if (!jQuery('.header').hasClass('fh')) {
              jQuery('.header').addClass('fh');
            };
          } else {
            if (jQuery('.header').hasClass('fh')) {
              jQuery('.header').removeClass('fh');
            }
          }
        }
      });
    }
    fixedHeader();

    // Sliding Menu
    function slidingMenu() {

      jQuery('.burgerMenu, .header__btn, .header__close').click(function () {

        if (!jQuery('.burgerMenu, .header__btn').hasClass('is-open')) {
          jQuery('.burgerMenu, .header__btn').addClass('is-open');
        } else {
          jQuery('.burgerMenu, .header__btn').removeClass('is-open');
        }

        if (!jQuery('.slidingMenu').hasClass('animated fadeInRight is-open')) {
          jQuery('.slidingMenu').addClass('animated fadeInRight is-open');
        } else {
          jQuery('.slidingMenu').addClass('fadeOutRight');
          setTimeout(function () {
            jQuery('.slidingMenu').removeClass('is-open animated fadeInRight fadeOutRight');
          }, 500);
        }
      });

    }
    slidingMenu();

    // Uniform height top solution items
    function chainHeight() {
      jQuery(window).on('resize', function () {
        if (jQuery(window).width() >= 768) {
          var largestHeight = 0;
          jQuery('.topSolution__caption').each(function () {
            largestHeight = largestHeight > jQuery(this).height() ? largestHeight : jQuery(this).height();
          });
          jQuery('.topSolution__caption').height(largestHeight);
        } else {
          jQuery('.topSolution__caption').css("height", "auto");
        }
      });
    }
    chainHeight();


    // Uniform height top solution items
    function chainHeightImprove() {
      if (jQuery(window).width() >= 768) {
        var largestHeight = 0;
        jQuery('.improvement .image__item img').each(function () {
          largestHeight = largestHeight > jQuery(this).height() ? largestHeight : jQuery(this).height();
        });
        jQuery('.improvement .image__item img').height(largestHeight);
      } else {
        jQuery('.improvement .image__item img').css("height", "auto");
      };
    }
    chainHeightImprove();

    // Tab link function
    function tabLink() {
      jQuery('.tab__link').click(function () {
        var btn = jQuery(this);
        var btnPanel = '#' + jQuery(this).attr('data-panel');
        var btnLink = btn.parent().parent().find('.btn').attr('href');
        var btnUrl = btnPanel == '#spTab__content1' || btnPanel == '#tab__content1' ? 'info' : 'iryo';
        var newUrl = btnLink.split('/').slice(0, -1).join('/') + '/' + btnUrl;

        console.log(btnPanel);
        console.log(btnUrl);
        console.log(newUrl);


        btn.parent().parent().find('.tab__content').each(function () {
          jQuery(this).removeClass('is-open');
        });
        btn.parent().parent().find('.tab__link').each(function () {
          jQuery(this).removeClass('is-active');
        });

        btn.addClass('is-active');
        btn.parent().parent().find(btnPanel).addClass('is-open');
        // btn.parent().parent().find('.btn').attr("href", newUrl);
      });
    }
    tabLink();

    // function smooth scroll
    function smoothScroll() {
      jQuery('.scroll').click(function (e) {
        e.preventDefault();
        jQuery('html, body').animate({
          scrollTop: jQuery(jQuery(this).attr('href')).offset().top - 110
        }, 500);
        return false;
      });
    }
    smoothScroll();

    // wow animation
    function WowAnmation() {
      wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
      });
      wow.init();
    }
    WowAnmation();


    // SP News Slider
    function NewsTicker() {
      if (jQuery(window).width() < 992) {
        $.simpleTicker($(".spNews01-js"), {
          'effectType': 'roll'
        });
      };
    }
    NewsTicker();

    // Remove empty p tags
    function removeEmptyP() {
      jQuery('p:empty').remove();
    }
    removeEmptyP();

    function tabs(){
      const tabHeaders = $(".challengeTab__headItem");
      const contents = $(".challengeTab__contentItem")
      tabHeaders.on("click", function(){
        const targetContent = $(this).attr("content-id");
        tabHeaders.removeClass("selected");
        $(this).addClass("selected");

        contents.hide()
        $(`#${targetContent}`).fadeIn()
      })
    }

    tabs()
  });