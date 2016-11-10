$(document).ready(function() {
    $(window).scroll(function() {
        if($(window).scrollTop()>10)
		{
			$(".navbar-fixed-top").addClass('bg');
		}
		else {
				$(".navbar-fixed-top").removeClass('bg');
		}
    });
function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('glyphicon-plus-sign glyphicon-minus-sign');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);
});

function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}