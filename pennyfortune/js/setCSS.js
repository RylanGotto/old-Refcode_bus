/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 // Called by Adapt.js
$(document).ready(function(){
   $width = $(window).width();
   $path = 'css/';
   
   
   if($width>0 && $width<760){
       $path = $path + 'mobile.css';
       $('#gridsystem').attr('href',$path);
   
   }else if ($width>760 && $width<=1920){
       $path = $path + '960.css';
       $('#gridsystem').attr('href',$path);
   }
     
});


   
