// const titre = document.querySelector('h1');
// const text = document.querySelector('p');
// const btn = document.querySelector('button');
// const image = document.querySelector('.image');
// const allItems = document.querySelector('nav-item');

// const TL1 = new TimelineMax({paused: true});
// TL1
// .from(titre, 1, {y: -100, opacity: 0})
// .from(text, 1, {opacity: 0}, '-=0.4')
// .from(btn, 1, {opacity: 0}, '-=0.5')
// .staggerFrom(image, 1, {y: 100, opacity: 0}, 0.2, '-=0.5')
// .staggerFrom(allItems, 1, {y: -150, opacity: 0}, 0.2, '-=1')

// TL1.play();


var audio = null;

$( ".t2s_section h2" ).on("click", ".icon", function(){
	
	var el = $(this);
	
	if( audio != null ){
		audio.pause();
	}
	
	if( $(el).hasClass("pause") ){
		audio.pause();
		$(el).removeClass("loading pause playing").addClass("play");
	}else if( $(el).hasClass("play") ){
		audio.play();
		$(el).removeClass("loading play playing").addClass("pause");	
	}else{			

	   var el = $(this);		
	   var text = $(this).closest(".t2s_section").text();
		
	   jQuery.ajax({
	      url: "audio.php",
	      async: true,
	      method: "POST", 
	      data:{
	        'action': 't2s',
	        'text': text
            },
	      beforeSend:function(){
		     $(el).removeClass("pause play").addClass("loading");
		  },
	      success:function(response){
	            if( response.url != undefined && response.url != "" ){
			audio = new Audio( response.url );
			audio.controls = false;
			audio.play();
			$(el).removeClass("loading play").addClass("pause");
	            }
	      }
	   });
	   
	}
   
});
