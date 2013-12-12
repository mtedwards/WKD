function contentDiv() {
    $('article').removeClass('open');
    $('.added').remove();
    $('.content').removeClass('current').empty();
    var docWidth = +$('.the-cast').width();
    var articleWidth = +$('.the-cast article').width();
    var ratio = docWidth / articleWidth;
    ratio = Math.floor(ratio);
    if(ratio == 0) {
      ratio = 1;
    }
    ratio = ratio + 'n';
    if ($('.the-cast article').length){
      $('article:nth-of-type(' + ratio + ')').after('<div class="content added"></div>');
    }
  };
  
  if ($('.the-cast').length){
    contentDiv();
  
    $(window).resize(function() {
      contentDiv();
    });
  }
  
	
	$(".the-cast").on('click','article > a',function() {
		if ( $(this).closest('article').hasClass("open") ) {
			// check if current is already open
			$('article').removeClass('open');
		  $('.content').removeClass('current').empty();
		} else {
			$('article').removeClass('open');
		  $('.content').removeClass('current').empty();
			$(this).closest('article').addClass('open');
		  var content = $(this).next('.cast-content').html();
		  $(this).parent().nextAll('.content').first().html(content).addClass('current');
		}
		return false;
	}); 
  