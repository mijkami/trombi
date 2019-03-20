<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trombi - V3 - 18/03/2019</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section>
		<header></header>

		<!-- Images used to open the lightbox -->
		<div id="trombi">
			<div class="row">
				<div class="col-2">
					<img src="images/photos/MAD_4284.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4288.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4291.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4293.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4296.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<img src="images/photos/MAD_4298.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4300.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4303.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4305.jpg" onclick="openModal();currentSlide(9)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4309.jpg" onclick="openModal();currentSlide(10)" class="hover-shadow">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<img src="images/photos/MAD_4310.jpg" onclick="openModal();currentSlide(11)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4314.jpg" onclick="openModal();currentSlide(12)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4320.jpg" onclick="openModal();currentSlide(13)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4323.jpg" onclick="openModal();currentSlide(14)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4324.jpg" onclick="openModal();currentSlide(15)" class="hover-shadow">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<img src="images/photos/MAD_4332.jpg" onclick="openModal();currentSlide(16)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4338.jpg" onclick="openModal();currentSlide(17)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4340.jpg" onclick="openModal();currentSlide(18)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4344.jpg" onclick="openModal();currentSlide(19)" class="hover-shadow">
				</div>
				<div class="col-2">
					<img src="images/photos/MAD_4345.jpg" onclick="openModal();currentSlide(20)" class="hover-shadow">
				</div>
			</div>
		</div>

		<!-- The Modal/Lightbox -->
		<div id="myModal" class="modal">
			<span class="close cursor" onclick="closeModal()">&times;</span>
			<div class="modal-content">

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">1 / 20</div>
						<img src="images/photos/MAD_4284.jpg">
					</div>
					<div class="col-5">	
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock1">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(1)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock1">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<!-- Radio buttons meteo forecast -->
									<div class="cc-selector">Mon humeur du jour :
								        <input id="One" type="radio" name="forecast" class="forecast" value="One" />
								        <label class="drinkcard-cc One" for="One"></label>
								        <input id="Two" type="radio" name="forecast" class="forecast" value="Two" />
								        <label class="drinkcard-cc Two"for="Two"></label>
								        <input id="Three" type="radio" name="forecast" class="forecast" value="Three" />
								        <label class="drinkcard-cc Three"for="Three"></label>
								        <input id="Four" type="radio" name="forecast" class="forecast" value="Four" />
								        <label class="drinkcard-cc Four"for="Four"></label>
								        <input id="Five" type="radio" name="forecast" class="forecast" value="Five" />
								        <label class="drinkcard-cc Five"for="Five"></label>
								        <!-- / Radio buttons meteo forecast -->
								    </div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(1)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">2 / 20</div>

						<img src="images/photos/MAD_4288.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock2">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(2)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock2">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(2)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">3 / 20</div>
						<img src="images/photos/MAD_4291.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock3">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(3)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock3">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(3)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">4 / 20</div>
						<img src="images/photos/MAD_4293.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock4">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(4)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock4">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(4)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">5 / 20</div>
						<img src="images/photos/MAD_4296.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock5">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(5)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock5">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(5)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">6 / 20</div>
						<img src="images/photos/MAD_4298.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock6">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(6)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock6">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(6)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">7 / 20</div>
						<img src="images/photos/MAD_4300.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock7">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(7)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock7">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(7)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">8 / 20</div>
						<img src="images/photos/MAD_4303.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock8">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(8)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock8">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(8)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">9 / 20</div>
						<img src="images/photos/MAD_4305.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock9">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(9)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock9">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(9)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">10 / 20</div>
						<img src="images/photos/MAD_4309.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock10">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(10)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock10">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(10)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">11 / 20</div>
						<img src="images/photos/MAD_4310.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock11">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(11)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock11">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(11)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">12 / 20</div>
						<img src="images/photos/MAD_4314.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock12">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(12)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock12">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(12)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">13 / 20</div>
						<img src="images/photos/MAD_4320.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock13">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(13)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock13">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(13)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">14 / 20</div>
						<img src="images/photos/MAD_4323.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock14">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(14)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock14">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(14)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">15 / 20</div>
						<img src="images/photos/MAD_4324.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock15">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(15)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock15">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(15)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">16 / 20</div>
						<img src="images/photos/MAD_4332.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock16">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(16)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock16">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(16)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">17 / 20</div>
						<img src="images/photos/MAD_4338.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock17">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(17)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock17">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(17)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">18 / 20</div>
						<img src="images/photos/MAD_4340.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock18">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(18)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock18">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(18)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">19 / 20</div>
						<img src="images/photos/MAD_4344.jpg">
					</div>
					<div class="col-5">
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock19">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(19)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock19">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(19)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="mySlides row">
					<div class="col-5">
						<div class="numbertext">20 / 20</div>
						<img src="images/photos/MAD_4345.jpg">
					</div>
					<div class="col-5">
						
						<h3>Prénom Nom</h3>
						<h4>19 ans</h4>
						<div id="profilBlock20">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div>
								<button id="btnGoEval" type="button" onclick="showEvalBlock(20)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock20">
							<h1>Evaluation</h1>
							<form id="evalForm" method="POST" action="">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="select">Maquetter une application:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur web statique et adaptable:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer une interface utilisateur web dynamique:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurit
								</button>
								<div class="panel">
									<div class="select">Créer une base de donnée:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer les composants d’accès aux données:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Développer la partie back-end d’une application web ou web mobile:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
									<div class="select">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce:
										<select>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>

								<button class="accordion">Mon humeur</button>
								<div class="panel">
									<div>Humeur du jour:
										<select name="myMood">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>	
									</div>
									<div>Message d'humeur:
										<textarea name="msgMood"></textarea>	
									</div>
								</div>

								<div>
									<button id="btnBack" type="button" onclick="showProfilBlock(20)">Back</button>
									<button id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Next/previous controls -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

				<!-- Caption text -->
				<div class="caption-container">
					<p id="caption"></p>
				</div>

				<!-- Thumbnail image controls -->
				<div class="row">
					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4284.jpg" onclick="currentSlide(1)" alt="Photo 1">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4288.jpg" onclick="currentSlide(2)" alt="Photo 2" >
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4291.jpg" onclick="currentSlide(3)" alt="Photo 3">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4293.jpg" onclick="currentSlide(4)" alt="Photo 4">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4296.jpg" onclick="currentSlide(5)" alt="Photo 5">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4298.jpg" onclick="currentSlide(6)" alt="Photo 6">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4300.jpg" onclick="currentSlide(7)" alt="Photo 7">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4303.jpg" onclick="currentSlide(8)" alt="Photo 8">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4305.jpg" onclick="currentSlide(9)" alt="Photo 9">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4309.jpg" onclick="currentSlide(10)" alt="Photo 10">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4310.jpg" onclick="currentSlide(11)" alt="Photo 11">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4314.jpg" onclick="currentSlide(12)" alt="Photo 12">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4320.jpg" onclick="currentSlide(13)" alt="Photo 13">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4323.jpg" onclick="currentSlide(14)" alt="Photo 14">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4324.jpg" onclick="currentSlide(15)" alt="Photo 15">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4332.jpg" onclick="currentSlide(16)" alt="Photo 16">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4338.jpg" onclick="currentSlide(17)" alt="Photo 17">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4340.jpg" onclick="currentSlide(18)" alt="Photo 18">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4344.jpg" onclick="currentSlide(19)" alt="Photo 19">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4345.jpg" onclick="currentSlide(20)" alt="Photo 20">
					</div>	
				</div>
			</div>
		</div>

		<footer></footer>
	</section>
	<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>