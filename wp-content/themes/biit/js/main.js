function clickBtn(){
	var btn = document.getElementsByClassName("menu-m__toggle")[0];
	var block = document.getElementsByClassName("menu-m")[0];
	block.classList.toggle("b-nav");
	btn.classList.toggle("-active");
}

var item = document.getElementsByClassName("services__item")[0];
var parent = document.getElementsByClassName("b-services")[0];

$( document ).ready(function() {
	if(screen.width <= 660){
	$(".directions tr td:first-child").click(function(){
		   $("tr td:not(:first-child)").slideUp();
		   if($(this).parent().find("td:not(:first-child)").css("display") == "block"){
	       $(this).parent().find("td:not(:first-child)").slideUp();
	     }
	    else{
	      $(this).parent().find("td:not(:first-child)").slideDown();
	    } 
	});
	$('.menu-item-has-children > a').on("click",function(){
		console.log($('.sub-menu').css("display"));
		if($('.sub-menu').css("display") == "block"){
			$('.sub-menu').slideUp();
		}
		else{
			$('.sub-menu').slideDown();
		}
		return false;
	});
};  
	console.log("create by Ilyasov A.I.");
	$('html').click(function(e){
		if(screen.width >= 660){
		    if (e.target.className == 'btn-preview' || $(e.target).parents('btn-preview').length > 0 || e.target.className == 'search-line') {
		        if($(".search-line").css("display") == "none"){e.preventDefault()}
		        $(".search-line").show();
		        $(".search-line").animate({width: "500px", marginRigth: "500px", opacity: '1.0'}, 700);
		    } else {
			    $.when($(".search-line").animate({width: "", marginRigth: "", opacity:''}, 700)).then(function(){
			      $(".search-line").hide();
			    });
		    };
		}
	});

	$(".show__all").on("click", function(){
		//var parentClassName = "."+$(this).parent().prop('className');
		var parentClassName = $(this).parent().prop('className') == 'b-graduate' ? '.gallery__container' : "."+$(this).parent().prop('className');
		var elementClassName = $(this).prev().prop('className') == 'container' ? '.gallery__item' : "."+$(this).prev().prop('className');
		var elemntCount = elementClassName == '.news__item' ? elemntCount = $(elementClassName).length : $(elementClassName).length-1;

		if($(parentClassName).find(elementClassName+":nth-child(n+"+(elemntCount)+")").css("display") == "none"){
			$(parentClassName).find(elementClassName+":nth-child(n+"+(elemntCount)+")").slideDown();
			$(this).text("Скрыть");
		}
		else{
			$(parentClassName).find(elementClassName+":nth-child(n+"+(elemntCount)+")").slideUp();
			$(this).text("Показать еще");
		}
		return false;

	});
});

$('h2.table__year').on("click", function(){
	console.log($(this).next().css('display'));
	if($(this).next().css('display') == "none"){
		$('.publication__table table').slideUp()
		$(this).next().slideDown();
	}
	else{
		$(this).next().slideUp()
	}
});
// history-page-slider
var swiper = new Swiper('.swiper-container__history-page', {
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
