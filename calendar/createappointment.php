

<!--form -->
	
	<form name='eventform' method='POST' action="<?php $_SERVER['PHP_SELF'];?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year;?>&v=true &add=true">
	
		<table>
			<tr>
				<td width='150px'>Job Title</td>
				<td><input type='text' name='title' required> </td>
			</tr>
			
			<tr>
				<td width='150px'>Job Description</td>
				<td width='150px'> <textarea name='description' required></textarea></td> 
			</tr>
			<tr>
				<td width='150px'>Venue</td>
				<td><input type='text' name='location' required> </td>
			</tr>
				<tr>
				<td width='150px'>Time</td>
				<td><input type='text' name='jobtime'></td>
			</tr>
			</tr>
				<tr>
				<td width='150px'>Contact No.</td>
				<td><input type='text' name='contactno'></td>
			</tr>
			
			<tr>
				<td colspan='2'><input type='submit' name='btn' value='Create'> </td>
				
			</tr>
			
		</table>
		