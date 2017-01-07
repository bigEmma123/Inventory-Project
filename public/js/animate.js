/* classes
*welcomeMsg
*secondMsg
*links
*/////
//on load
$(function(){
    //just a test
   /*** $(".jumbotron").hide() success**/
    /***animate welcome*****/
    $('.welcomeMsg').hide();
    $('.welcomeMsg').delay(500).fadeIn();
    
    
    /**Animate second message**/
    $('.secondMsg').hide();
    $('.secondMSg').delay(1200).fadeIn();
    
    /*****Aniamte links***/
    $('.links').hide();
   $('.links').delay(2000).fadeIn()
    
    
     
});