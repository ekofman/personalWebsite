<!DOCTYPE html PUBtrC "-//W3C//DTD HTML 4.01//EN">

<html>

<head>
	<meta name="artDescription" content="eric kofman">
	<meta name="keywords" content="eric kofman, stanford">
	<link rel="stylesheet" href = "ekofmanstyle.css">
	<title>
		Eric Kofman
	</title>
</head>

<body>
	<?php 
		include 'header.php';
		generateHeader();
	?>
	
	<div id = "main">
		<div id = "subtitle">
			Paintings
		</div>
		<span id = "previewWindow">
			<table>
				<tr>
				<td>
				<table>
				<tr>
					<td class = "paintingPreview" id = "1">
						<img src="img/photo1.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
					<td class = "paintingPreview" id = "2">
						<img src="img/photo2.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
					<td class = "paintingPreview" id = "3">
						<img src="img/photo3.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
					<td class = "paintingPreview" id = "4">
						<img src="img/photo4.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
					<td class = "paintingPreview" id = "5">
						<img src="img/photo5.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
				</tr>
				<!-- row -->
				<tr>
				<td class = "paintingPreview" id = "6">
					<img src="img/photo6.jpg" alt="artDescription" width="60px" height="60px" />
				</td>
				<td class = "paintingPreview" id = "7">
					<img src="img/photo7.jpg" alt="artDescription" width="60px" height="60px" />
				</td>
				<td class = "paintingPreview" id = "8">
					<img src="img/photo8.jpg" alt="artDescription" width="60px" height="60px" />
				</td>
				<td class = "paintingPreview" id = "9">
					<img src="img/photo9.jpg" alt="artDescription" width="60px" height="60px" />
				</td>
				<td class = "paintingPreview" id = "10">
					<img src="img/photo10.jpg" alt="artDescription" width="60px" height="60px" />
				</td>
				</tr>
				
				<!-- row -->
				
				<tr>
					<td class = "paintingPreview" id = "11">
						<img src="img/photo11.jpg" alt="artDescription" width="60px" height="60px" /> 
					</td>
					<td class = "paintingPreview" id = "12">
						<img src="img/photo12.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
					<td class = "paintingPreview" id = "13">
						<img src="img/photo13.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
					<td class = "paintingPreview" id = "14">
						<img src="img/photo14.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
					<td class = "paintingPreview" id = "15">
						<img src="img/photo15.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
				</tr>
				
				<!-- row -->
				
				<tr>
					<td class = "paintingPreview" id = "16">
						<img src="img/photo16.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
					<td class = "paintingPreview" id = "17">
						<img src="img/photo17.jpg" alt="artDescription" width="60px" height="60px" />
					</td>
				</tr>
			</table>
			</td>
			<td>
				<div id = "displayWindow">
					<img id = "displayImage" src="img/photo6.jpg" height = "350px" />;
				</div>
			</td>
			</tr>
		</table>
	</div>
		<script type="text/javascript">
			function setupMouseOverOut(painting){
				var paintingId = painting.id;
				var displayImage = document.getElementById("displayImage");
				painting.onmouseover = function() {
					console.log('<img src="img/photo'+paintingId+'.jpg" height="350px" />');
					displayImage.src = 'img/photo' + paintingId + '.jpg';
				};
			}

			var allPaintings = document.getElementsByClassName("paintingPreview");
			for (var i = 0; i < allPaintings.length; i++) {
				var painting = allPaintings[i];
				setupMouseOverOut(allPaintings[i]);
			}
		</script>
</body>
</html>