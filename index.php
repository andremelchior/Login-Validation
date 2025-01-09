<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Portal de Noticias</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
		}
		.conteiner-1{
			display:flex;
			align-items:center;
			background-color: black;
			width: 100%;
			height: 50px;
		}
		ul{
			margin: 70px;
		}
		li{
			display: inline;
			color: white;
			margin-left: 30px;	
		}
		.button{
			border:0;
	        background:black;
	        display: block;
	        margin: 20px auto;
	        text-align: center; 
         	border:3px solid #2ecc71;
        	padding: 5px 30px;
	        outline: none;
	        color: white;
	        border-radius: 24px;
	        transition: 0.25s;
	        cursor: pointer;
		}
		.button:hover{
			background: #2ecc71;
		}
		.btn{
			margin-left: 400px;
			margin-top: 25px;
		}	
		.busca{
		    background:black;
	        display: block;
	        margin: 20px auto;
	        border:3px solid #2ecc71;
	        padding: 5px;
	        width: 200px;
	        outline: none;
	        color: white;
	        border-radius: 24px;
	        transition: 0.25s;
		}
		.busca:focus{
			width: 280px;
	        border-color: #3498db;
		}
		.pesquisar{
			margin-left: 950px;
			margin-top: -93px;
		}
		.img-1{
            width: 30px;
            height: 30px;
            margin-left: 65px;
		}
	</style>
</head>
<body>
    <div class="conteiner-1">
    	<ul>
    		<li>Inicio</li>
    		<li>Comunidade</li>
    		<li>Serviços</li>
    		<li>Contate-nos</li>
    	</ul>
    </div>
    <div class="img-1">
    	<img class="etec" src="/Aula_03/etec.jpg">
    </div>
    <div class="btn">
    	<a href="login.php"><button class="button">Entrar</button></a>
    </div>
    <div class="pesquisar">
    	<input class="busca" type="text" name="" placeholder="    Pesquisar...">
    </div>
    <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-top: 80px;">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Paginas</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Noticias Recentes</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Noticias Especificas</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Política</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Economia</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Esporte</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">TV</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Famosos</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tempo</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Documentarios</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Futebol</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Canais +</a>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-bottom: 30px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/Aula_03/sp.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/Aula_03/sp.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/Aula_03/sp.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>