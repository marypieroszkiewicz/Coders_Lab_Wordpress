$(function(){

	function showFullDescribe() {
		$('.more-text').on('click', function(){
			$(this)
			.siblings('.main-text')
			.children('span')
			.fadeToggle();
		});
	}

	function goUp() {
		$(".hygge-up").on('click', function(e){
			e.preventDefault();
			var sectionID = $(this).attr("href");
			$("html,body").animate({
				scrollTop: $(sectionID).offset().top
			}, 1000)
		});
	}

	showFullDescribe();
	goUp();
})