var ID;
jQuery(".go").click(function(){
    ID = this.getAttribute("id_category");
    console.log(ID);
    window.location.href = 'http://localhost/SiteCursach/routing.php?page=news&id='+ID;
}); 