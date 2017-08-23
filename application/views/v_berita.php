<!DOCTYPE html>
<html>
<head>
	<title>SPPT</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/materialize/css/materialize.css'); ?>">
</head>
<body style="float: left; width: 100%; background-size: cover; center no-repeat; overflow: hidden; background: url( <?php echo base_url('assets/gambar/ss.jpg'); ?>)">

<div class="row">
	<div class="col s12">
	<nav class="transparent z-depth-0">
	<div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
	</div>	
	
</div>
    
  <script type="text/javascript">
  	$(".button-collapse").sideNav();
  </script>
</body>
</html>