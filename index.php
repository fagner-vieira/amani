<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amani Design</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/css.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>

		<div class="container-fluid bgColorOne">
			<div class="container">
				<div class="col-lg-12">
					<img src="images/logo.jpg" class="img-responsive center-block" alt="">
				</div>
			</div>
		</div>


		<header class="container-fluid bgImageOne">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 bgCall">
						<p class="txtCallOne">Cadastre-se já<br/>e garanta</p>
						<p class="txtCallTwo">de desconto</p>
					</div>

					<div class="col-lg-6 bgFormMarg">
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3 bgForm">
								<p class="txtCallThree">PREENCHA e ganhe!</p>
								<div class="formLocale">


								<!--   Formulário  -->
									<form class="form-horizontal" name="form-gohotsale" id="form-gohotsale" method="POST" action="https://gohotsale.com.br/leads" novalidate>
										<input type="hidden" name="hotsite" id="hotsite" value="polo-interiores-hotsite">
										<input type="hidden" name="company" id="company" value="polo-interiores">
										<fieldset>
											<?php if(isset($_GET['error']) && $_GET['error'] === 'profanity') { ?>
											<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Seja mais educado! </div>
											<?php } ?>
											<?php if(isset($_GET['error']) && $_GET['error'] === 'repeat') { ?>
											<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Erro:</span> Verifique os seus dados e tente novamente! </div>
											<?php } ?>
											<!-- Text input-->
											<div class="form-group">
											<!--label class="col-md-4 control-label" for="nome">Nome</label-->
											<div class="col-md-12">
												<input id="name" name="name" type="text" data-required placeholder="Nome" class="form-control input-md formulario" value="<?php if(isset($_GET['name'])) { echo $_GET['name']; } ?>" required="required">
											</div>
											</div>
											<!-- Text input-->
											<div class="form-group">
											<!--label class="col-md-4 control-label" for="email">E-mail</label-->
											<div class="col-md-12">
												<input id="email" name="email" type="email" data-required placeholder="E-mail" class="form-control input-md formulario" value="<?php if(isset($_GET['email'])) { echo $_GET['email']; } ?>" required="required">
											</div>
											</div>
		
											<!-- Text input-->
											<div class="form-group">
											<!--label class="col-md-4 control-label" for="telefone">Telefone</label-->
											<div class="col-md-12">
												<input id="phone" name="phone" type="text" data-required required="required" placeholder="Telefone" value="<?php if(isset($_GET['phone'])) { echo $_GET['phone']; } ?>" class="form-control input-md formulario">
											</div>
											</div>
		
											<!-- Button -->
											<div class="form-group">
											<!--label class="col-md-4 control-label" for="enviar"></label-->
											<div class="col-md-12" style="text-align:center; margin-bottom: 10%;">
												<button id="enviar" name="enviar" class="hotEnviar">ENVIAR E ENTRAR NO SITE</button>
											</div>
											</div>
										</fieldset>
									</form>
							    <!--   Formulário  -->



								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</header>

		
		<section class="container-fluid bgColorTwo">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<img src="images/linha.jpg" class="center-block" alt="">
						<h1>Móveis Planejados e Sob Medida</h1>
						<p class="txtSectionOne">A Amani contempla todos os segmentos de mercado com suas diferentes marcas, acabamentos impecáveis e matéria prima de qualidade, produtos 100% em MDF, garantindo a excelência e exclusividade no design que constrói a história de sucesso da Amani.</p>
						<img src="images/linha.jpg" class="center-block" alt="">
					</div>
				</div>
			</div>
		</section>


		<section class="container-fluid bgColorThree">
			<div class="container">
				<div class="row rowMarginOne">
					<div class="col-lg-3 colOne">
						<img src="images/img01.jpg" class="img-responsive center-block noPadding" alt="">
						<p class="txtOne">Apartamento 40m2</p>
						<p class="txtTwo">6 ambientes</p>
						<p class="text-center"><button type="button" class="btn btn-primary">7.900,00 em 10x</button></p>
					</div>
					<div class="col-lg-1">&nbsp;</div>
					<div class="col-lg-3 colOne">
						<img src="images/img02.jpg" class="img-responsive center-block noPadding" alt="">
						<p class="txtOne">Apartamento 70m2</p>
						<p class="txtTwo">8 ambientes</p>
						<p class="text-center"><button type="button" class="btn btn-primary">14.000,00 em 10x</button></p>
					</div>
					<div class="col-lg-1">&nbsp;</div>
					<div class="col-lg-3 colOne">
						<img src="images/img03.jpg" class="img-responsive center-block noPadding" alt="">
						<p class="txtOne">Apartamento 90m2</p>
						<p class="txtTwo">9 ambientes</p>
						<p class="text-center"><button type="button" class="btn btn-primary">23.000,00 em 10x</button></p>
					</div>
				</div>
			</div>
		</section>


		<section class="container-fluid BgColorFour">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="txtThree">Atua no mercado do Grande ABC com mais de 40 anos<br/>produzindo móveis residenciais e também corporativos com<br/>6 anos de garantia e com clientes 100% satisfeitos. </p>
					</div>
				</div>
			</div>
		</section>


		<section class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 rowMarginOne">
						<img src="images/img04.png" class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-3 rowMarginOne">
						<img src="images/img05.png" class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-3 rowMarginOne">
						<img src="images/img06.png" class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-3 rowMarginOne">
						<img src="images/img07.png" class="center-block img-responsive" alt="">
					</div>
				</div>
			</div>
		</section>


		<section class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 rowMarginOne">
						<img src="images/img04.png" class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-3 rowMarginOne">
						<img src="images/img05.png" class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-3 rowMarginOne">
						<img src="images/img06.png" class="center-block img-responsive" alt="">
					</div>
					<div class="col-lg-3 rowMarginOne">
						<img src="images/img07.png" class="center-block img-responsive" alt="">
					</div>
				</div>
			</div>
		</section>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>