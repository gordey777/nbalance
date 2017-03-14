(function($) {
  $.fn.objectScroll = function(diff, speed) {
    if (!diff && diff !== 0)
      diff = 0;
    if (!speed && speed !== 0)
      speed = 1000;
    $('html, body').animate({
      scrollTop: $(this).offset().top - diff
    }, speed);
  };
})(jQuery);


function initNiceScroll() {
  $(".js-scroll").click(function(e) {
    e.preventDefault();
    var blockId = $(this).data("id"),
      block = $("#" + blockId);
    if (block.length > 0) {
      block.objectScroll(0, 400);

      var accordeon = block.children(".js-accordeon");
      if (accordeon.length > 0 && accordeon.hasClass("js-closed"))
        accordeon.click();
    }
  });
}





(function($) {
  $.fn.owSelectorsAction = function() {
    var self = this;


    return this.each(function() {

      $(document).click(function(event) {
        if ($(event.target).closest(".js-selectors-item").length) return;
        $(".js-selectors-item").removeClass("active");
        event.stopPropagation();
      });

      $(self).on("click", ".js-selectors-item > a", function() {
        var popupContainer = $(this).closest(".js-selectors-item");

        if (popupContainer.hasClass("js-disabled"))
          return false;

        popupContainer.toggleClass('active');
        popupContainer.siblings(".js-selectors-item").removeClass('active');
        if (popupContainer.hasClass("active")) {
          var buttonOffset = $(this).offset(),
            windowWidth = $(window).width(),
            popup = $(this).siblings(".js-selectors-popup"),
            popupWidth = popup.width();

          popup.removeClass("right middle");

          if (windowWidth - buttonOffset.left < popupWidth) {
            if (buttonOffset.left + 56 >= popupWidth)
              popup.addClass("right");
            else
              popup.addClass("middle");
          }
        }
      });

      $(self).on("click", ".js-selectors-list .list__item", function(e) {
        e.preventDefault();
        if (!($(this).hasClass('disabled'))) {
          $(this).parents(".js-selectors-list").find(".list__item").each(function() {
            $(this).removeClass("active");
          });
          $(this)
            .addClass("active")
            .parents(".js-selectors-item")
            .removeClass('active')
            .find(".js-selectors-val").text($(this).find("a").text());
        }
      });

      $(self).on("mouseenter", ".js-selectors-list .list__item", function(e) {
        var elem = $(this),
          sizeBlock = elem.parents(".js-selectors-popup").find(".js-selectors-total .list__item");

        if (elem.data('sizeEu') !== undefined)
          sizeBlock.find(".js-product-size-eu").text(elem.data('sizeEu'));
        if (elem.data('sizeUs') !== undefined)
          sizeBlock.find(".js-product-size-usa").text(elem.data('sizeUs'));
        if (elem.data('sizeCm') !== undefined)
          sizeBlock.find(".js-product-size-foot").text(elem.data('sizeCm'));
      });

      $(self).on("mouseleave", ".js-selectors-list .list__item", function(e) {
        var elem = $(this).parent().find(".active"),
          sizeBlock = elem.parents(".js-selectors-popup").find(".js-selectors-total .list__item");
        if (elem.data('sizeEu') !== undefined)
          sizeBlock.find(".js-product-size-eu").text(elem.data('sizeEu'));
        if (elem.data('sizeUs') !== undefined)
          sizeBlock.find(".js-product-size-usa").text(elem.data('sizeUs'));
        if (elem.data('sizeCm') !== undefined)
          sizeBlock.find(".js-product-size-foot").text(elem.data('sizeCm'));
      });
    });

  }
}(jQuery));

/**
 * Debounce and throttle function's decorator plugin 1.0.5
 *
 * Copyright (c) 2009 Filatov Dmitry (alpha@zforms.ru)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

(function(g) {
  g.extend({
    debounce: function(e, f, a, b) {
      3 == arguments.length && "boolean" != typeof a && (b = a, a = !1);
      var c;
      return function() {
        var d = arguments;
        b = b || this;
        a && !c && e.apply(b, d);
        clearTimeout(c);
        c = setTimeout(function() {
          !a && e.apply(b, d);
          c = null
        }, f)
      }
    },
    throttle: function(e, f, a) {
      var b, c, d;
      return function() {
        c = arguments;
        d = !0;
        a = a || this;
        b || function() {
          d ? (e.apply(a, c), d = !1, b = setTimeout(arguments.callee, f)) : b = null
        }()
      }
    }
  })
})(jQuery);




function footerFix() {
  if ($(window).width() >= 768) {
    $('.footer__fix').attr('style', '');
  } else {
    $('.footer__fix').css('height', $('.js-footer').height());
    var height = $(".js-footer").height();
    setInterval(function() {
      var h = $(".js-footer").height();
      if (h != height) {
        $('.footer__fix').css('height', h);
        height = h;
      }
    }, 50);
  };
}

function DDsmokeHeight() {
  $(".header nav").each(function() {
    $(this).find(".smoke").height($(".site_container").height() /*- $(this).offset().top - $(this).height()*/ );
  });
}

function DDsmokeShow() {
  $(".header nav > .list > .list__item").each(function() {
    if ($(this).find(".bl__dd").length != 0) {
      $(this).hover(
        function() {
          $(".js-smoke").addClass('show');
        },
        function() {
          $(".js-smoke").removeClass('show');
        }
      );
    }
  });
}

function promoShow() {
  $(".js-promo-toggle, .js-promo-close").on('click', function() {
    $(".js-promo").slideToggle(400);
  });
}

function inputSecPlaceholder() {
  $("input[type='text']").each(function() {
    if ($(this).width() <= 100) {
      $(this).attr('placeholder', $(this).attr('data-second-placeholder'));
    } else {
      $(this).attr('placeholder', $(this).attr('data-begin-placeholder'));
    }
  });
}

function menuMobileHeight() {
  // $(".list__sub_inner").each(function(){
  //  console.log($(this).find(".list__sub_list").height());
  // });
  //$(".menu-mobile, .list__sub").css( 'min-height', $(window).height() /*- $(".menu-mobile").offset().top*/ );

  //maxEqualHeight($('.list__sub_inner'));
}

function menuMobileShow() {
  $(".js-menumobile-open").click(function() {
    if ($(this).hasClass("open")) {
      $(".js-sub-list").removeClass("show");
      /*$(".js-sub-list").each(function(){
       $(this).removeClass("show");
       });*/
      $(".js-menumobile").hide();
      $(this).removeClass("open");
      //$("main, .footer__fix, .js-footer").show();
      $("main, .js-footer").show();
      $('.site_container').attr('style', '')
    } else {
      $(".js-menumobile").show();
      $(this).addClass("open");
      //$("main, .footer__fix, .js-footer").hide();
      $("main, .js-footer").hide();
      $('.site_container').css('overflow-y', 'auto')
    }

    if ($(".js-header-search-open").hasClass("open")) {
      $(".js-header-search").slideUp();
      $(".js-header-search-open").removeClass("open");
    }


  });
}

function menuMobileSubMenuAction() {
  $(".js-menu-mobile-item").on('click', function() {
    $(this).next(".js-sub-list").addClass("show");
  });
  $(".js-sub-list-back").on('click', function() {
    $(this).closest(".js-sub-list").removeClass("show");
  });
}

function searchHeaderAction() {
  $(".js-header-search-open").click(function() {
    if ($(this).hasClass("open")) {
      $(".js-header-search").slideUp();
      $(this).removeClass("open");
    } else {
      $(".js-header-search").slideDown();
      $(this).addClass("open");
    }
    if ($(".js-menumobile-open").hasClass("open")) {
      $(".js-sub-list").removeClass("show");
      $(".js-menumobile").hide();
      $(".js-menumobile-open").removeClass("open");
      //$("main, .footer__fix, .js-footer").show();
      $("main, .js-footer").show();
    }
  });
};

function headerClose() {
  if ($(window).width() >= 880) {
    $(".js-sub-list").removeClass("show");
    $(".js-menumobile").hide();
    //$(".js-menumobile-open, .js-header-search-open").removeClass("open");
    $(".js-menumobile-open").removeClass("open");
    //$(".js-header-search, main, .footer__fix, .js-footer").show();
    $(".js-header-search, main, .js-footer").show();
  } else {
    //$(".js-header-search").hide();
  }
}

function subsFooterResize() {
  if ($(window).width() >= 768) {
    $(".js-subs").css({
        'display': 'block',
        'height': $(".js-footer-menu").outerHeight()
      })
      //setTimeout(function() { $(".js-subs").removeClass("show") }, 500);
    $(".js-subs-accept").removeClass("show");
  } else {
    setTimeout(function() {
      $(".js-subs").removeClass("show")
    }, 500);
    $(".js-subs").css({
      // 'display': 'none',
      'height': 'auto'
    })

    //setTimeout(function() { $(".js-subs-accept").removeClass("show") }, 500);
  }
}

function subsFooterTrigger() {
  $(".js-subs-trigger").click(function() {
    wdth = $(window).width();
    $(".js-subs-form-container").show();
    if (wdth >= 768) {
      if ($(".js-subs").hasClass('show')) {
        $(".js-subs").removeClass('show');
        setTimeout(function() {
          $(".js-subs-accept").removeClass("show")
        }, 500);
      } else {
        $(".js-subs").addClass('show');
      }
    } else {

      $(".js-subs").slideToggle();
      setTimeout(function() {
        $(".js-subs-accept").removeClass("show")
      }, 500);

      $('html, body').animate({
        scrollTop: $(this).closest('.footer__col').offset().top
      }, 1000);

    }
  });
}

function subsFooterAction() {
  $(".js-subs-close").on('click', function() {
    setTimeout(function() {
      $(".js-subs-accept").removeClass("show")
    }, 500);
    $(".js-subs").removeClass("show");
  });

  $(".js-subs-form form").submit(function(e) {
    e.preventDefault();
    $(".js-subs-accept").addClass("show");
  });
}

function menuFooterAction() {
  $(".js-footer-menu-head").on('click', function() {
    if ($(this).parent().hasClass("show")) {
      $(this).parent().removeClass("show").find(".js-footer-menu-list").slideUp();
    } else {
      $(".js-footer-menu-list").slideUp();
      $(".js-footer-menu-head").parents().removeClass("show");
      $(this).parent().addClass("show").find(".js-footer-menu-list").slideToggle();

    }
    $('html, body').animate({
      scrollTop: $(this).offset().top
    }, 1000);
  });
}

function menuFooterResize() {
  $(".js-footer-menu-item").removeClass('show');
  if ($(window).width() >= 768) {
    $(".js-footer-menu-list").show();
  } else {
    $(".js-footer-menu-list").hide();
  }
}


function maxEqualHeightInline(list_obj, count) {
  var tr = parseInt(list_obj.length / count),
    mod = list_obj.length % count,
    buf = new Array(),
    k = 0;

  for (var i = 0; i < tr; i++) {
    buf[i] = new Array(count);
    for (var j = 0; j < count; j++) {
      buf[i][j] = list_obj[i * count + j];
    }
    maxEqualHeight($(buf[i]));
  }

  if (mod) {
    buf[tr] = new Array(mod);
    for (var i = list_obj.length - mod; i < list_obj.length; i++) {
      buf[tr][k] = list_obj[i];
      k++
    }
    maxEqualHeight($(buf[tr]));
  }
};

function maxEqualHeight(obj) {
  var maxH = 0;

  obj.height('auto');
  obj.each(function() {
    ($(this).outerHeight() > maxH) ? maxH = $(this).outerHeight(): maxH = maxH;
  }).outerHeight(maxH);
}

function productAppearance() {

  if ($(window).width() >= 1060) {
    maxEqualHeightInline($('.js-product-list .list__item'), 5);
  } else if ($(window).width() >= 960) {
    maxEqualHeightInline($('.js-product-list .list__item'), 4);
  } else if ($(window).width() >= 768) {
    maxEqualHeightInline($('.js-product-list .list__item'), 3);
  } else {
    maxEqualHeightInline($('.js-product-list .list__item'), 2);
  }
}

function accorderonAction() {
  $(".js-accordeon").each(function() {
    if (!$(this).hasClass("js-closed"))
      $(this).find('span[class*="open"]').hide();
  });

  $(".js-accordeon").click(function() {
    $(this).find('span[class*="open"]').toggle();
    $(this).toggleClass("js-closed");
    $(this).next().slideToggle();
  });
};

function radioCheck(name) {
  var flag = false;
  $("input[name='" + name + "']").each(function() {
    if ($(this).is(":checked")) {
      flag = true;
    }
  });
  return flag;
}


function bannerAction() {
  $(".js-main-banner").each(function() {
    var elem = $(this).children("a"),
      urlB = elem.attr('data-url1'),
      urlS = elem.attr('data-url2');
    if ($(window).width() >= 768) {
      elem.attr('style', 'background-image: url("' + urlB + '")')
    } else {
      elem.attr('style', 'background-image: url("' + urlS + '")')
    }
  });
}

function hidePlaceholder() {
  var ctrl = $(".js-hide-placeholder").find("input,textarea");

  ctrl.each(function() {
    $(this).data('holder', $(this).attr('placeholder'));
    $(this).attr('placeholder', '');
  });

  ctrl.focusin(function() {
    $(this).attr('placeholder', $(this).data('holder'));
  });
  ctrl.focusout(function() {
    $(this).attr('placeholder', '');
  });
}



function inputFlatFilled() {
  $(".js-input-flat input").each(function() {
    if ($(this).val() != '') $(this).parents(".input-flat").addClass('filled');
  });

  $(document).on("blur", ".js-input-flat input", function() {
    ($(this).val() != '') ? $(this).parents(".input-flat").addClass('filled'): $(this).parents(".input-flat").removeClass('filled');
  });
  $(".js-input-flat textarea").each(function() {
    if ($(this).val() != '') $(this).parents(".input-flat").addClass('filled');
  });

  $(document).on("blur", ".js-input-flat textarea", function() {
    ($(this).val() != '') ? $(this).parents(".input-flat").addClass('filled'): $(this).parents(".input-flat").removeClass('filled');
  });
};

function searchPageAction() {
  if ($(window).width() < 768) {
    $(".js-quest h1, .js-quest .tabs__trigger").hide();
    $(".js-quest input[id='tab-1']").prop('checked', true);
  } else {
    $(".js-quest h1, .js-quest .tabs__trigger").show();
  }
};

function upAction() {
  $('.js-up').click(function() {
    $("html, body").stop().animate({
      scrollTop: 0
    }, '500', 'swing');
  });
};

function upShow() {
  if ($(window).scrollTop() > 91) {
    $('.up').css('top', '-52px');
  } else {
    $('.up').css('top', '-86px');
  }
};

var accountMenuWidth = 0,
  smallBasketWidth = 0;

function searchWidth() {
  if ($(window).width() > 880) {
    var header = $("#header"),
      searchBlock = header.find(".js-header-search"),
      navbar = header.find(".navbar"),
      smallBasketBlock = navbar.find("#js-small-basket-block"),
      accountMenuBlock = navbar.find(".account-menu");

    if (accountMenuWidth <= 20)
      accountMenuWidth = accountMenuBlock.width() - 28;
    if (smallBasketWidth <= 20)
      smallBasketWidth = smallBasketBlock.width() - 28;

    var searchBlockWidth = searchBlock.width();
    if (parseInt(searchBlockWidth) < 140) {
      smallBasketBlock.addClass('minicart--hide-price');
      if (parseInt(searchBlock.width()) < 140) {
        accountMenuBlock.addClass("account--hide-label");
      }
    } else {
      if (parseInt(searchBlockWidth - accountMenuWidth) >= 151) {

        if (!accountMenuBlock.hasClass("account--hide-label") && parseInt(searchBlockWidth - smallBasketWidth) >= 141)
          smallBasketBlock.removeClass('minicart--hide-price');

        accountMenuBlock.removeClass("account--hide-label");

      }
    }

  }
}

$(document).ready(function() {

  /* header/footer */
  upAction();
  upShow();
  DDsmokeHeight();
  DDsmokeShow();
  promoShow();
  inputSecPlaceholder();
  menuMobileShow();
  menuMobileHeight();
  menuMobileSubMenuAction();
  searchHeaderAction();
  //footerFix();
  subsFooterResize();
  subsFooterAction();
  subsFooterTrigger();
  menuFooterResize();
  menuFooterAction();
  bannerAction()
  initNiceScroll();
  //searchDDView();

  /* catalog */
  productAppearance();

  /* item */
  accorderonAction();

  /* cart */
  inputFlatFilled();

  /* search */
  searchPageAction();
  searchWidth();

});

$(window).load(function() {});

$(window).resize(function() {
  /* header/footer */
  //footerFix();
  DDsmokeHeight();
  inputSecPlaceholder();
  headerClose();
  menuMobileHeight();
  subsFooterResize();
  menuFooterResize();
  bannerAction()

  /* catalog */
  productAppearance();

  /* item */

  /* search */
  searchPageAction();
  $.debounce(searchWidth(), 100);
});


$(window).scroll(function() {
  //upShow();
  fixHeader();
});

// fix header when scroll
function fixHeader() {
  var $window = $(window),
    $container = $('main');
  if ($window.width() > 768 && $('.cart__body').length == 0) {
    var scrollTop = $window.scrollTop(),
      $navbar = $('.header');
    if (scrollTop > 50) {
      $navbar.addClass('minimize');
    } else {
      $navbar.removeClass('minimize');
    }
  }
}

//OWL Sliders and menu classes
$(document).ready(function() {
  //Classes for mobile menu and footer
  $(".menu-mobile__inner li.menu-item").addClass("list__item");
  $(".footer_widget li.menu-item").addClass("list__item");
  $(".footer_widget ul.menu").addClass("list js-footer-menu-list");

  //sliders settings
  $("#main-slider").owlCarousel({
    items: 1,
    margin: 0,
    dots: true,
    nav: false,

  });


  $("#product-slider").owlCarousel({
    items: 1,
    margin: 0,
    dots: true,
    nav: true,
    navText: '',
    center: true,
  });


  $("#news-owl-carousel").owlCarousel({
    items: 5,
    margin: 0,
    dots: false,
    nav: true,
    navText: '',
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,

      },
      600: {
        items: 3,

      },
      1000: {
        items: 5,

      }
    }
  });

});
