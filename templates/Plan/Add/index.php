<!doctype html>
<html>
<head>
	<title>Dodaj plan lekcji</title>
	<link rel="stylesheet" type="text/css" href="templates/Plan/Add/css/addPlane.css">
	<meta charset="UTF-8">
	<script src="templates/Plan/Add/jq/jquery-1.6.3.min.js"></script>
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

</head>
<body>

	<div id="content">
		<div id="thisShitLogo"><img src="templates/Plan/Add/addPlaneImages/Wagarowicz.png"></div>
			<div id="addContent">
				<div class="tabsPanels">
					<ul class="tabs">
						<li><a href="#tab1" tabindex="1">Poniedziałek</a></li>
						<li><a href="#tab2" tabindex="2">Wtorek</a></li>
						<li><a href="#tab3" tabindex="3">Środa</a></li>
						<li><a href="#tab4" tabindex="4">Czwartek</a></li>
						<li><a href="#tab5" tabindex="5">Piątek</a></li>
					</ul>
					<a class="nav" id="home" href="index.php">Plan lekcji</a>
					<a class="nav" id="logout-c" href="index.php?request=Account&action=logout">Wyloguj</a>
			   </div>

				<div class="panelContents">
					<div class="tab" id="tab1">
						<h1>Dodaj swój plan lekcji na poniedziałek</h1>
						<form class="addplane" action='index.php?request=Account&action=addplan' method='post'>
							1<input type="text" class="addPlane"  maxlength="18"name='pn1'><br>
							2<input type="text" class="addPlane" maxlength="18"name='pn2'><br>
							3<input type="text" class="addPlane" maxlength="18"name='pn3'><br>
							4<input type="text" class="addPlane" maxlength="18"name='pn4'><br>
							5<input type="text" class="addPlane" maxlength="18"name='pn5'><br>
							6<input type="text" class="addPlane" maxlength="18"name='pn6'><br>
							7<input type="text" class="addPlane" maxlength="18"name='pn7'><br>
							8<input type="text" class="addPlane" maxlength="18"name='pn8'><br>
							9<input type="text" class="addPlane" maxlength="18"name='pn9'><br>
							10<input type="text" class="addPlane" id="input10" maxlength="18" name='pn10'><br>
							 <input type='submit' value='Zapisz :)' id="save">


						</form>

					</div>
					<div class="tab" id="tab2">
						<h1>Dodaj swój plan lekcji na wtorek</h1>
						<form class="addplane" action='index.php?request=Account&action=addplan' method='post'>
							1<input type="text" class="addPlane"  maxlength="18"name='pn1'><br>
							2<input type="text" class="addPlane" maxlength="18"name='pn2'><br>
							3<input type="text" class="addPlane" maxlength="18"name='pn3'><br>
							4<input type="text" class="addPlane" maxlength="18"name='pn4'><br>
							5<input type="text" class="addPlane" maxlength="18"name='pn5'><br>
							6<input type="text" class="addPlane" maxlength="18"name='pn6'><br>
							7<input type="text" class="addPlane" maxlength="18"name='pn7'><br>
							8<input type="text" class="addPlane" maxlength="18"name='pn8'><br>
							9<input type="text" class="addPlane" maxlength="18"name='pn9'><br>
							10<input type="text" class="addPlane" id="input10" maxlength="18" name='pn10'><br>
							 <input type='submit' value='Zapisz :)' id="save">

						</form>
					</div>
					<div class="tab" id="tab3">
						<h1>Dodaj swój plan lekcji na środę</h1>
						<form class="addplane" action='index.php?request=Account&action=addplan' method='post'>
							1<input type="text" class="addPlane"  maxlength="18"name='pn1'><br>
							2<input type="text" class="addPlane" maxlength="18"name='pn2'><br>
							3<input type="text" class="addPlane" maxlength="18"name='pn3'><br>
							4<input type="text" class="addPlane" maxlength="18"name='pn4'><br>
							5<input type="text" class="addPlane" maxlength="18"name='pn5'><br>
							6<input type="text" class="addPlane" maxlength="18"name='pn6'><br>
							7<input type="text" class="addPlane" maxlength="18"name='pn7'><br>
							8<input type="text" class="addPlane" maxlength="18"name='pn8'><br>
							9<input type="text" class="addPlane" maxlength="18"name='pn9'><br>
							10<input type="text" class="addPlane" id="input10" maxlength="18" name='pn10'><br>
							 <input type='submit' value='Zapisz :)' id="save">


						</form>

					</div>
					<div class="tab" id="tab4" action='index.php?request=Account&action=addplan' method='post'>
						<h1>Dodaj swój plan lekcji na czwartek</h1>
						<form class="addplane" action='index.php?request=Account&action=addplan' method='post'>
							1<input type="text" class="addPlane"  maxlength="18"name='pn1'><br>
							2<input type="text" class="addPlane" maxlength="18"name='pn2'><br>
							3<input type="text" class="addPlane" maxlength="18"name='pn3'><br>
							4<input type="text" class="addPlane" maxlength="18"name='pn4'><br>
							5<input type="text" class="addPlane" maxlength="18"name='pn5'><br>
							6<input type="text" class="addPlane" maxlength="18"name='pn6'><br>
							7<input type="text" class="addPlane" maxlength="18"name='pn7'><br>
							8<input type="text" class="addPlane" maxlength="18"name='pn8'><br>
							9<input type="text" class="addPlane" maxlength="18"name='pn9'><br>
							10<input type="text" class="addPlane" id="input10" maxlength="18" name='pn10'><br>
							 <input type='submit' value='Zapisz :)' id="save">

						</form>

					</div>
					<div class="tab" id="tab5" action='index.php?request=Account&action=addplan' method='post'>
						<h1>Dodaj swój plan lekcji na piątek</h1>
						<form class="addplane">
							1<input type="text" class="addPlane"  maxlength="18"name='pn1'><br>
							2<input type="text" class="addPlane" maxlength="18"name='pn2'><br>
							3<input type="text" class="addPlane" maxlength="18"name='pn3'><br>
							4<input type="text" class="addPlane" maxlength="18"name='pn4'><br>
							5<input type="text" class="addPlane" maxlength="18"name='pn5'><br>
							6<input type="text" class="addPlane" maxlength="18"name='pn6'><br>
							7<input type="text" class="addPlane" maxlength="18"name='pn7'><br>
							8<input type="text" class="addPlane" maxlength="18"name='pn8'><br>
							9<input type="text" class="addPlane" maxlength="18"name='pn9'><br>
							10<input type="text" class="addPlane" id="input10" maxlength="18" name='pn10'><br>
							 <input type='submit' value='Zapisz :)' id="save">



						</form>
					</div>
				</div>	

			</div>
	</div>

</body>
</html>