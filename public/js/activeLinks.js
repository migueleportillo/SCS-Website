/*
 * Created by Blaise on 11/9/16
 * contributors: Blaise
 */

var activeL='#home';
//function to swap the active links
function swapActive(active){
    $(activeL).removeClass("active");
    $(active).addClass("active");
    activeL = active;
}

