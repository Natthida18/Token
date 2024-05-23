// accordion------------------------------------------
$(function(){
        $('.sub_menu').hide();
        $('.main_menu').click(function(){
                $('img').removeClass('rotate');
                $('ul.sub_menu').slideUp();
                if($('+ul.sub_menu',this).css('display') == 'none'){
                        $('img',this).addClass('rotate');
                        $('+ul.sub_menu',this).slideDown();
                }
        });
});



$(function(){
	$('.tips_filter_button').click(function(e){
		e.preventDefault();
alert("toggle");
		$('#tips_container').attr('data-filter', $(this).attr("data-href") );
		
	});
});




