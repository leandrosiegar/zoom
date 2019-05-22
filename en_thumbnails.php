<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
	<title>EasyZoom, jQuery image zoom plugin</title>
	<link rel="stylesheet" href="css/easyzoom.css" />
</head>
<body>
	<div class="container">
		<section id="example">
			<div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
				<a href="imagenes/zoom_1.jpg">
					<img src="imagenes/standard_1.jpg" alt="" width="640" height="360" />
				</a>
			</div>

			<ul class="thumbnails">
				<li>
					<a href="imagenes/zoom_1.jpg" data-standard="imagenes/standard_1.jpg">
						<img src="imagenes/thumbnail_1.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="imagenes/zoom_2.jpg" data-standard="imagenes/standard_2.jpg">
						<img src="imagenes/thumbnail_2.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="imagenes/zoom_3.jpg" data-standard="imagenes/standard_3.jpg">
						<img src="imagenes/thumbnail_3.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="imagenes/zoom_4.jpg" data-standard="imagenes/standard_4.jpg">
						<img src="imagenes/thumbnail_4.jpg" alt="" />
					</a>
				</li>
			</ul>
		</section>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/easyzoom.js"></script>
	<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
	</script>
</body>
</html>
