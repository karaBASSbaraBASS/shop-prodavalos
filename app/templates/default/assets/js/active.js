
$(document).ready(function(){
	$('ul.nav a').each(function () {
	if (this.href == location.href) $(this).parent().addClass('active');
	});
});
