@extends('layouts/structure')
@section('content')
<header id="header" class="dark-style dark-style clear">
	<div id="search-tabs-entradas" class="wrapper">
		<div id="search-tabs-2" >
			<p class="st"></p>
			<div class="xcaret">
				<div style="background:#EFFBFB" class="infosup col-sm-12" >
					<h3>¡RESERVA HOY!</h3>
				</div>
				<form class="fxcaret" id="parquess" action="" method="post" >
					<input type="hidden" name="tipotours" value="20">
					<input type="hidden" id="Padultos" name="precioadultos" value="<?php //echo $entradas[0]->PrecioAdulto;?>">
					<input type="hidden" id="Pmenores" name="preciomenores" value="<?php //echo $entradas[0]->PrecioMenor;?>">
					<input type="hidden" name="Parque" value="<?php //echo $parques->Nombre;?>">
					<input type="hidden" name="Ubicacion" value="<?php //echo $parques->Ubicacion; ?>">
					<input type="hidden" name="link" value="/img/tour/parques/<?php //echo $parques->Categoria; ?>/<?php //echo $namep; ?>/">
					<input type="hidden" id="imgentrada" name="imagen" value="<?php //echo $entradas[0]->Imagen; ?>">
					<input type="hidden" id="identradas" name="id" value="<?php //echo $entradas[0]->idtipoentrada;?>">
					<div style="" class="Parquex" >
						<input style="display: none;" type="checkbox" id="transport" name="transport"/>
						<label style="display: none;" class="txttr" for="transport">Agregar Transportaci&oacute;n</label>
					</div>
					<div style="margin-top: 0px;" class="Parquex m" >
						<select class="ticket" name="entrada">
							<pre>
								<?php //foreach ($entradas as $key) { ?>
								<option value="<?php //echo $key->Nombre; ?>" ><?php //echo $key->Nombre; ?>fff</option>
								<?php// } ?>
							</select>
						</div>
						<div class="date m" >
							<input type="text" name="fecha" name="cal" id="cal" placeholder="tu visita" value="" class="datepicker to_datepicker cal" />
						</div>
						<div class="date right m" >
							<select name="horario" class="cant ">
								<?php //foreach ($horarios as $keys ) { ?>
								<option value="<?php //echo $keys['hora']; ?>"><?php //echo $keys['hora']; ?>dd</option>
								<?php //} ?>
								
							</select>
							<label for="time" class="time" ></label>
						</div>
						<div class="Parquex m" >
							<select class="cant" name="adultos" >
								<option value="1">1 Adulto</option>
								<option value="2">2 Adultos</option>
								<option value="3">3 Adultos</option>
								<option value="4">4 Adultos</option>
								<option value="5">5 Adultos</option>
								<option value="6">6 Adultos</option>
								<option value="7">7 Adultos</option>
								<option value="8">8 Adultos</option>
								<option value="9">9 Adultos</option>
								<option value="10">10 Adultos</option>
								<option value="11">11 Adultos</option>
								<option value="12">12 Adultos</option>
								<option value="13">13 Adultos</option>
								<option value="14">14 Adultos</option>
								<option value="15">15 Adultos</option>
								<option value="16">16 Adultos</option>
								<option value="17">17 Adultos</option>
								<option value="18">18 Adultos</option>
								<option value="19">19 Adultos</option>
								<option value="20">20 Adultos</option>
								<option value="21">21 Adultos</option>
								<option value="22">22 Adultos</option>
								<option value="23">23 Adultos</option>
								<option value="24">24 Adultos</option>
								<option value="25">25 Adultos</option>
							</select>
							<select class="cant ninios" name="menores">
								<option value="0">Ni&ntilde;os</option>
								<option value="1">1 Ni&ntilde;o</option>
								<option value="2">2 Ni&ntilde;os</option>
								<option value="3">3 Ni&ntilde;os</option>
								<option value="4">4 Ni&ntilde;os</option>
								<option value="5">5 Ni&ntilde;os</option>
								<option value="6">6 Ni&ntilde;os</option>
								<option value="7">7 Ni&ntilde;os</option>
								<option value="8">8 Ni&ntilde;os</option>
								<option value="9">9 Ni&ntilde;os</option>
								<option value="10">10 Ni&ntilde;os</option>
								<option value="11">11 Ni&ntilde;os</option>
								<option value="12">12 Ni&ntilde;os</option>
								<option value="13">13 Ni&ntilde;os</option>
								<option value="14">14 Ni&ntilde;os</option>
								<option value="15">15 Ni&ntilde;os</option>
								<option value="16">16 Ni&ntilde;os</option>
								<option value="17">17 Ni&ntilde;os</option>
								<option value="18">18 Ni&ntilde;os</option>
								<option value="19">19 Ni&ntilde;os</option>
								<option value="20">20 Ni&ntilde;os</option>
								<option value="21">21 Ni&ntilde;os</option>
								<option value="22">22 Ni&ntilde;os</option>
								<option value="23">23 Ni&ntilde;os</option>
								<option value="24">24 Ni&ntilde;os</option>
								<option value="25">25 Ni&ntilde;os</option>
							</select>
						</div>
						<div class="Parquex m" >
							<button class="btn-compra" onclick="validar()" type="button">Comprar</button>
						</div>
						<label class="tx16">Precios sujetos a cambios sin previo aviso. Aplican restricciones.</label>
					</form>
					<div style="background:red" class="infoinf">
						<div class="hreft1">
							<div class="monya">
								<span class="ad" >Precio Adulto</span>
								<p class="cost adul">$54542</p>
							</div>
							<div style="border-left:1px solid #FFF;" class="monya">
								<span class="ad">Precio Ni&ntilde;o</span>
								<p class="cost nin">333</p>
							</div>
						</div>
						<div  style="display: none; background:green; "> Ahorra hasta 12 meses sin <br> intereses. </div>
					</div>
				</div>
				
				<div class="recent-searchs mh clear menut2"> <img src="/img/tour/parques/Experiencias-Xcaret/Xcaret/path.png" alt="" width="306" height="39" usemap="#Map"/>
					<map name="Map">
					<area class="cld1" shape="rect" coords="16,9,112,33" href="/">
						<area class="cld2" shape="rect" coords="136,8,204,33" href="/Parques">
							<area class="cld3" shape="rect" coords="229,11,291,32" href="javascript:void(0);">
								</map>
							</div>
						</div>
					</div>
				</header>
				<div class="main-content">
					<article>
						<div class="grey-content clear">
							<div class="wrapper">
								<section class="ticketing-hotels">
									<div class="main-title">
										<h2 class="h2 titles">Entradas el parque!</h2>
									</div>
									<ul class="hotels-list">
										
										<li class="item hotel">
											<a data-fancybox data-type='iframe' data-src='https://kooningtravel.com/img/tour/AdmisiónXcaretPlus.pdf' class="thumb"  href='javascript:void(0);'>
												<div class="thumb-images"><img src="/img/tour/parques/Experiencias-Xcaret/Xcaret/Xcaret2.png" alt="el parque"></div>
												<div class="info">
													<h3 class="title">el parque!<br>
													<span class="category category-4CAT"><span class="category-name"></span></span></h3>
												</div>
											</a>
											<a class="txtt" data-fancybox data-type='iframe' data-src='https://kooningtravel.com/img/tour/EntradaXcaretParque.pdf' href='javascript:void(0);' ><p class="hotel-description">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												
											</p></a>
											<a data-fancybox data-type='iframe' data-src='https://kooningtravel.com/img/tour/EntradaXcaretParque.pdf' class="pdf"  href='javascript:void(0);' >Ver mas...</a>
										</li>
										
										
										<li class="item hotel"><a target="_blank" class="thumb" href="https://kooningtravel.com/hotels/5051/hotel-xcaret-mexico?d=5051&sd=2018-05-01&ed=2018-05-05&r=1&r1a=2&r1k=0&r1k1a=0&r1k2a=0&r1k3a=0&r2a=0&r2k=0&r2k1a=0&r2k2a=0&r2k3a=0&r3a=0&r3k=0&r3k1a=0&r3k2a=0&r3k3a=0&r4a=0&r4k=0&r4k1a=0&r4k2a=0&r4k3a=0&r5a=0&r5k=0&r5k1a=0&r5k2a=0&r5k3a=0">
											<div class="thumb-images"><img src="/img/tour/parques/Experiencias-Xcaret/Xcaret/Xcaret3.png" alt="Hotel Xcaret"></div>
											<div class="info">
												<h3 class="title">Hotel Xcaret<br>
												<span class="category category-4CAT"><span class="category-name"></span></span></h3>
											</div>
										</a>
										<p class="hotel-description">Hotel Xcaret M&eacute;xico es un destino enmarcado por la majestuosidad natural de la Riviera Maya y un dise&ntilde;o arquitect&oacute;nico que se sincroniza en armon&iacute;a con los elementos de esta tierra.</p>
									</li>
									
								</ul>
							</section>
							<div class="article">
								<section>
									<h2>Informaci&oacute;n sobre parque el parque!</h2>
									<div class="clear">
										<div id="tabs">
											<ul>
												<li><a href="#tabs-1">Descripci&oacute;n</a></li>
												<li><a href="#tabs-2">Politicas de privacidad</a></li>
											</ul>
											<div id="tabs-1">
												<div class="h1">Parque el parque!</div>
												<h3 class="h3">Mapa y descripci&oacute;n parque el parque!</h3>
												<a  href="javascript:void(0);"><img alt="Mapa del parque" class="left" src="/img/tour/parques/Experiencias-Xcaret/Xcaret/mapa-xcaret.png" style="margin-top: 0px; max-height: 250px;" /></a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
												proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												
												<iframe width="560" height="315" src="https://www.youtube.com/embed/8ofAxR3v3oU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
												
											</div>
											<div id="tabs-2">
												<iframe src="https://kooningtravel.com/img/tour/terminosycondiciones.pdf" width="750" height="800" style="border:none;"></iframe>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<?php //if(strcmp($parques->Longitud,'Nada') == 0){}else{?>
					<div class="white-content full-content clear">
						<section class="mapas">
							<h2 class="h2">Mapa Parque el parque! </h2>
							<div class="mapa-box mapa-ciudad">
								<div class="mapa-bg">
									<div class="google-maps" id="map-canvas">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8883.815161584382!2d-87.12312858683697!3d20.5805355232904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8042e81e921809a5!2sXcaret!5e0!3m2!1ses-419!2smx!4v1518549365644" width="100%" height="100%" frameborder="0" style="border:0; margin: 0px auto; float: none; display: inline-block;" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</section>
					</div>
					
				</article>
				
				<!-- PARQUES EXPERIENCIAS XCARET 2018 -->
				<div class="grey-content clear" id="parque-de-atracciones-parques-tematicos">
					<div class="wrapper icon-tickets categoria-tickets clear  topt">
						<h2 class="h2">la categoria</h2>
						<div class="carousel-wrapper">
							<div class="carousel center">
								<ul class="ticket-list clear">
									<li class="item">
										<div class="image-wrapp"><a href="/Parques/Xcaret"><img src="/img/tour/parques/Experiencias-Xcaret/Xcaret/xcaret.png" alt=" " /></a></div>
										<h3><a href="/Parques/Xcaret">¡Xcaret, Orgullo de M&eacute;xico!</a></h3>
										<p><a href="/Parques/Xcaret">Xcaret, Riviera Maya Quintana Roo, M&eacute;xico.</a></p>
									</li>
									
								</ul>
							</div>
							<a class="carousel-prev disabled"><span class="ir"></span></a> <a class="carousel-next"><span class="ir"></span></a> </div>
							<a class="all-link" href="/Parques">Todos los Parques | Kooning Travel</a> </div>
						</div>
					</div>
					@stop