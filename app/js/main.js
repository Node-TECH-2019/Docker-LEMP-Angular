/******************************
fixHeader
******************************/
$(window).on("scroll", function () {
  //scrollTop縺ｮ蛟､縺ｮ蛻�せ繧ｯ繝ｭ繝ｼ繝ｫ縺励◆繧峨リ繝薙↓.fixed縺瑚ｿｽ蜉�縺輔ｌ繧九�
  if ($(this).scrollTop() > 120) {
    $("header").addClass('fixed');
  } else {
    $("header").removeClass('fixed');
  }
});


/******************************
slideDownNavi2
******************************/
$(function () {
  $(".nav_slidebtm").hover(
    function () {
      $(this).children('.nav_dropdown').stop().addClass("nav_open");
      $(this).addClass("active2");
      $("header").addClass("nav_dropdown_header");
    },
    function () {
      $(this).children('.nav_dropdown').stop().removeClass("nav_open");
      $(this).removeClass("active2");
      $("header").removeClass("nav_dropdown_header");
    });
});





/******************************
careers_require
******************************/

$(function () {

  $(".careers_require_list_title-designer").on("click", function () {
    $(".careers_require_list_box-designer").stop().slideToggle();
    $(this).stop().toggleClass("careers_require_list_title_active");
    $(this).parent('.careers_require_list').stop().toggleClass("careers_require_list_active");
  });
  $(".careers_require_list_title-sales").on("click", function () {
    $(".careers_require_list_box-sales").stop().slideToggle();
    $(this).stop().toggleClass("careers_require_list_title_active");
    $(this).parent('.careers_require_list').stop().toggleClass("careers_require_list_active");
  });

});



/******************************
kv
******************************/

$(function () {
  $('.top_information').css({ 'opacity': '1' });
  $('.kv_slide_inner').css({ 'opacity': '1' });
  $('.kv_img').addClass('kv_show');
  $('.factory_sec1_map_inner').addClass('kv_show');
  $('.factory_sec1_img').delay(200).queue(function () {
    $(this).addClass('kv_show').dequeue();
  });
  $('.factory_sec1 .bg_text_en-01').delay(400).queue(function () {
    $(this).addClass('kv_inner_en_fadeInLeft').dequeue();
  });
  $('#kv-career_inner_title_l').delay(0).addClass('kv_inner_title_l_fadeInUp');
  $('#kv-career_inner_title_s').delay(80).queue(function () {
    $(this).addClass('kv_inner_title_l_fadeInUp').dequeue();
  });
  $('#kv_inner_title_l_animate').addClass('kv_inner_title_l_fadeInUp');
  $('#kv_inner_title_s_animate').delay(40).queue(function () {
    $(this).addClass('kv_inner_title_l_fadeInUp').dequeue();
  });
  $('.box_animate').delay(100).queue(function () {
    $(this).addClass('box_animate_fadeInUp').dequeue();
  });


  $('.kv_inner_en').delay(100).queue(function () {
    $(this).addClass('kv_inner_en_fadeInLeft').dequeue();
  });

  $('.kv_inner_en-career').delay(200).queue(function () {
    $(this).addClass('kv_inner_en_fadeInLeft').dequeue();
  });
  $('.career_intro_bg').delay(350).queue(function () {
    $(this).addClass('career_intro_bg_show').dequeue();
  });
  $('.kv_inner_catch_b_2').delay(1200).queue(function () {
    $(this).addClass('fadeInRight--kv').dequeue();
  });
  $('.kv_inner_catch_b_3').delay(1200).queue(function () {
    $(this).addClass('fadeInRight--kv').dequeue();
  });
  //  $('.kv_inner_catch_s').delay(1200).queue(function() {
  //  	$(this).addClass('fadeInLeft--kv').dequeue();
  //	});


});

/******************************
sp_navi_menu
******************************/

$(function () {
  $('.sp_navi dt a').on('click', function () {
    $('.sp_navi dd').toggleClass('active');
    $(this).toggleClass('active');
    $('.sp_navi dl').toggleClass('active');
  });
  $('.sp_link li a').each(function () {
    var $href = $(this).attr('href');
    if (location.href.match($href)) {
      $(this).addClass('active');
    } else {
      $(this).removeClass('active');
    }
  });
});



/******************************
fadein
******************************/

$(window).on('scroll', function () {

  var elem = $('.title-01');
  var isAnimate = 'isAnimate';

  elem.each(function () {

    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if (scrollPos > elemOffset - wh + (wh / 5)) {
      $(this).addClass(isAnimate);
    }
  });

});








/******************************
company
******************************/
$(window).on("scroll", function () {
  //scrollTop縺ｮ蛟､縺ｮ蛻�せ繧ｯ繝ｭ繝ｼ繝ｫ縺励◆繧峨リ繝薙↓.fixed縺瑚ｿｽ蜉�縺輔ｌ繧九�
  if ($(this).scrollTop() > 520) {
    $(".company_anker_sec1 a").addClass('active');
  } else {
    $(".company_anker_sec1 a").addClass('active');
  }
  if ($(this).scrollTop() > 2020) {
    $(".company_anker_sec2 a").addClass('active');
    $(".company_anker_sec1 a").removeClass('active');
  } else {
    $(".company_anker_sec2 a").removeClass('active');
  }
  if ($(this).scrollTop() > 3520) {
    $(".company_anker_sec3 a").addClass('active');
    $(".company_anker_sec2 a").removeClass('active');
  } else {
    $(".company_anker_sec3 a").removeClass('active');
  }
});







$(function () {
  $('#viet_link').hover(function () {
    $('#viet').addClass('partner_active');
  }, function () {
    $('#viet').removeClass('partner_active');
  });

  // 繝槭え繧ｹ蠎ｧ讓吶ｒ蜷ｹ縺榊�縺励↓繧ｻ繝�ヨ
  $('#viet_link').mousemove(function (e) {
    // 蜷ｹ縺榊�縺励↓蜷医ｏ縺帛ｾｮ隱ｿ謨ｴ
    $('#viet').css({
      'top': e.offsetY - 65,
      'left': e.offsetX + 50
    });
  });
});
$(function () {
  $('#shen_link').hover(function () {
    $('#shen').addClass('partner_active');
  }, function () {
    $('#shen').removeClass('partner_active');
  });

  // 繝槭え繧ｹ蠎ｧ讓吶ｒ蜷ｹ縺榊�縺励↓繧ｻ繝�ヨ
  $('#shen_link').mousemove(function (e) {
    // 蜷ｹ縺榊�縺励↓蜷医ｏ縺帛ｾｮ隱ｿ謨ｴ
    $('#shen').css({
      'top': e.offsetY - 65,
      'left': e.offsetX + 50
    });
  });
});

$(function () {
  $('#hui_link').hover(function () {
    $('#hui').addClass('partner_active');
  }, function () {
    $('#hui').removeClass('partner_active');
  });

  // 繝槭え繧ｹ蠎ｧ讓吶ｒ蜷ｹ縺榊�縺励↓繧ｻ繝�ヨ
  $('#hui_link').mousemove(function (e) {
    // 蜷ｹ縺榊�縺励↓蜷医ｏ縺帛ｾｮ隱ｿ謨ｴ
    $('#hui').css({
      'top': e.offsetY - 65,
      'left': e.offsetX + 50
    });
  });
});

$(function () {
  $('#cambodia_link').hover(function () {
    $('#cambodia').addClass('partner_active');
  }, function () {
    $('#cambodia').removeClass('partner_active');
  });

  // 繝槭え繧ｹ蠎ｧ讓吶ｒ蜷ｹ縺榊�縺励↓繧ｻ繝�ヨ
  $('#cambodia_link').mousemove(function (e) {
    // 蜷ｹ縺榊�縺励↓蜷医ｏ縺帛ｾｮ隱ｿ謨ｴ
    $('#cambodia').css({
      'top': e.offsetY - 65,
      'left': e.offsetX + 50
    });
  });
});










$(function () {
  $('.service-process_area_box').hover(function () {
    $(this).children('.service-process_list_box').addClass('service-process_list_box_active');
  }, function () {
    $(this).children('.service-process_list_box').removeClass('service-process_list_box_active');
  });

  // 繝槭え繧ｹ蠎ｧ讓吶ｒ蜷ｹ縺榊�縺励↓繧ｻ繝�ヨ
  $('.service-process_area_box-left').mousemove(function (e) {
    // 蜷ｹ縺榊�縺励↓蜷医ｏ縺帛ｾｮ隱ｿ謨ｴ
    $(this).children('.service-process_list_box').css({
      'top': e.offsetY + 40,
      'left': e.offsetX - 200
    });
  });

  // 繝槭え繧ｹ蠎ｧ讓吶ｒ蜷ｹ縺榊�縺励↓繧ｻ繝�ヨ
  $('.service-process_area_box-right').mousemove(function (e) {
    // 蜷ｹ縺榊�縺励↓蜷医ｏ縺帛ｾｮ隱ｿ謨ｴ
    $(this).children('.service-process_list_box').css({
      'top': e.offsetY + 40,
      'left': e.offsetX - 290
    });
  });

});


jQuery(function($){

  function show_error(message, this$) {
    var text = this$.parent().find('label').text() + message;
    this$.parent().append("<p class='error'>" + text + "</p>")
  }

  $("form#form").submit(function(){
    //エラー表示の初期化
    $("p.error").remove();
    $("div").removeClass("error");
    var text = "";
    $("#errorDispaly").remove();

    //メールアドレスの検証
    var email =  $.trim($("#email").val());
    if(email && !(/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/gi).test(email)){
      $("#email").after("<p class='error'>メールアドレスの形式が異なります</p>")
    }
    //確認用メールアドレスの検証
    var email_check =  $.trim($("#email_check").val());
    if(email_check && email_check != $.trim($("input[name="+$("#email_check").attr("name").replace(/^(.+)_check$/, "$1")+"]").val())){
      show_error("が一致しません", $("#email_check"));
    }
    //電話番号の検証
    var tel = $.trim($("#tel").val());
    if(tel && !(/^\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}$/gi).test(tel)){
      $("#tel").after("<p class='error'>電話番号の形式が異なります（半角英数字でご入力ください）</p>")
    }

    //1行テキスト入力フォームとテキストエリアの検証
    $(":text,textarea").filter(".validate").each(function(){

      $(this).filter(".required").each(function(){
        if($(this).val()==""){
          show_error(" は必須項目です", $(this));
        }
      })

      //文字数の検証
      $(this).filter(".max30").each(function(){
        if($(this).val().length > 30){
          show_error(" は30文字以内です", $(this));
        }
      })
      $(this).filter(".max50").each(function(){
        if($(this).val().length > 50){
          show_error(" は50文字以内です", $(this));
        }
      })
      //文字数の検証
      $(this).filter(".max100").each(function(){
        if($(this).val().length > 100){
          show_error(" は100文字以内です", $(this));
        }
      })
      //文字数の検証
      $(this).filter(".max1000").each(function(){
        if($(this).val().length > 1000){
          show_error(" は1000文字以内でお願いします", $(this));
        }
      })
    })
    //error クラスの追加の処理
    if($("p.error").length > 0){
      $("p.error").parent().addClass("error");
      $('html,body').animate({ scrollTop: $("p.error:first").offset().top-180 }, 'slow');
      return false;
    }
  }) //ここまでが submit イベントを使った検証
  //テキストエリアに入力された文字数を表示
  $("textarea").on('keydown keyup change', function() {
    var count = $(this).val().length;
    $("#count").text(count);
    if(count > 1000) {
      $("#count").css({color: 'red', fontWeight: 'bold'});
    }else{
      $("#count").css({color: '#333', fontWeight: 'normal'});
    }
  });
})

function confirm_test() {
  var contact_types = "";
  var opts = this.contact_type.options;
  for (var i = 0; i < opts.length; i++) {
    if (opts[i].selected) {
      contact_types+=opts[i].value + ", ";
    }
  }
  contact_types=contact_types.slice(0, -2) ;
  var select = confirm("以下の内容で問い合わせますか？\n会社名／団体名：" + this.companyname.value + "\nお名前：" + this.your_name.value + "（" + this.furigana.value + "）\nEmail：" + this.email.value + "\nお電話番号：" + this.tel.value + "\n件名：" + this.subject.value + "\nお問い合わせジャンル ：" + contact_types + "\n\n＜お問い合わせ内容＞\n" + this.comment.value);
    return select;
}
