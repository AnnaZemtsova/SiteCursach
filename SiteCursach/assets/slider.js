
var items=$(".image").eq(0).find('.imag');
var currentIndex=0;
var itemLength=items.length;
var i;
class Image{
pointUp(j){
    $(".circle").eq(j).css({
    'width':'20px',
    'height':'20px',
    'border-radius':'10px',
    'box-shadow': 'gray 0 0 1px',
    'margin-top':'-5px',
     'margin-left':'-25%'   
    });  
}

 pointDown(j){   
    $(".circle").eq(j).css({
    'width':'10px',
    'height':'10px',
    'border-radius':'5px',
    'margin-top':'0px',
        'margin-left':'0px'
    });
}
}

var img = new Image;

$(".image").eq(0).mouseover(function(){
    var itemLeft=$(".leftArrow");
       itemLeft.show();
    var itemRight=$(".rightArrow");
       itemRight.show();
    var points =$(".slider");
       points.show();
});
$(".image").eq(0).mouseout(function(){
      var itemLeft=$(".leftArrow");
       itemLeft.hide();
    var itemRight=$(".rightArrow");
       itemRight.hide();
    var points =$(".slider");
       points.hide();
});

      $(".outCircle").eq(0).mouseover(function(){  
         img.pointUp(0);
      });  
      $(".outCircle").eq(0).mouseout(function(){
          img.pointDown(0);
       });

      $(".outCircle").eq(1).mouseover(function(){  
         img.pointUp(1);
      });  
      $(".outCircle").eq(1).mouseout(function(){
          img.pointDown(1);
       });

     $(".outCircle").eq(2).mouseover(function(){  
         img.pointUp(2);
      });  
      $(".outCircle").eq(2).mouseout(function(){
          img.pointDown(2);
       });

        $(".outCircle").eq(3).mouseover(function(){  
         img.pointUp(3);
      });  
         $(".outCircle").eq(3).mouseout(function(){
          img.pointDown(3);
       });

       $(".outCircle").eq(4).mouseover(function(){  
         img.pointUp(4);
      });  
      $(".outCircle").eq(4).mouseout(function(){
          img.pointDown(4);
       });
    