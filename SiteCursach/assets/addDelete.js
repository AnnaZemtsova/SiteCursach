var ID;
var input;
var flag=0;
jQuery(".imgUDU").click(function(){
    var form = jQuery(".none");
    form.show();
   var elem = jQuery(".cover");
    elem.show();
   $("body").css(
       "overflow","hidden");
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
    var form = jQuery(".none");
    form.hide();
     var elem = jQuery(".coverUser");
    elem.hide();
     $("body").css("overflow","scroll");
     flag=0;
    jQuery(".inputID").remove();
});

jQuery(".button").eq(3).click(function(){
    var form = jQuery(".none");
    form.hide();
     var elem = jQuery(".cover");
    elem.hide();
     $("body").css("overflow","scroll");
   
});

jQuery(".imgUDU").click(function(){
    if(flag==0){
    ID = this.getAttribute("idUser");
    input = document.createElement('input');
    input.setAttribute("type", "text");
    input.setAttribute("name","id");
    input.setAttribute("class","inputID");
    input.setAttribute("style","display:none");
    input.setAttribute("value",ID);
    jQuery("form").append(input);
    console.log(input.getAttribute("value"));
        flag++;
    }
});

jQuery(".imgUD").click(function(){
     ID = this.getAttribute("idUser");
     var del = jQuery(".row").eq(ID-1);
     del.remove();
     window.location.href = 'http://localhost/SiteCursach/models/delete.php?id='+ID;
});

jQuery(".none").click(function(){
    console.log(input.getAttribute("value"));
});
jQuery(".columnN").click(function(){
    ID = this.getAttribute("idUser");
    window.location.href = 'http://localhost/SiteCursach/routing.php?page=user&id='+ID;
}); 