/*var items=$(".image").eq(0).find('.imag');
var currentIndex=0;
var itemLength=items.length;
var i;

   
    for(i=0;i<itemLength;i++){
    var items=$(".innerImage").find('.imag').eq(currentIndex-1);
    items.hide();
     items.animate({
         'margin-left':'-1000px'
     },2000);
  }
    var item=$(".innerImage").find('.imag').eq(currentIndex);   
    
     item.animate({
         'display':'block'
     },2000);
  
 


/*var img = new Image();
var items=$(".image").eq(0).find('.imag').eq(0);
       items.show();
$(".rightArrow").click(function(){ 
    if(currentIndex==itemLength-1){
        currentIndex=0;
    }else currentIndex+=1;
    img.cycleItems(); 
});

$(".leftArrow").click(function(){
     if(currentIndex==0){
        currentIndex=itemLength-1;
    }else currentIndex -=1;
        img.cycleItems();
});
*/
$("#slider").mouseover(function(){
    var itemLeft=$(".leftArrow");
       itemLeft.show();
    var itemRight=$(".rightArrow");
       itemRight.show();
    var points =$(".outCircle");
   //    points.show();
});
$("#slider").mouseout(function(){
      var itemLeft=$(".leftArrow");
       itemLeft.hide();
    var itemRight=$(".rightArrow");
       itemRight.hide();
    var points =$(".outCircle");
      // points.hide();
});

function autoSlide(){
   for(var j=0;j<100;j++){
    for(var i=0;i<9;i++){
        var next = jQuery("#slider .slide.active").next();
    var active = jQuery("#slider .slide.active");
    var all =jQuery("#slider .slide");
    var first= all.first();
    if(typeof(next)!=undefined){
          active.prev().removeClass("prev");
          active.removeClass("active");
          next.removeClass("next");
        if(next.attr("class")=="slider"){
             first.addClass("active");
             first.next().addClass("next");
             active.addClass("prev");
        }else{        
          next.next().addClass("next");  
          next.addClass("active");
          active.addClass("prev");
           }
        }
    }
    for(var i=0;i<500;i++){};
        }
}

var timerId = setInterval(function(){
      var next = jQuery("#slider .slide.active").next();
    var active = jQuery("#slider .slide.active");
    var all =jQuery("#slider .slide");
    var first= all.first();
    if(typeof(next)!=undefined){
          active.prev().removeClass("prev");
          active.removeClass("active");
          next.removeClass("next");
        if(next.attr("class")=="rightArrow"){
             first.addClass("active");
             first.next().addClass("next");
             active.addClass("prev");
        }else{        
          next.next().addClass("next");  
          next.addClass("active");
          active.addClass("prev");
        }
    }
},8000);
/*function autoSlide(){
    var prev = jQuery("#slider .slide.active").prev();
    var active = jQuery("#slider .slide.active");
    var all =jQuery("#slider .slide");
    var last= all.last();
    if(typeof(prev)!=undefined){
          active.next().removeClass("next");
          active.removeClass("active");
          prev.removeClass("prev");
        if(prev.attr("class")=="leftArrow"){
             last.addClass("active");
             last.prev().addClass("prev");
              active.addClass("next");
        }else{        
          prev.prev().addClass("prev");  
          prev.addClass("active");
          active.addClass("next");
   }
}
}
*/

function switchPrev(){
    var prev = jQuery("#slider .slide.active").prev();
    var active = jQuery("#slider .slide.active");
    var all =jQuery("#slider .slide");
    var last= all.last();
    if(typeof(prev)!=undefined){
          active.next().removeClass("next");
          active.removeClass("active");
          prev.removeClass("prev");
        if(prev.attr("class")=="leftArrow"){
             last.addClass("active");
             last.prev().addClass("prev");
              active.addClass("next");
        }else{        
          prev.prev().addClass("prev");  
          prev.addClass("active");
          active.addClass("next");
   }
}
}


function switchNext(){
    var next = jQuery("#slider .slide.active").next();
    var active = jQuery("#slider .slide.active");
    var all =jQuery("#slider .slide");
    var first= all.first();
    if(typeof(next)!=undefined){
          active.prev().removeClass("prev");
          active.removeClass("active");
          next.removeClass("next");
        if(next.attr("class")=="rightArrow"){
             first.addClass("active");
             first.next().addClass("next");
             active.addClass("prev");
        }else{        
          next.next().addClass("next");  
          next.addClass("active");
          active.addClass("prev");
        }
    }
}

function switchRandom(i){
    var next = jQuery("#slider .slide.active").next();
    var active = jQuery("#slider .slide.active");
    var prev = jQuery("#slider .slide.active").prev();
    active.prev().removeClass("prev");
    active.removeClass("active");
    next.removeClass("next");
    var act = $("#slider .slide").eq(i);
    act.addClass("active");
    act.prev().addClass("prev");
    act.next().addClass("next");
}

//autoSlide();

jQuery(".leftArrow").click(function(){
    switchPrev();
});

jQuery(".rightArrow").click(function(){
    switchNext();
});

 jQuery(".outCircle").eq(0).click(function(){
     switchRandom(1);
 });
jQuery(".outCircle").eq(1).click(function(){
     switchRandom(3);
 });
jQuery(".outCircle").eq(2).click(function(){
     switchRandom(5);
 });
jQuery(".outCircle").eq(3).click(function(){
     switchRandom(7);
 });
jQuery(".outCircle").eq(4).click(function(){
     switchRandom(9);
 });

document.open(function(){
   autoSlide(); 
});
jQuery(".enter").click(function(){
    var form = jQuery(".abs");
    form.show();
   var elem = jQuery(".cover");
    elem.show();
   $("body").css(
       "overflow","hidden");
});

jQuery(".reg").click(function(){
    var form = jQuery(".abs2");
    form.show();
   var elem = jQuery(".cover");
    elem.show();
   $("body").css("overflow","hidden");
});
jQuery(".outX").mouseover(function(){
    var div = jQuery(".imgContent");
    div.css({
       'display':'block' 
    });
});
jQuery(".outX").mouseout(function(){
    var div = jQuery(".imgContent");
    div.css({
       'display':'none' 
    });
});
jQuery(".imgContent").click(function(){
    var form = jQuery(".abs");
    var form2 = jQuery(".abs2");
    form.hide();
    form2.hide();
     var elem = jQuery(".cover");
    elem.hide();
     $("body").css("overflow","scroll");
});

jQuery(".button").eq(3).click(function(){
    var form = jQuery(".abs2");
    form.hide();
     var elem = jQuery(".cover");
    elem.hide();
     $("body").css("overflow","scroll");
});

jQuery(".lock").click(function(){
    
});
jQuery(".escape").click(function(){
    console.log("dsag");
    window.location.href = 'http://localhost/SiteCursach/routing.php?page=destroy';
});
//autoSlide();