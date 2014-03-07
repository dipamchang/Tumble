<form action="<?php echo '/'.APP_ROOT.'/'; ?>posts/create?somevar=value" method="post">

   <fieldset>
	   <legend>Add Tumble Post</legend>
   
		 <div>
		   <input name="post[title]" size="40" type="text" />
     </div>
		 
		 <div>
		    <textarea cols="40" name="post[body]" rows="5"></textarea>
		 </div>
	 
		  <input type="submit" value="save" />

	 </fieldset>

</form>
