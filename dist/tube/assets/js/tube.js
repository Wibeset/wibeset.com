var Video = {

	_id: null,
	_index: 1,
	_player: null,

	setCurrent: function(id, index) {
		this._id = id;
		this._index = index;
	},

	play: function(id, index) {

		this.setCurrent(id, index);

		this.close();
		$('#video').show();

		this._player = new YT.Player('player', {
	      	height: ($(window).height() - 120),
	      	width: ($(window).width() - 120),
	      	videoId: id,
	      	events: {
	      		'onReady': function(event) {
	      			event.target.playVideo();
	      		},
	         	'onStateChange': function(event) {
	         		if (event.data === 0) { 
	         			Video.playNext();
	         		}
	         	}
	     	}
	    });

	    $('#video h2').html($('#video-'+index).data('original-title'));
	},

	playNext: function() {
		if ($('#video-'+(this._index + 1)).length > 0) {
			var nextVideo = $('#video-'+(this._index + 1));
			this.play(nextVideo.data('videoid'), nextVideo.data('index'));
		}
	},

	playPrevious: function() {
		if ($('#video-'+(this._index - 1)).length > 0) {
			var previousVideo = $('#video-'+(this._index - 1));
			this.play(previousVideo.data('videoid'), previousVideo.data('index'));
		}
	},

	close: function() {
		//this._player.stopVideo();
		$('#video').hide();
		$('#player').remove();
		$('#videoplayer').append('<div id="player"></div>');
	}
};

$(document).ready(function() {

	$('#search form').on('submit', function() {

		var query = encodeURIComponent($('#search form input').val());
		var url = 'http://gdata.youtube.com/feeds/api/videos?q='+query+'&max-results=40&v=2&alt=jsonc';

		$('#search .form-search').hide();
		$('#search img').show();

		$.getJSON(url, function(response) {

			$('#videos').html('');

			var html = '';
        	
        	$.each(response.data.items, function(index, video) {

        		html += '<div class="span2">'+
                	'<a id="video-'+index+'" data-videoid="'+video.id+'" data-index="'+index+'" href="#" data-original-title="'+video.title+'"><img src="'+video.thumbnail.hqDefault+'" width="100%" alt=""></a>'+
	            	'</div>';

	            if ((index + 1) % 6 == 0) {
	            	$('#videos').append('<div class="row-fluid">'+html+'</div>');
	            	html = '';
	            }
        	});

        	$('#search img').hide();

        	$('#videos').show();
        	$('#videos a').tooltip({
        		placement: function(context, source) {
        			if ($(source).position().top < 100) {
        				return 'bottom';
        			} else {
        				return 'top';
        			}
        		}
        	});
		});

		return false;
	});

	$('#videos').on('click', 'a', function() {
		Video.play($(this).data('videoid'), $(this).data('index'));
		return false;
	});

	$(document).keyup(function(e) {

  		if (e.keyCode == 27) { 
  			Video.close();
  		} else if (e.keyCode == 39) { 
  			Video.playNext();
  		} else if (e.keyCode == 37) { 
  			Video.playPrevious();
  		}
	});
});