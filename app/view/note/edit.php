<h1> Edit <?php echo $this->data['title'];?></h1>
<br />
<p</p>

<form action="<?php echo URL;?>note/update?edit_id=<?php echo htmlspecialchars($this->data['note_id']);?>" method="post" onsubmit="return validate_form_data();">
	<p>Note Title:</p><input type="text" name="note_title" value="<?php echo $this->data['title'];?>" required id="form_title"/>
	<p>Content:</p><textarea cols="40" rows="5" name="note_content" optional><?php echo $this->data['content'];?></textarea>
	<p> <input type="submit"  name="submit" value="submit"/> </p>
</form>

