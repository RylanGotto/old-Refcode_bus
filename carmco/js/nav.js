/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
function reset(){
    $(' #photoFrame0,  #photoFrame1, #photoFrame2, #photoFrame3').hide();
    $('#agg').animate({ marginRight: '0px' }, 150).css('background', 'url(css/images/agg2.png) 0 -10px no-repeat');
    $('#stamp').animate({ marginRight: '0px' }, 150).css('background', 'url(css/images/stamp2.jpg) 0 0 no-repeat' );
    $('#broom').animate({ marginRight: '0px' }, 150).css('background', 'url(css/images/broomfinish2.jpg) 0 -26px no-repeat');
    $('#step').animate({ marginRight: '0px' }, 150).css('background', 'url(css/images/step2.jpg) 0 -70px no-repeat');
}


$('.link0').click(function(){
    $('#content0').fadeIn(2500), $('#content1, #picture').hide(), reset()
});

$('.link2').click(function(){
    $('#content1').fadeIn(2500), $('#content0, #picture').hide(), reset()
});

$('.move').click(function(){
   $('#picture').fadeIn(2500), $('#content0, #content1').hide()
});


$('#agg').toggle(function(){
    $(this).animate({ marginRight: '-15px' }, 150).css('background','url(css/images/agg.png) 0 -10px no-repeat'), $('#photoFrame0').slideDown();
},function(){
    $(this).animate({ marginRight: '0px' }, 150).css('background','url(css/images/agg2.png) 0 -10px no-repeat'), $('#photoFrame0').slideUp();
})





$('#stamp').toggle(function(){
    $(this).animate({ marginRight: '-15px' }, 150).css('background','url(css/images/stamp.jpg) 0 0 no-repeat'), $('#photoFrame1').slideDown();
},function(){
    $(this).animate({ marginRight: '0px' }, 150).css('background','url(css/images/stamp2.jpg) 0 0 no-repeat'), $('#photoFrame1').slideUp();
})



$('#broom').toggle(function(){
    $(this).animate({ marginRight: '-15px' }, 150).css('background','url(css/images/broomfinish.jpg) 0 -26px no-repeat'), $('#photoFrame2').slideDown();
},function(){
    $(this).animate({ marginRight: '0px' }, 150).css('background','url(css/images/broomfinish2.jpg) 0 -26px no-repeat'), $('#photoFrame2').slideUp();
})



$('#step').toggle(function(){
    $(this).animate({ marginRight: '-15px' }, 150).css('background','url(css/images/step.jpg) 0 -70px no-repeat'), $('#photoFrame3').slideDown();
},function(){
    $(this).animate({ marginRight: '0px' }, 150).css('background','url(css/images/step2.jpg) 0 -70px no-repeat'), $('#photoFrame3').slideUp();

});
});

 
