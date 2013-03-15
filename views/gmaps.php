
<html>
<head>
	<meta charset=utf-8>
	<title>Kohana Google Maps 3 module</title>
	<style>
	#map_container {
		width: 500px;
		height: 500px;
		border: 1px solid #000;
	}
	</style>

	<!-- Reference to external Google Maps API-->
	<?php echo $external_scripts?>

	<script type="text/javascript">
		window.onload = function() {
			// Reference to autogenerated code
			<?php echo $internal_scripts?>
		};
	</script>

</head>
<body>

	<!-- This layer will contain the map -->
	<div id="map_container"></div>

</body>
</html>
