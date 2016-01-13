<html>
	<head>
	<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
	<script>
		//go to last month reduce a one from current
		function goLastMonth(user,month,year)
		{
		
			if(month==1)
			{
			--year;
			month=13;
			}
			
				document.location.href="<?php $_SERVER['PHP_SELF'];?>?user="+user+"&month="+(month-1)+"&year="+year;
				
		}	
			

			
		//add one to current month	
		function goNextMonth(user,month,year)
		{
			if(month==12)
			{
			++year;
			month=0;
			}
			document.location.href="<?php $_SERVER['PHP_SELF'];?>?user="+user+"&month="+(month+1)+"&year="+year;
		
		}
	
	</script>
	 </head>
	
	 <body>
	 
	 
	 	
		<?php
		    //is this a customer? then only they can put appointments
			if(isset($_SESSION['Catagory']))
			{
							if($_SESSION['Catagory']=='customer')
							{
								$customer=1;
							}
							else{
								$customer=0;
							}
							
			}
			else{
					$customer=0;
					
			}
					
			//if a get is passed then take month from that
			if(isset($_GET['month']))
			{
				$month=$_GET['month'];
				
				
			}
			//else current date as month
			else
			{
				$month=date("n");
			}

			//take year from get
			if(isset($_GET['year']))
			{
				$year=$_GET['year'];
			}
			else
			{
				$year=date("Y");
			}
			
			//get the word for month	
			switch($month)
			{
				case '1':
				{
				$monthInWord='January';
				break;
				}
				case '2':
				{
				$monthInWord='February';
				break;
				}
				case '3':
				{
				$monthInWord='March';
				break;
				}
				case '4':
				{
				$monthInWord='April';
				break;
				}
				case '5':
				{
				$monthInWord='May';
				break;
				}
				case '6':
				{
				$monthInWord='June';
				break;
				}
				case '7':
				{
				$monthInWord='July';
				break;
				}
				case '8':
				{
				$monthInWord='August';
				break;
				}
				
				case '9':
				{
				$monthInWord='September';
				break;
				}
				case '10':
				{
				$monthInWord='October';
				break;
				}
				case '11':
				{
				$monthInWord='November';
				break;
				}
				case '12':
				{
				$monthInWord='December';
				break;
				}
			
			}
		
		
			//echo $monthInWord;
			$day=1;
			$dateformat=$day." ".$monthInWord." ".$year;
			//echo $dateformat;
			$Current=strtotime($dateformat);
			//echo $month;
			$MonthName=date("F",$Current);
			//echo $MonthName;
			$NumberofDays=date("t",$Current);
			//echo $NumberofDays;
			$DayName=date("l",$Current);
			$counter=0;
			
			if(isset($_GET['user']))
			{
				$user=$_GET['user'];
		
			}
			
		 	
			
		?>
		<div id="calendaryear">
		<table  >
			<tr id='heading'>
				<td align="center" ><img src='calendar/images/left_arrow.png' onClick="goLastMonth(<?php echo $user.",".$month.",".$year?>)"></td>
				<td width='250px' align="center"><?php echo $MonthName,"  " ,$year ?></td>
				<td><img src='calendar/images/right_arrow.png'  onclick="goNextMonth(<?php echo  $user.",".$month.",".$year?>)"></td>
			</tr>
		</table>
		</div>
		<div id="calendar">
	
		
		<table >
		
		
			<tr id="week">
				<td align="center" width='30px'>Mon</td>
				<td align="center" width='30px'>Tue</td>
				<td align="center" width='30px'>Wed</td>
				<td align="center" width='30px'>Thu</td>
				<td align="center" width='30px'>Fri</td>
				<td align="center" width='30px'>Sat</td>
				<td align="center" width='30px'>Sun</td>
				
			</tr>
			
			<?php
			
				echo "<tr  height='20px'>";

				//diplay calendar div objects
				
				for($i=1;$i<$NumberofDays+1;$i++,$counter++){
				
					
					$dateformatEach=$i." ".$monthInWord." ".$year;
					$eachday=strtotime($dateformatEach);
					$today=date("m/d/Y");
					$currentday=date("m/d/Y",$eachday);
					
					
					
					if($today>=$currentday)
					{
								
						if($i==1)
						{
							$firstDay=date("w",$eachday); //1-6
							if($firstDay==0) //on sunday
							{
							
								for($j=0;$j<6;$j++,$counter++)
									{
										echo "<td 'align='center' width='30px'>&nbsp;</td>";
										
									
									}
							}
							
						
							
							else{
							
								for($j=0;$j<$firstDay-1;$j++,$counter++)
								{
									echo "<td align='center' width=40px'>&nbsp;</td>";
									
								
								}
							}
						
						}
						//check end of the week
						
						if($counter%7==0 && $i!=1 )
						{
									echo "</tr><tr height='20px'>";
						}
						
						
						
						$monthstring=$month;
						$monthlength=strlen($monthstring);
						$daystring=$i;
						$daylength=strlen($daystring);
						
						if($monthlength<=1){
							$monthstring="0".$monthstring;
						}
						if($daylength<=1){
							$daystring="0".$daystring;
						}
					
						
						
						$comparewith=$monthstring.'/'.($daystring).'/'.$year;
						
						
						$dayOnWeek=date("w",$eachday);
						
						echo "<td ";
						
						
					
						
						//get details from database
					
						$sqlcount="select * from calendar where jobDate='".$comparewith."' and sp_id='".$user."'";
						$resultsp = mysqli_query($database,$sqlcount) or die(mysqli_error($database));
						$noOfEvent=mysqli_num_rows($resultsp);
						
		
						$dayOnWeek=date("w",$eachday);
						
						if($dayOnWeek==0 ||$dayOnWeek==6)
						{
							if($noOfEvent>=1){
								if($today==$comparewith)
								{	
									echo "class='todayEventHoliday'";
									echo "align='center' width='40px'><span id='spanhovering{$i}'>$i</span></td>";
								}
								else
								{
									echo "class='holidayEvent'";
									echo "align='center' width='40px'><span id='spanhovering{$i}'>$i</span></td>";
								}
								
							}
							
							else if($today==$comparewith){
							
								echo "class='todayHoliday'";
								echo "align='center' width='40px'>$i</td>";

							}
							
							else
							{
								echo "class='holiday'";
								echo "align='center' width='40px'>$i</td>";
							}
		
						}
						
						else
						{
							if($noOfEvent>=1){
								if($today==$comparewith)
								{	
									echo "class='todayEvent'";
									echo "align='center' width='40px'><span id='spanhovering{$i}'>$i</span></a></td>";
								}
								
								else
								{
									echo "class='event'";
									echo "align='center' width='40px'><span id='spanhovering{$i}'>$i</span></td>";
									
									
								
								 
								}
								
							}
							
							else if($today==$comparewith){
							
								echo "class='today'";
								echo "align='center' width='40px'>$i</td>";
								

							}
							
							else
							{
								echo "align='center' width='40px'>$i</td>";
							}
							
							
							
						}
						
					}
					
						
					else//create links to create appointments if a customer
					{
						
						if($customer==1)
						{
							
							if($i==1)
							{
									$firstDay=date("w",$eachday); //1-6
									
									if($firstDay==0) //on sunday
									{
									
										for($j=0;$j<6;$j++,$counter++)
											{
												echo "<td 'align='center' width='30px'>&nbsp;</td>";
												
											
											}
									}
									
								
									else{
									
										for($j=0;$j<$firstDay-1;$j++,$counter++)
										{
											echo "<td align='center' width=40px'>&nbsp;</td>";
												
											
										}
									}
								
							}
								
							if($counter%7==0 && $i!=1 )
							{
								echo "</tr><tr height='20px'>";
							}
								
								
								
							$monthstring=$month;
							$monthlength=strlen($monthstring);
							$daystring=$i;
							$daylength=strlen($daystring);
								
							if($monthlength<=1){
								$monthstring="0".$monthstring;
							}

							if($daylength<=1){
								$daystring="0".$daystring;
							}
							
								
								
							$comparewith=$monthstring.'/'.($daystring).'/'.$year;
								
								
							$dayOnWeek=date("w",$eachday);
								
							echo "<td ";
								
								
							
								
						
							
							$sqlcount="select * from calendar where jobDate='".$comparewith."' and sp_id='".$user."'";
							$resultsp = mysqli_query($database,$sqlcount) or die(mysqli_error($database));
							$noOfEvent=mysqli_num_rows($resultsp);
								
				
							$dayOnWeek=date("w",$eachday);

							//is this a day on week
								
							if($dayOnWeek==0 ||$dayOnWeek==6)
							{
								if($noOfEvent>=1){
									if($today==$comparewith)
									{	
										echo "class='todayEventHoliday'";
										echo "align='center' width='40px'><a href=appointment.php?user=".$user."&date=".$comparewith."&month=".$month."&year=".$year.">$i</a></td>";
									}
									else
									{
										echo "class='holidayEvent'";
										echo "align='center' width='40px'><a href=appointment.php?user=".$user."&date=".$comparewith."&month=".$month."&year=".$year."><span id='spanhovering{$i}'>$i</span></a></td>";
									}
										
								}
								else if($today==$comparewith){
									
									echo "class='todayHoliday'";
									echo "align='center' width='40px'><a href=appointment.php?user=".$user."&date=".$comparewith."&month=".$month."&year=".$year.">$i</a></td>";

								}
									
								else
								{
									echo "class='holiday'";
									echo "align='center' width='40px'><a href=appointment.php?user=".$user."&date=".$comparewith."&month=".$month."&year=".$year.">$i</a></td>";
								}
				
							}
								
							else
							{
								if($noOfEvent>=1){
									if($today==$comparewith)
									{	
											echo "class='todayEvent'";
											echo "align='center' width='40px'><a href=appointment.php?user=".$user."&date=".$comparewith."&month=".$month."&year=".$year."><span id='spanhovering{$i}'>$i</span></a></td>";
									}
										
									else
									{
											echo "class='event'";
											echo "align='center' width='40px'><span id='spanhovering{$i}'><a href=appointment.php?user=".$user."&date=".$comparewith."&month=".$month."&year=".$year."><span id='spanhovering{$i}'>$i</span></a></span></td>";
																	
										 
									}
										
								}
									
								else if($today==$comparewith){
									
									echo "class='today'";
									echo "align='center' width='40px'><a href=appointment.php?user=".$user."&date=".$comparewith."&month=".$month."&year=".$year.">$i</a></td>";
										

								}
									
								else
								{
									echo "align='center' width='40px'><a href=appointment.php?user=".$user."&date=".$comparewith."&month=".$month."&year=".$year.">$i</a></td>";
								}
									
								
								
							}
						}
						
						
						else
						{
							if($i==1)
							{
									$firstDay=date("w",$eachday); //1-6
									
									if($firstDay==0) //on sunday
									{
									
										for($j=0;$j<6;$j++,$counter++)
											{
												echo "<td 'align='center' width='30px'>&nbsp;</td>";
												
											
											}
									}
									
								
									else{
									
										for($j=0;$j<$firstDay-1;$j++,$counter++)
										{
											echo "<td align='center' width=40px'>&nbsp;</td>";
												
											
										}
									}
								
							}
								
							if($counter%7==0 && $i!=1 )
							{
								echo "</tr><tr height='20px'>";
							}
								
								
								
							$monthstring=$month;
							$monthlength=strlen($monthstring);
							$daystring=$i;
							$daylength=strlen($daystring);
								
							if($monthlength<=1){
								$monthstring="0".$monthstring;
							}

							if($daylength<=1){
								$daystring="0".$daystring;
							}
							
								
								
							$comparewith=$monthstring.'/'.($daystring).'/'.$year;
								
								
							$dayOnWeek=date("w",$eachday);
								
							echo "<td ";
								
								
							
								
						
							
							$sqlcount="select * from calendar where jobDate='".$comparewith."' and sp_id='".$user."'";
							$resultsp = mysqli_query($database,$sqlcount) or die(mysqli_error($database));
							$noOfEvent=mysqli_num_rows($resultsp);
								
				
							$dayOnWeek=date("w",$eachday);
								
							if($dayOnWeek==0 ||$dayOnWeek==6)
							{
								if($noOfEvent>=1){
									if($today==$comparewith)
									{	
										echo "class='todayEventHoliday'";
										echo "align='center' width='40px'>$i</td>";
									}
									else
									{
										echo "class='holidayEvent'";
										echo "align='center' width='40px'>$i</td>";
									}
										
								}
								else if($today==$comparewith){
									
									echo "class='todayHoliday'";
									echo "align='center' width='40px'>$i</td>";

								}
									
								else
								{
									echo "class='holiday'";
									echo "align='center' width='40px'>$i</td>";
								}
				
							}
								
							else
							{
								if($noOfEvent>=1){
									if($today==$comparewith)
									{	
											echo "class='todayEvent'";
											echo "align='center' width='40px'><span id='spanhovering{$i}'>$i</span></a></td>";
									}
										
									else
									{
											echo "class='event'";
											echo "align='center' width='40px'><span id='spanhovering{$i}'>$i</span></td>";
																	
										 
									}
										
								}
									
								else if($today==$comparewith){
									
									echo "class='today'";
									echo "align='center' width='40px'>$i</td>";
										

								}
									
								else
								{
									echo "align='center' width='40px'>$i</td>";
								}
									
								
							}	
						
						}
						
					}
					
					
					
					
					
					
					
					
					
					
					
				
					
					
				
				}
			
				echo "</tr>";
			?>
			
			
			</table>
		
		
		<?php
		
	

		
		$sql="select * from calendar where sp_id='".$user."' group by jobDate" ;
		$result = mysqli_query($database,$sql) or die(mysqli_error($database));
		while($job = mysqli_fetch_assoc($result))
		{

		//echo hover tag
		
		$jobdate=$job['jobDate'];
		$timestamp= strtotime($jobdate);
		$m= date('n',$timestamp);
	
		
			if($m==$month)
			{
				$da= date('j',$timestamp);
				
				echo "<style>
	
				#divtoshow{$da} {
				border: 1px solid #000000;
				box-shadow: 2px 5px 5px #7c7c7c;
				background-color: #ffffff;
				position:absolute;
				height:100px;
				width:200px;
				display: none;
				z-index:10;
				}
				
				
				#spanhovering{$da}{
				cursor: pointer;
				}

				</style>";
				
				
					
				echo "
				<div id=\"divtoshow{$da}\" style=\"display:none\">
				
				<div id=\"divinside\"><p align='center'>
				".date('jS F, Y',$timestamp)." <p>
				</div>
				
				<div id='divinsidebody'>
				";
				
				
				
				$sqldate="select * from calendar where sp_id='".$user."' and jobDate='".$jobdate."'";
				$resultdate = mysqli_query($database,$sqldate) or die(mysqli_error($database));

				while($jobdate = mysqli_fetch_assoc($resultdate))
				{
				echo "Job	:".$jobdate['title']."<br>";
				echo "Status:";
				
					if($jobdate['accepted']==0)
					{
						echo "Pending";
					
					}
					else if($jobdate['accepted']==1)
					{
						echo "Agreed";
					
					}
					else if($jobdate['accepted']==2)
					{
						echo "Canceled";
					
					}
				
				
				}
				echo "</div>
				
				
				<div id=\"divinsideimage\"><img width=\"50\" height=\"50\" src=\"calendar/helmet.png\">
				</div>

				</div>
				
				<script>
				$(\"#spanhovering{$da}\").hover(function(event) {
					$(\"#divtoshow{$da}\").css({top: event.x}).show();
				}, function() {
					$(\"#divtoshow{$da}\").hide();
				});


				</script>";
			
			
			}
		
		}
		

		
				
?>
<script src=\"jquery.min.js\"></script>	
	
		
	</div>	
	 </body>
</html>