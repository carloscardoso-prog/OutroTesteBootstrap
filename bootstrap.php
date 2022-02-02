<!DOCTYPE html>
<html>
<style type="text/css" media="screen">
	.buttons{
		background-color: #d3d3d3;
	}
	.btn-group-lg{
		border: 1px solid black;
	}
	.carousel-item{
		height: 32rem;
		background: #777;
		color: white;
	}
	.container{
		vertical-align: bottom;
	}

</style>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
</head>
<body>
	<!-- 
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="container">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="#" class="btn btn-lg btn-primary">
						Sign up today
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<div class="container">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="#" class="btn btn-lg btn-primary">
						Sign up today
					</a>
				</div>
			</div>
			<a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
				<span class="sr-only">Previous</span>
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
				<span class="sr-only">Next</span>
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div>
	</div> -->


	<div id="carouselRandom" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#theCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#theCarousel" data-slide-to="1"></li>
			<li data-target="#theCarousel" data-slide-to="2"></li>
		</ol>
	</div>

	<div class="carousel-inner">
		<div class="item active">
			<div class="slide1"></div>
			<div class="carousel-caption">
				<h1>Amazing Backgrounds</h1>
				<p>Thousands of Backgrounds for free</p>
				<p><a href="#" class="btn btn-primary btn-sm">Get them Now</a></p>
			</div>
		</div>

		<div class="item">
			<div class="slide2"></div>
			<div class="carousel-caption">
				<h1>Amazing Backgrounds</h1>
				<p>Thousands of Backgrounds for free</p>
				<p><a href="#" class="btn btn-primary btn-sm">Get them Now</a></p>
			</div>
		</div>

		<div class="item">
			<div class="slide3"></div>
			<div class="carousel-caption">
				<h1>Amazing Backgrounds</h1>
				<p>Thousands of Backgrounds for free</p>
				<p><a href="#" class="btn btn-primary btn-sm">Get them Now</a></p>
			</div>
		</div>
	</div>

	<a href="#theCarousel" class="left carousel-control" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>

	<a href="#theCarousel" class="right carousel-control" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>

	<div class="container">
		<div class="page-header">
			<h1>BootStrap Tutorial</h1>
		</div>	
		<div class="buttons">
			<div class="jumbotron">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<p><a href="#" class="btn btn-default btn-lg" role="button">Let's commince forth</a></p>
				<p><a href="#" class="btn btn-default" role="button">Let's commince forth</a></p>
				<p><a href="#" class="btn" role="button">Let's commince forth</a></p>
				<p><a href="#" class="btn disabled" role="button">Let's commince forth</a></p>
			</div>

			<div class="btn-group btn-group-lg" role="group">
				<button type="button" class="btn btn-default">Smol</button>
				<button type="button" class="btn btn-default">Med</button>
				<button type="button" class="btn btn-default">Biwg</button>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
				<h4><a href="#col1Content" data-toggle="collapse">Column1</a></h4>

				<div id="col1Content" class="collapse in">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</div>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="well hidden-sm hidden-md hidden-lg">
				<p>Screen &lt; 768px</p>
			</div>
			<div class="well hidden-md hidden-lg">
				<p>Screen &lt; 768px</p>
			</div>
			<div class="well hidden-lg">
				<p>Screen &lt; 768px</p>
			</div>
			<div class="well">
				<p>Screen &lt; 768px</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-bordered table-striped table-hover ">
					<tbody>
						<tr>
							<td class="legenda">
								carousel:
							</td>
							<td>
								<input type="text" name="carousel" autocomplete=off>
							</td>
						</tr>
						<tr>
							<td class="legenda">
								Nascimento
							</td>
							<td>
								<input type="text" name="dia" size="2"><input type="text" name="mes" size="2"><input type="text" name="ano" size="5">
							</td>
						</tr>
						<tr>
							<td class="legenda">
								CPF
							</td>
							<td>
								<input type="text" name="cpf">
							</td>
						</tr>
						<tr>
							<td class="legenda">
								RG
							</td>
							<td>							
								<input type="text" name="rg">
							</td>
						</tr>
						<tr>
							<td class="legenda">
								Endereço
							</td>
							<td>
								<input type="text" name="endereco">
							</td>
						</tr>
						<tr>
							<td class="legenda">
								Telefone
							</td>
							<td>							
								<input type="text" name="telefone">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>