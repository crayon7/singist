$(function(){

	$("a.btndelete").click(function(){
		var r=confirm("Are you sure delete!");
		if(r){
			return true;
		}else{
			return false;
		}
	});

  var url = window.location.pathname, 
    urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
    // now grab every link from the navigation
    $('.nav a').each(function(){
    // and test its normalized href against the url pathname regexp
    if(urlRegExp.test(this.href.replace(/\/$/,''))){
      $(this).addClass('active');
    }
  });

  function h(e) {
    $(e).css({'height':'auto','overflow-y':'hidden'}).height(e.scrollHeight);
  }
  $('textarea.reply-feedback').each(function () {
    h(this);
  }).on('input', function () {
    h(this);
  });

  var offset = 200;
  var duration = 300;
  $(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
      $('.back-to-top').fadeIn(duration);
    } else {
      $('.back-to-top').fadeOut(duration);
    }
  });
   
  $('.back-to-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, duration);
    return false;
  })

});
