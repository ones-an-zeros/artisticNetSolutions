<?php
	// let the system know this case has a form
	$IsForm = 'true';
	// start form
	echo '<form method="post" action="'.REGULAR_URL.$FunctionBaseUri.'&action=add_form_submit">';
		// start table
		echo '<table cellspacing="0" cellpadding="3" style="font-size:11px;" class="cms_tabular">';
			echo '<tr>';
				echo '<td style="width:150px;"><label for="form_name">Form Name: </label></td>';
				echo '<td><input type="text" name="form_name" id="form_name" style ="width:200px;"/></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td style="width:150px;"><label for="form_recipiant">Form Recipiant: </label></td>';
				echo '<td><input type="text" name="form_recipiant" id="form_recipiant" style ="width:200px;"/></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td style="width:150px;"><label for="form_subject">Form Subject: </label></td>';
				echo '<td><input type="text" name="form_subject" id="form_subject" style ="width:600px;"/></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td colspan="2"><center><label for="form_message">Form Message: </label></center></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td colspan="2"><center>';
					echo '<textarea name="form_message" id="form_message" style="width:95%;height:50px;"></textarea>';
				echo '</center></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td style="width:150px;"><label for="send_confirmation">Send Confirmation Email: </label></td>';
				echo '<td><select name="send_confirmation" id="send_confirmation" >';
					echo '<option value="Y">Yes</option>';
					echo '<option value="N">No</option>';
				echo '</select></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td style="width:150px;"><label for="confirmation_subject">Confirmation Subject: </label></td>';
				echo '<td><input type="text" name="confirmation_subject" id="confirmation_subject" style="width:600px;"/></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td colspan="2"><center><label for="confirmation_message">Confirmation Message: </label></center></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td colspan="2"><center>';
					echo '<textarea name="confirmation_message" id="confirmation_message" style="width:95%;height:50px;"></textarea>';
				echo '</center></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td style="width:150px;"><label for="confirmation_link_input">Copy Submited Information in Confirmation Email: </label></td>';
				echo '<td><select name="confirmation_link_input" id="confirmation_link_input" >';
					echo '<option value="Y">Yes</option>';
					echo '<option value="N">No</option>';
				echo '</select></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td style="width:150px;"><label for="thank_you_title">Thank You Page Title: </label></td>';
				echo '<td><input type="text" name="thank_you_title" id="thank_you_title" style="width:600px;"/></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td colspan="2"><center><label for="thank_you_message">Thank You Page Message: </label></center></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td colspan="2"><center>';
					echo '<textarea name="thank_you_message" id="thank_you_message" style="width:95%;height:50px;"></textarea>';
				echo '</center></td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td style="width:150px;"><label for="thank_you_link_input">Copy Submited Information in Thank You Message: </label></td>';
				echo '<td><select name="thank_you_link_input" id="thank_you_link_input" >';
					echo '<option value="Y">Yes</option>';
					echo '<option value="N">No</option>';
				echo '</select></td>';
			echo '</tr>';
		// end table
		echo '</table>';
?>