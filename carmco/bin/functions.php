<?php

function contactForm(){
echo <<<END


<form  name="myform" id="myform" action="" method="POST" >  


<div class="box">
          
            
            <label>
               <span>Full name</span>
               <input type="text" class="input_text" name="name" id="name"/>
            </label>
             <label>
               <span>Email</span>
               <input type="text" class="input_text" name="email" id="email"/>
            </label>
             <label>
                <span>Subject</span>
                <input type="text" class="input_text" name="subject" id="subject"/>
            </label>
            <label>
                <span>Message</span>
                <textarea class="input_text" name="message" id="message"></textarea>
		                
		
            </label>
            <input class="button" type="submit"  />
</div>            
    </form>






END;
}

?>
