<?php
	$IsForm = 'true';
	$query = 'SELECT * FROM pages WHERE page_id="'.$_GET['pageId'].'"';
	$pageData = mysql_fetch_assoc( $db->query( $query ) );
	echo '<form method="post" action="'.REGULAR_URL.$FunctionBaseUri.'&action=module_and_layout_edit_submit&pageId='.$_GET['pageId'].'">';	
		echo '<table cellspacing="0" cellpadding="3" style="font-size:11px;" class="cms_tabular">';
			echo '<tr class="tr_th_bg">';
				echo '<td colspan="3" style="font-weight:bold;">Layout Information</th>';
			echo '</tr>';
			echo '<tr>';	
				echo '<td style="width:150px;"><label for="content_output_type">Content Output Type: </label> </td>';
				echo '<td>';
					echo '<select name="content_output_type" id="content_output_type">';
						echo '<option value="T" '.(($pageData['content_type']=="T")?' SELECTED=SELECTED':'').'>Content Tabs</option>';
						echo '<option value="L" '.(($pageData['content_type']=="L")?' SELECTED=SELECTED':'').'>Seperate Content Areas</option>';
					echo '</select>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';	
				echo '<td style="width:150px;"><label for="content_position">Content Position: </label> </td>';
				echo '<td>';
					echo '<select name="content_position" id="content_position">';
						echo '<option value="B"'.(($pageData['content_position']=="B")?' SELECTED=SELECTED':'').'>Before Module</option>';
						echo '<option value="A"'.(($pageData['content_position']=="A")?' SELECTED=SELECTED':'').'>After Module</option>';
						echo '<option value="N"'.(($pageData['content_position']=="N")?' SELECTED=SELECTED':'').'>Do Not Display Content Areas</option>';
					echo '</select>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';	
				echo '<td style="width:150px;"><label for="page_header">Page HTML Header: </label> </td>';
				echo '<td>';
					echo '<select name="page_header" id="page_header">';
						echo html_header_select($pageData['page_header']);
					echo '</select>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';	
				echo '<td style="width:150px;"><label for="page_hero">Page Hero Image: </label> </td>';
				echo '<td>';
					echo '<select name="page_hero" id="page_hero">';
						echo header_select($pageData['header_image'],$pageData['header_type']);
					echo '</select>';
				echo '</td>';
			echo '</tr>';
		$query = 'SELECT module_id FROM page_module WHERE page_module_id="'.$pageData['page_type'].'"';
		$row = mysql_fetch_assoc( $db->query( $query ) );
		$query = 'SELECT module_dir FROM module WHERE module_id="'.$row['module_id'].'"';
		$row = mysql_fetch_assoc( $db->query( $query ) );
		if(file_exists(ABSOLUTE_PATH.'modules/'.$row['module_dir'].'module_page_edit.inc.php')){
			require_once(ABSOLUTE_PATH.'modules/'.$row['module_dir'].'module_page_edit.inc.php');
		}
		echo '</table>';
?>