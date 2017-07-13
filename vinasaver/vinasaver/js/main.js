$( document ).ready(function() {
	var page_name = $('#page-name').val();
	var category_name = $('#category_name').val();
	initTitleSubMenu(page_name,category_name);
	console.log(page_name);
});
function initTitleSubMenu(page_name,category_name) {
	if(page_name=="competitive-cost" || page_name=="training-process") {
		$(".main-title-bar-sub-menu-2-title").text($(".main-title-bar-sub-menu-2 .tab1").text());
	}	
	if(page_name=="scalable-resource-pool" || page_name=="what-can-employee-get") {
		$(".main-title-bar-sub-menu-2-title").text($(".main-title-bar-sub-menu-2 .tab2").text());
	}	
	if(page_name=="flexible-progress"  || page_name=="recruitment") {
		$(".main-title-bar-sub-menu-2-title").text($(".main-title-bar-sub-menu-2 .tab3").text());	
	}
	
	if(category_name=="Competitive Cost") {
		$(".clickable-tab").removeClass("active");
		$(".tab1").addClass("active");
	}
	if(category_name=="Scalable Resource Pool") {
		$(".clickable-tab").removeClass("active");
		$(".tab2").addClass("active");
		
	}
	if(category_name=="Flexible Progress") {
		$(".clickable-tab").removeClass("active");
		$(".tab3").addClass("active");
		
	}
}
