	function wejit_time(el){
		var time_html = [
				'<div class="widget-header">',
				'	<strong>Current Time</strong>',
				'</div>',
				'<div class="widget-body">',
				'	<p class="numeric-widget">',
				new Date().toLocaleString(),
				'	</p>',
				'</div>',
			];
			$(el)
				.addClass('span3 well')
				.html(time_html.join(''));
	}

	function wejit_twitter_followers(el, id){
		var twitter_followers_html = [
				'<div class="widget-header">',
				'	<strong>Twitter Followers</strong>',
				'</div>',
				'<div class="widget-body">',
				'	<p class="numeric-widget"></p>',
				'	<p class="widget-subtext"></p>',
				'</div>',
			];
			$(el)
				.addClass('span2 well')
				.html(twitter_followers_html.join(''));
			$.ajax({
				'url':'/feeds/twitterfollowercount.php?id=' + id,
				'success' : function(data){
					$(id + ' .numeric-widget').html(data.number);
					$(id + ' .numeric-subtext').html(data.sub);
				}
			});
	}