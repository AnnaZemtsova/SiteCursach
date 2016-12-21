var ID;
jQuery(".go").click(function(){
    ID = this.getAttribute("id_New");
    console.log(ID);
    window.location.href = 'http://localhost/SiteCursach/routing.php?page=new&id='+ID;
}); 