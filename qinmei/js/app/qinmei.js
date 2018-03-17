
$(function(){

		var i = 0;
		var pic = $(".main-picture ul li");
		var size = pic.size();
		var slideWide = $(".main-pic-container").width();
    	var img = $(".main-picture img");
		img.css("width",slideWide);
  		var clone = pic.first().clone();
		
		$(".main-picture ul").append(clone);
		for(var j=0;j<size;j++){
			$(".main-list ul").append("<li></li>");
		}
		$(".main-list ul li").first().addClass("active");

		
		$(window).resize(function() {
		  $(".main-picture img").css("width",slideWide);
		});

		function move(){
			if(i == size+1){
				$(".main-picture").css({left:0});
				i = 1;
			}else if(i == -1){
				$(".main-picture").css({left:- size*slideWide});
				i  = size-1;
			};
			$(".main-picture").stop().animate({left:-i*slideWide},slideWide);
			if( i == size){
				index = 0;
			}else{
				index = i;
			}
			$(".main-list ul li").eq(index).addClass("active").siblings().removeClass("active");

		}
          $(".main-picture").swipe({
            allowPageScroll: 'vertical',
            swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
             if(direction == "left"){
                i++;
                move(100);
             }else if (direction =="right"){
                i--;
                move();
             }
            }
        });

		$(".main-list ul li").hover(function(){
			$(this).addClass("active").siblings().removeClass("active");
			var index = $(this).index();
			i = index;
			move();
		});

		var t=setInterval(function(){
			i++;
			move()
			},3000);

		$(".main-pic-container").hover(function(){
			clearInterval(t);
		},function(){
			t=setInterval(function(){
			i++;
			move()
			},3000)
		});


});
  $(function(){

		var playlist = $(".index-hot-play");
		var playPage = $(".index-play-page .row");
		playlist.click(function(){
			playlist.removeClass("active");
			$(this).addClass("active");
			num = $(this).parents().index();
			playPage.removeClass("active");
			playPage.eq(num).addClass("active");
		});

});
$(function(){
		var navList = $(".nav-list li");
  		navList.eq(0).addClass("first");
		var navListhover = window.location.href;
  		for(var i=0;i<navList.length;i++){
          var m = i;
          if(navList.eq(m).children().attr("href") == navListhover){
            navList.eq(m).children().addClass("active");
          }
        }
});
$(function(){
		var width = window.screen.width;
		if(width < 767){
          var num = sessionStorage.count;
          if(num == null){
		  $(".phone-pic").show().delay(2000).fadeOut();
          $(".phone-logo").slideDown(600);
          sessionStorage.count = "1";
          }
        }
	});
$(function(){
  var button = $(".index-button a");
  button.hover(function(){
         var color = $(this).children().html();
         $(this).css("background-color",color);
    	$(this).css("color","white");

   },function(){
    		var color = $(this).children().html();
          $(this).css("background-color","");
    		$(this).css("color",color);
        })
});
$(function(){
  var length = $(".page-cat-num .col-md-2");
  if(length.size() < 3){
    length.removeClass("col-sm-2 col-xs-2").addClass("col-sm-3 col-xs-6");
  }else if (length.size() < 5){
    length.removeClass("col-sm-2 col-xs-2").addClass("col-sm-3 col-xs-3");
  }else if(length.size() < 7){
    length.removeClass("col-sm-2 col-xs-2").addClass("col-sm-2 col-xs-2");
  }else{
    $(".page-cat-num").addClass("page-cat-num-scroll");
    var width = length.size() * 70 + 'px';
    $(".page-cat-num-con").css("width",width);
    length.removeClass("col-sm-2 col-xs-2 col-md-2").addClass("page-cat-min-width");
  };
  
  var indexhot = $(".index-hot-js-width .col-md-3");
  if(indexhot.size() > 4){
	indexhot.removeClass("col-md-3 col-sm-3").addClass("index-hot-js-width-list");
    var indexwidth = indexhot.width() - 10; 
    var precent = indexwidth/indexhot.size() + "px";
    $(".index-hot-js-width-list").css({"width":precent,"display":"inline-block","float":"left"});
  };
	var playlist = $(".index-hot-play");
	var playPage = $(".index-play-page .row");
    playlist.eq(0).addClass("active");
  	playPage.eq(0).addClass("active");
	playlist.click(function(){
	playlist.removeClass("active");
	$(this).addClass("active");
	num = $(this).parents().index();
	playPage.removeClass("active");
	playPage.eq(num).addClass("active");
		});
});

$(function(){
		var t;
		var options = {
		    controls: 'control',
		    preload: 'auto',
		    fluid: 'true',
		    controlBar: {
             	children: [
		            {
		                name: 'playToggle'
		            },
		            {
		                name: 'progressControl'
		            },
		            {
		                name: 'currentTimeDisplay'
		            },
		            {
		                name: 'timeDivider',
		            },
		            {
		                name: 'durationDisplay',
		            },
		            {
		                name: 'RemainingTimeDisplay',
		            },
		            {
		                name: 'volumePanel',
		            },
		            {
		                name: 'fullscreenToggle'
		            },
		        ]
		    }
		};
		var player = videojs('video1', options);
  		player.volume(0.5);
		videojs('video1').ready(function() {
          	
		  	player.on("pause", function(){
			    $(".vjs-big-play-button").show();
			});
		  	player.on("play", function(){
			    $(".vjs-big-play-button").hide();
			});
		  	player.on("volumechange", function(){
		  		var volumeNum = player.volume()*100 + "%";
			    $(".volumn-show").css("width",volumeNum);
			    $(".smallicon-volume").show();
			    clearTimeout(t);
			    t = setTimeout(function(){
			    	$(".smallicon-volume").hide();
			    },1000);
			});
          
          	player.on("fullscreenchange", function(){
            	var videoset = $(".vjs-fullscreen");
            	var videopic = $(".vjs-tech");
            	var videobar = $(".vjs-control-bar");
			  		if(player.isFullscreen()){
		                videoset.addClass("video-rotate");
		                videopic.addClass("video-pic-setting");
		                videobar.addClass("video-bar-setting");
	                }else{
		                videoset.removeClass("video-rotate");
		                videopic.removeClass("video-pic-setting");
		                videobar.removeClass("video-bar-setting");
	                };
			});
          
          
		  	this.hotkeys({
			    volumeStep: 0.1,
			    seekStep: 30,
			    enableVolumeScroll:false,
			    enableModifiersForNumbers: false
		    });
		    

      	});

		$("video").swipe({
		  	allowPageScroll: 'vertical',
		    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
		      if(player.isFullscreen()&&distance >=30){
		     if(direction == "left"){
		     	var prev = player.currentTime() - 30;
		       player.currentTime(prev);
		     }else if (direction =="right"){
		     	var next = player.currentTime() + 30;
		       player.currentTime(next);
		     }else if(direction == "up"){
		     	var high = player.volume() + 0.1;
		       player.volume(high);
		     }else if(direction =="down"){
		     	var low = player.volume() - 0.1;
		       player.volume(low);
		     }
		      }
		    }
		});
		var pageLink =  window.location.href;
		var linkarr = pageLink.split("S");
		var linkarr2 = linkarr[0];
		$(".page-link").attr("href",linkarr2);
		$('#video1').bind('contextmenu',function() { return false; });
	});