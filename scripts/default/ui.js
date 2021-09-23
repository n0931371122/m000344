'use strict';
var windowW,windowH,mobileMode;
$(function (){
    $(window).resize(function(){
        resize();
    }).trigger('resize');
     mobileMode=windowW<1199?true:false;
    $(".jqimgFill").imgLiquid();
    /* ==========================================================================
		[layout]
 	==========================================================================*/
    if(!mobileMode){
        $("header .menu-item.dropdown").hover(function(){
            $(this).find(".dropdown-menu").stop().slideDown().addClass("active");
            $("header").addClass("openMode");
        },function(){
            $(this).find(".dropdown-menu").stop().slideUp().removeClass("active");
            $("header").removeClass("openMode");
        });
    }
    else{
        $("header .menu-item.mobileDropdown").click(function(){
            $(this).siblings().removeClass("active").find(".dropdown-menu").slideUp();
            $(this).toggleClass("active").find(".dropdown-menu").stop().slideToggle();
            $("header").toggleClass("openMode");     
        });
        $("header .tech-toggle").click(function(){
            $(this).parents(".menu-item").siblings().removeClass("active").find(".dropdown-menu").slideUp();
            $(this).parents(".menu-item").toggleClass("active").find(".dropdown-menu").stop().slideToggle();
            $("header").toggleClass("openMode");     
        });
    }

    $("header .menu a").click(function(e){
        $("html").removeClass("menuOpen");
        $("header .menu-link").removeClass("active").find(".dropdown-menu").slideUp();
    });
    $(window).scroll(function () {  
        $(window).scrollTop()>0? $("header").addClass("scrollMode"):$("header").removeClass("scrollMode");
        $(window).scrollTop() > 400?$(".goTop").addClass("show"): $(".goTop").removeClass("show");
    });

    $("#new").length==0? $("header .new-back").addClass("d-xl-none"):"";
    $("#tech").length==0? $("header .tech-back").addClass("d-xl-none"):"";
    /* ==========================================================================
		[page]
     ==========================================================================*/
    var dropdownOpenList=[
        {
            page:"news",
            index:1
        },
        {
            page:"new",
            index:1
        },   
        {
            page:"tech",
            index:2
        }, 
    ]
    dropdownOpenList.forEach(function(item){
        if($("#" + item.page).length>0){
            $(window).scroll(function () { 
                if($(window).scrollTop()>0){
                    $(".menu-item").eq(item.index).find(".dropdown-menu").stop().slideDown().addClass("active");
                }
                else{
                    $(".menu-item").eq(item.index).find(".dropdown-menu").stop().slideUp().removeClass("active");
                }
            }); 
        }
    });
    //tech

    if(windowW<768){
        $(".nav-link").click(function(){
            $(".nav-toggle span").text($(this).find(".tag").text());
            $('.nav-tabs').slideUp();
        });
    }
    /* ==========================================================================
		[common]
     ==========================================================================*/
    windowW<1200?$("[data-aos-delay]").removeAttr("data-aos-delay"):"";
    aosInit();
    /* ==========================================================================
		[resize]
     ==========================================================================*/
    function resize(){
        windowW=$(window).innerWidth();
        if(windowW<1200){  
            if(!$(".about-section").hasClass("mode1200")){
                $(".about-section").addClass("mode1200");
                $(".about-section .cut-slot").append($(".about-section .title").detach());         
                for(let i=0;i<3;i++){
                    $(".about-section .cut-slot").append($(".about-section .content div").eq(0).detach());
                }
            }
        }
        else{
            $(".about-section").removeClass("mode1200");
            $(".about-section .content-block").prepend($(".about-section .title").detach());
            $(".about-section .content").prepend($(".about-section .cut-slot div").detach());
        }
    }
})
function aosInit(){
    AOS.init({
        duration: 500,
        offset: 10,
        mirror: true,
    });
}


