<h1> Create Note</h1>

<form action="<?php echo URL;?>note/create" method="post" onsubmit="return validate_form_data();">
	<p id="error_message" style="color:red;"></p>
	<p>Note Title:</p><input type="text" name="note_title" required id="form_title" />
	<p>Content:</p><textarea cols="40" rows="5" name="note_content" optional ></textarea>
	<p> <input type="submit"  name="submit" value="submit"/> </p>
</form>

<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Author</th>
			<th>Date Created</th>
			<th>Last Updated</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($this->db_result as $data) { ?>
		<tr>
			<td><?php echo $data['note_id'];?></td>
			<td><?php echo $data['title'];?></td>
			<td><?php echo $data['author'];?></td>
			<td><?php echo $data['date_created'];?></td>
			<td><?php echo $data['last_updated'];?></td>
			<td>
				<a href="<?php echo URL?>note/update_page?e_id=<?php echo $data['note_id'];?>">Edit</a>&nbsp;
				<a class="delete" href="<?php echo URL?>note/delete/?d_id=<?php echo $data['note_id'];?>">Delete</a>
			</td>
		</tr>
<?php }?>
	</tbody>
</table>