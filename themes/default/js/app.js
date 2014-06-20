$(function(){
    // Overlay Height
    $(".overlay").height($(document).height());

    //Select Box initialization
    $(".selectbox").select2();
	
    // User Icon Click Function
    $(".loggedin-drop").click(function(){
        $(this).parent().parent().toggleClass("vis-active");
        $(this).toggleClass("active");
        $(".overlay, .user-options").toggleClass('hide');
        $(".search").removeClass('vis-active');
    //$(".overlay").toggleClass('hide');
    });

    // Search Icon Click Function
    $("#searchIcon").click(function(){
        $(".user-loggedin-menu").removeClass("vis-active");
        $(this).parent().parent().addClass("vis-active");
        $(".user-options").addClass("hide");
        $(".overlay").toggleClass('hide');
        $(".search-text").val('').focus();
    });

    // Overlay Click Function
    $(".overlay").click(function(){
        $(".loggedin-drop").removeClass('active');
        $(".user-options, .overlay").addClass('hide');
    });

    // Top Five tab
    $(".tab li a").click(function(){
        var idx = $(this).data().tabIndex;
        $(".tab li a").removeClass("active");
        $(this).addClass("active");
        $(".tab-content").slideUp().eq(idx).slideDown();
    });

/*$(document).click(function (e) {
		 //alert($(e.target).attr("class"));
		 if($(e.target).hasClass("search-text")) {
			$(e.target).parents(".btn-group").addClass("open");
			e.stopPropagation();
		 }else{
			if(!$(e.target).parents(".btn-group").hasClass("open")) {
				$(".overlay").addClass("hide");
			}
		 }
	});*/

});