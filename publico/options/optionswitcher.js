if($(window).width()>750){$('body').each(function(){'use strict';var link=$(``);$('body').prepend(link);});$(window).on('load',function(){'use strict';var url='http://themes.iamabdus.com/options/data.json';var dataformat={format:'json'};function getContent(data){var htmlString='';var promo='';$.each(data,function(key,value){$.each(value.themes,function(k,val){htmlString+='<a class="dropdown-item" href="'+ val.link+'" target="_blank">'+ val.title+' <span class="badge badge-category">'+ val.category+'</span>';htmlString+='<div class="project-promo">';htmlString+='<img class="img-full" src="'+ val.thumbnail+'" alt="project">';htmlString+='</div>';htmlString+='</a>';});$.each(value.advertisement,function(k,v){promo+='<a href="'+ v.link+'">';promo+='<img class="card-img" src="'+ v.image+'" alt="'+ v.title+'">';promo+='</a>';});});$('#ajaxContent').append(htmlString);$('#adv').append(promo);}
$.getJSON(url,dataformat,getContent);});}
var panel=jQuery('.option-switcher');$('.option-switcher-btn').on('click',function(){'use strict';$(this).toggleClass('cross');jQuery('.option-switcher').toggleClass('option-visible');});jQuery('.color-options li').click(function(){'use strict';var color=jQuery(this).attr('data-color');setColor(color);jQuery('.color-options li').removeClass('theme-active');jQuery(this).addClass('theme-active');});var setColor=function(color){'use strict';jQuery('#option_color').attr('href','css/'+ color+'.css');}
var boxed=jQuery('.boxed-layout-btn');var wide=jQuery('.wide-layout-btn');if(jQuery('body').hasClass('boxed')){boxed.addClass('active-switcher-btn');jQuery('.bg-patern').css({'display':'block'});wide.removeClass('active-switcher-btn');}else{boxed.removeClass('active-switcher-btn');jQuery('.bg-patern').css({'display':'none'});wide.addClass('active-switcher-btn');}
jQuery('.boxed-layout-btn').click(function(){jQuery(this).addClass("active-switcher-btn");jQuery(".wide-layout-btn").removeClass("active-switcher-btn");jQuery("body").addClass("boxed default");jQuery(".bg-patern").css({"display":"block"});});jQuery('.wide-layout-btn').click(function(){jQuery(this).addClass("active-switcher-btn");jQuery(".boxed-layout-btn").removeClass("active-switcher-btn");jQuery("body").removeClass("boxed default");jQuery(".bg-patern").css({"display":"none"});});jQuery('.bg-patern li.pattern-default').click(function(){jQuery('.bg-patern li').removeClass("pattern-active");jQuery(".bg-patern li.pattern-default").addClass("pattern-active");jQuery("body").addClass("default").removeClass("pattern-01 pattern-02 pattern-03 pattern-04 pattern-05 pattern-06 pattern-07");});jQuery('.bg-patern li.pattern1').click(function(){jQuery('.bg-patern li').removeClass("pattern-active");jQuery(".bg-patern li.pattern1").addClass("pattern-active");jQuery("body").addClass("pattern-01").removeClass("default pattern-02 pattern-03 pattern-04 pattern-05 pattern-06 pattern-07");});jQuery('.bg-patern li.pattern2').click(function(){jQuery('.bg-patern li').removeClass("pattern-active");jQuery(".bg-patern li.pattern2").addClass("pattern-active");jQuery("body").addClass("pattern-02").removeClass("default pattern-01 pattern-03 pattern-04 pattern-05 pattern-06 pattern-07");});jQuery('.bg-patern li.pattern3').click(function(){jQuery('.bg-patern li').removeClass("pattern-active");jQuery(".bg-patern li.pattern3").addClass("pattern-active");jQuery("body").addClass("pattern-03").removeClass("default pattern-01 pattern-02 pattern-04 pattern-05 pattern-06 pattern-07");});jQuery('.bg-patern li.pattern4').click(function(){jQuery('.bg-patern li').removeClass("pattern-active");jQuery(".bg-patern li.pattern4").addClass("pattern-active");jQuery("body").addClass("pattern-04").removeClass("default pattern-01 pattern-02 pattern-03 pattern-05 pattern-06 pattern-07");});jQuery('.bg-patern li.pattern5').click(function(){jQuery('.bg-patern li').removeClass("pattern-active");jQuery(".bg-patern li.pattern5").addClass("pattern-active");jQuery("body").addClass("pattern-05").removeClass("default pattern-01 pattern-02 pattern-03 pattern-04 pattern-06 pattern-07");});jQuery('.bg-patern li.pattern6').click(function(){jQuery('.bg-patern li').removeClass("pattern-active");jQuery(".bg-patern li.pattern6").addClass("pattern-active");jQuery("body").addClass("pattern-06").removeClass("default pattern-01 pattern-02 pattern-03 pattern-04 pattern-05 pattern-07");});jQuery('.bg-patern li.pattern7').click(function(){jQuery('.bg-patern li').removeClass("pattern-active");jQuery(".bg-patern li.pattern7").addClass("pattern-active");jQuery("body").addClass("pattern-07").removeClass("default pattern-01 pattern-02 pattern-03 pattern-04 pattern-05 pattern-06");});var fixed=jQuery('.fixed-header');var stat=jQuery('.static-header');if(jQuery('body').hasClass('static')){fixed.removeClass('active-switcher-btn');stat.addClass('active-switcher-btn');}else{stat.removeClass('active-switcher-btn');fixed.addClass('active-switcher-btn ');}
jQuery('.fixed-header').click(function(){'use strict';jQuery(this).addClass('active-switcher-btn');jQuery('.static-header').removeClass('active-switcher-btn');jQuery('body').removeClass('static');});jQuery('.static-header').click(function(){'use strict';jQuery(this).addClass('active-switcher-btn');jQuery('.fixed-header').removeClass('active-switcher-btn');jQuery('body').addClass('static');});