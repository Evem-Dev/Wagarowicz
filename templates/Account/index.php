<!doctype html>
<html>
<head>
	<title>Wagarowicz - Panel użytkownika</title>
	<link rel="stylesheet" type="text/css" href="templates/Account/css/usser.css">
	<meta charset="UTF-8">
	<script src="jq/jquery-1.6.3.min.js"></script>
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
						<li><a href="#"     tabidnex="3">Wyloguj</a></li>
					</ul>
						<div class="panelContents">

							<div id="tab1" class="tab">
								<h1>Twój plan lekcji Towarzyszu</h1>
					<table border ="12px"class="lessonTable">

					<tr>
						 <th class="nol" id="nol0"></th><th class="days" id="day1">Poniedziałek</th><th class="days" id="day2">Wtorek</th><th class="days" id="day3">Środa</th class="days id="day="day4"><th class="days" id="day5">Czwartek</th><th class="days" id="day6">Piątek</th>
					</tr>
					<tr class="wers" id="w0">
						<th class="nol" id="nol1">1</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class="wers" id="w1">
						<th class="nol" id="nol2">2</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class ="wers" id="w2">
						<th class="nol" id="nol3">3</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class="wers" id="w3">
						<th class="nol" id="nol4">4</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class="wers" id="w4">
						<th class="nol" id="nol5">5</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Chuj w dupe Policji i jebanym Sokistom</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class="wers" id="w5">
						<th class="nol" id="nol6">6</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class="wers" id="w6">
						<th class="nol" id="nol7">7</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class="wers" id="w7">
						<th class="nol" id="nol8">8</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class="wers" id="w8">
						<th class="nol" id="nol9">9</th><td class="subjects" id="s1">Lesson</td ><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					<tr class="wers" id="w9">
						<th class="nol" id="nol10">10</th><td class="subjects" id="s1">Lesson</td><td class="subjects" id="s2">Lesson</td><td class="subjects" id="s3">Lesson</td><td class="subjects" id="s4">Lesson</td><td class="subjects" id="s5">Lesson</td>
					</tr>
					</table>

									<form>	
										<a id="aButon" href="#"><input type="submit" value="Edytuj plan lekcji :)" id="editionButon"><a/>
									</form>			
							</div>

							<div id="tab2" class="tab">
								<h1>Spierdalaj z lekcji towarzyszu</h2>
					
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