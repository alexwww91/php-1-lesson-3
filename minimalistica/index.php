<?php
$title = 'Hello, World';
$header = 'Hello, World';
$thisYear = date("Y");
$menu = [
	"home" => ["url" => "#"],
	"archive" => ["url" => "#", "subcat" => [
			"2021" => ["url" => "#"],
			"2020" => ["url" => "#"],
			"2019" => ["url" => "#"],
		],
	],
	"contacts" => ["url" => "#"],
]
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?php echo $title ?></title>
</head>

<body>
	<div id="content">
		<h1>
			<?php echo $header ?>
		</h1>
		<ul id="menu">
		<?php
		foreach ($menu as $keyMenu => $valueMenu) {?>
			<li ><a href="<?php $valueMenu['url'] ?>"><?= $keyMenu ?></a>
			<?php
			if ($valueMenu['subcat']) {?>
				<ul class="submenu"><?php
				foreach ($valueMenu['subcat'] as $key => $val) {
					echo '<li ><a href="'.$val['url'].'">'.$key.'</a></li>';
				}?>
				</ul><?php
			}?>
			</li><?php
		}
		?>
		</ul>

		<!-- <ul id="menu">
			<li ><a href="#">home</a></li>
			<li ><a href="#">archive</a>
				<ul class="submenu">
					<li><a href="#">2021</a></li>
					<li><a href="#">2020</a></li>
					<li><a href="#">2019</a></li>
				</ul>
			</li >
			<li><a href="#">contact</a></li>
		</ul> -->

		<div class="post">
			<div class="details">
				<h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>

			</div>
			<div class="body">
				<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a
					pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi
					magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper
					commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis
					dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel,
					aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a
					eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam
					erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
			</div>
			<div class="x"></div>
		</div>

		<div class="col">
			<h3><a href="#">Ut enim risus rhoncus</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum
				sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus
				sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam
				sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin
				gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col">
			<h3><a href="#">Maecenas iaculis leo</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum
				sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus
				sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam
				sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin
				gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Quisque consectetur odio</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum
				sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus
				sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam
				sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin
				gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>

		<div id="footer">
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/"
					title="Free CSS Templates">Solucija</a> <?php echo $thisYear ?></p>
		</div>
	</div>
</body>

</html>