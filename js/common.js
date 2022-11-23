// 画面幅調整
$( window ).on( 'load', function() {
    var w = $( window ).width();
    if( w <= 1000 ) {
        $('a[href^="#"]').click(function(){
            var adjust = 70,
                speed = 500,
                href= $(this).attr("href"),
                target = $(href == "#" || href == "" ? 'html' : href),
                position = target.offset().top - adjust;
            $('body,html').animate({scrollTop:position}, speed, 'swing');
            return false;
        });
    } else {
        $('a[href^="#"]').click(function(){
            var adjust = 90,
                speed = 500,
                href= $(this).attr("href"),
                target = $(href == "#" || href == "" ? 'html' : href),
                position = target.offset().top - adjust;
            $('body,html').animate({scrollTop:position}, speed, 'swing');
            return false;
        });
    }

    if( w <= 1000 ) {
        $('.p-header__nav--infoHead').on('click', function() {
            $(this).next().slideToggle();
            $(this).parent('li').toggleClass('js-active');
            return false;
        });
    }
});
$(function(){
	const hash = location.hash;
	if(hash){
		$("html, body").stop().scrollTop(0);
		setTimeout(function(){
			const target = $(hash),
			position = target.offset().top - 90;
			$("html, body").animate({scrollTop:position}, 500, "swing");
		});
	}
});

// ハンバーガーメニュー
$(function(){
    $('.js-hamburger-btn').on('click', function() {
        $('.js-hamburger').toggleClass('js-active');
        return false;
    });

    $('.js-hamburger-remove').on('click', function() {
        $('.js-hamburger').removeClass('js-active');
    });
});

// faq
$(function(){
    $('.p-priceFaq__question').on('click', function() {
        $(this).next().slideToggle();
        $(this).parent('li').toggleClass('js-active');
        return false;
    });
});

// スライダー
$(function(){
    $('.js-slide01-thumb').on('click', function() {
        $('.js-slide').removeClass('js-active');
        $('.js-slide-thumb').removeClass('js-active');
        $('.js-slide01').addClass('js-active');
        $('.js-slide01-thumb').addClass('js-active');
    });
    $('.js-slide02-thumb').on('click', function() {
        $('.js-slide').removeClass('js-active');
        $('.js-slide-thumb').removeClass('js-active');
        $('.js-slide02').addClass('js-active');
        $('.js-slide02-thumb').addClass('js-active');
    });
    $('.js-slide03-thumb').on('click', function() {
        $('.js-slide').removeClass('js-active');
        $('.js-slide-thumb').removeClass('js-active');
        $('.js-slide03').addClass('js-active');
        $('.js-slide03-thumb').addClass('js-active');
    });
    $('.js-slide04-thumb').on('click', function() {
        $('.js-slide').removeClass('js-active');
        $('.js-slide-thumb').removeClass('js-active');
        $('.js-slide04').addClass('js-active');
        $('.js-slide04-thumb').addClass('js-active');
    });
});

$(function(){
    slideCount = 0;
    timer = setInterval(function(){
        slideCount++;
        if (slideCount % 3 == 1) {
            $('.p-topNews__link--inner').removeClass('news-slide01');
            $('.p-topNews__link--inner').removeClass('news-slide03');
            $('.p-topNews__link--inner').addClass('news-slide02');
        } else if (slideCount % 3 == 2) {
            $('.p-topNews__link--inner').removeClass('news-slide02');
            $('.p-topNews__link--inner').removeClass('news-slide01');
            $('.p-topNews__link--inner').addClass('news-slide03');
        } else {
            $('.p-topNews__link--inner').removeClass('news-slide02');
            $('.p-topNews__link--inner').removeClass('news-slide03');
            $('.p-topNews__link--inner').addClass('news-slide01');
        }
        console.log(slideCount)
    }, 20000);
});
