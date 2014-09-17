<!doctype html>
<html>
<head>
	<title>Wagarowicz - Panel użytkownika</title>
	<link rel="stylesheet" type="text/css" href="templates/Account/css/usser.css">
	<meta charset="UTF-8">
	<script src="templates/Account/jq/jquery-1.6.3.min.js"></script>
		<script>

			$(document).ready(function()
			 {
	
			$('.tabs a').click(function() 
			{
		
			var $this = $(this);
			
			
			$('.tab').hide();
			$('.tabs a.active').removeClass('active');
			    
			
			$this.addClass('active').blur();	
			
			var panel = $this.attr('href');
			
			$(panel).fadeIn(250);
			
		
			return(false);
			}); 
	 
				
				$('.tabs li:first a').click();
			}); 
</script>

		</script>
</head>
<body>

	<div id="content">
		<div id="thisShitLogo"><img src="templates/Account/UsserPanelImages/Wagarowicz.png"></div>
			<div id="tableContent">
				<div class="tabsPanels">

					<ul class="tabs">
						<li><a href="#tab1" tabindex="1">Twój plan lekcji</a></li>
						<li><a href="#tab2" tabindex="2">Z czego możesz jeszcze spierdolić</a></li>
						<li></li>
					</ul>

					
						<a class='logout-c'  href="index.php?request=Account&action=logout" >Wyloguj</a>
				
						<div class="panelContents">

							<div id="tab1" class="tab">
								<h1>Twój plan lekcji</h1>
					<table border ="12px"class="lessonTable">

					<tr>
						 <th class="nol" id="nol0"></th><th class="days" id="day1">Poniedziałek</th><th class="days" id="day2">Wtorek</th><th class="days" id="day3">Środa</th class="days id="day="day4"><th class="days" id="day5">Czwartek</th><th class="days" id="day6">Piątek</th>
					</tr>
					<?php
					for($i=0;$i<$this->len;$i++)
					{
						$n = $i+1;
						echo"<tr class='wers' id='w0'>
						<th class='nol' id='nol1'>".$n."</th><td class='subjects' id='s1'>"; if(isset($this->pn[$i])){echo $this->pn[$i];}else{echo "brak";} echo "</td><td class='subjects' id='s2'>";if(isset($this->wt[$i])){echo $this->wt[$i];}else{echo "brak";} echo "</td><td class='subjects' id='s3'>";if(isset($this->sr[$i])){echo $this->sr[$i];}else{echo "brak";} echo "</td><td class='subjects' id='s4'>";if(isset($this->cz[$i])){echo $this->cz[$i];}else{echo "brak";} echo "</td><td class='subjects' id='s5'>";if(isset($this->pt[$i])){echo $this->pt[$i];}else{echo "brak";} echo "</td>";
						echo "</tr>";
					}
					?>
										</table>

									<form>	
										<a id="aButon" href="index.php?request=Account&action=addplan"><input type="button" value="Dodaj Plan Zajęć" id="editionButon"><a/>
									</form>			
							</div>

							<div id="tab2" class="tab">
								<h1>Spierdalaj z lekcji </h2>
					
					<table border="12px" class="spierdalajTable">

					<tr class="wers">
						<th id="subjectHead">Przedmiot</th><th id="howManyHead">Ile razy możesz spierdolić</th> <th id="frekHead">Twoja frekwencja w %</th>
					</tr>

					<tr class="wers">
						<td class="subject">Polski</td><td class="howMany">5</td> <td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Matma</td><td class="howMany">5</td> <td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Analiza Chemiczna</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Identyfikacja jednostki centralnej </td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>


					<tr class="wers">
						<td class="subject">Test</td><td class="howMany">5</td><td class="frek">78%</td>
					</tr>

					</table>
							</div>

						</div>
				</div>

			</div>
	</div>

</body>
</html>