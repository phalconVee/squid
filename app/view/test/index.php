<body onload="aj_read()">
	
<form id="f_form" action="<?php echo URL;?>test/aj_insert" method="post" >
	<p id="c_message" style="color: green;"></p>
	<p id="d_message" style="color: red;"></p>
	<input type="text" name="aj_text" id="field"/>
	<input type="submit" value="submit" onclick="save_data()"/>
</form>
<div id="list_inserts" >
	
</div>
</body>
