@extends('layouts/structure')

@section('content')

	<div class="body-cart" >
		<div class="col-md-9" >

			<div class="row-fluid" >	
	            <div class="small">
	          		<div class="bloque">
	          			<img class="img-cart" alt="parques,parque,tour,kooning travel" src="/img/parques/Experiencias-Xcaret/Xcaret/xcaret.png">
		                <h2>Hotel</h2>
		                <h3>Grand Hotel Acapulco and Convention Center</h3>
	              	</div>
		              <div class="bloque center">
							<p><i class="fa fa-building" aria-hidden="true"></i><span>Grand Hotel Acapulco and Convention Center</span></p>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i><span> Acapulco, México</span></p>
							<p><i class="fa fa-clock-o" aria-hidden="true"></i><span>Llegada Tuesday, 21/Aug/2018</span></p>
							<p><i class="fa fa-clock-o" aria-hidden="true"></i><span>Salida Saturday, 25/Aug/2018</span></p>
							<div class="roms" >
								<div class="vacancy" >
									<i class="fa fa-male" aria-hidden="true"></i>
									<span>2 Adultos</span>
								</div>
								<div class="vacancy" >
									<i class="fa fa-child" aria-hidden="true"></i>
									<span> 0 Menores  Menores</span>
								</div>
								
							</div>
		              </div>
		              <div class="bloque">
		                 <p class="price-r" >
		                 	<strong class="price-roms" >MXN $7,495.60</strong>
		                    <a class="del-room" ><span class="del-icon"></span></a>
		                  </p>
		              </div>
	            </div>
			</div>
	


      <div class="extras" >    
          <div class="row">
            <h4 class="producto">Los mejores parques tematicos KoonningTravel!</h4>
            
            <a class="top" target="_blank" href="/Parques/Xcaret">
                <div class="conte"> <img src="/img/extras/xcaretl.png" alt="Xcaret, xperiencias,parque" class="img-responsive center-block" >
                  <div class="card-hotel"> <span class="card-txt-clase">Parque Xcaret!</span>
                    <p class="card-txt-hotel">Entradas Xcaret!</p>
                    <figure class="img-hotel-disney"> <img src="/img/extras/xcaret.png" alt="xcaret, parques, xperiencias" class="img-w"></figure>
                    <a href="/Parques/Xcaret" target="_blank">
                    <div class="card-precios"> <span class="txt-paquete">Entrada Adulto</span>
                      <p class="txt-precio">desde: <span class="precio">1,874.81MXN</span></p>
                    </div>
                    </a> <a href="/Parques/Xcaret" target="_blank">
                    <div class="card-precios"> <span class="txt-paquete">Entrada Niño</span>
                      <p class="txt-precio">desde: <span class="precio">$937.31MXN</span></p>
                    </div>
                    </a>
                    <p class="mensualidades">*Hasta 12 Meses sin Intereses</p>
                  </div>
                </div>
              </a>
                
             <a class="top" target="_blank" href="/Tours/Chichen-Itza"> 
                <div class="conte"> <img src="/img/extras/mayalandl.png" alt="Chichen Itza, Tours, tour" class="img-responsive center-block" >
                  <div class="card-hotel"> <span class="card-txt-clase">Tour Mayaland!</span>
                    <p class="card-txt-hotel">Entradas Chichen Itza!</p>
                    <figure class="img-hotel-disney"> <img src="/img/extras/mayaland.png" alt="mayaland, tour, chichen itza" class="img-w"></figure>
                    <a target="_blank" href="/Tours/Chichen-Itza" target="_blank">
                    <div class="card-precios"> <span class="txt-paquete">Entrada Adulto</span>
                      <p class="txt-precio">desde: <span class="precio">$2,109.80MXN</span></p>
                    </div>
                    </a> <a href="/Tours/Chichen-Itza" target="_blank">
                    <div class="card-precios"> <span class="txt-paquete">Entrada Niño</span>
                      <p class="txt-precio">desde: <span class="precio">$1,534.40MXN</span></p>
                    </div>
                    </a>
                    <p class="mensualidades">*Hasta 12 Meses sin Intereses</p>
                  </div>
                </div>
             </a>   

             <a class="top" target="_blank" href="/Parques/Cirque-Soleil">
                <div class="conte"> <img src="/img/extras/joya.png" alt="soleil, parque, circus" class="img-responsive center-block" >
                  <div class="card-hotel"> <span class="card-txt-clase">Parque La Joya</span>
                    <p class="card-txt-hotel">Entradas Cirque Soleil!</p>
                    <figure class="img-hotel-disney"> <img src="/img/extras/lajoya.png" alt="Cirque Soleil, parques, parque" class="img-w"></figure>
                    <a target="_blank" href="/Parques/Cirque-Soleil" target="_blank">
                    <div class="card-precios"> <span class="txt-paquete">Entrada Adulto</span>
                      <p class="txt-precio">desde: <span class="precio">$1,463.00MXN</span></p>
                    </div>
                    </a> <a href="/Parques/Cirque-Soleil" target="_blank">
                    <div class="card-precios"> <span class="txt-paquete">Entrada Niño</span>
                      <p class="txt-precio">desde: <span class="precio">$1,463.00MXN</span></p>
                    </div>
                    </a>
                    <p class="mensualidades">*Hasta 12 Meses sin Intereses</p>
                  </div>
                </div>
              </a>  

          </div>
      </div>
  <!--End Contenedor de Productos Extras -->



		</div>


		<div class="col-md-3" >	

          <div class="medium" >
            <div class="top-car">
              <h2>Reservacion</h2>
              <h3>Datos de Reserva </h3>
            </div>
                 
              <form name="contactform" id="contactform" class="needs-validation" action="/hotels/confirm" onsubmit="" method="post">
	               <div style="display: none;" >
		                <input type="hidden" name="name2" />
		                <input type="hidden" name="Aerolinea" />
		                <input type="hidden" name="NumVuelo" />
		                <input type="hidden" name="name1" />
		                <input type="hidden" name="lname2" />
		                <input type="hidden" name="lname1" />
	                </div>
                
                 
            
                      
                      <div class="form-row">
                      	<p class="main-title" >Datos del traslado</p>
                        <div class="marquito">                          
                          <input type="text" class="form-control" autocomplete="on" name="Aerolinea" id="validationCustom01" placeholder="Aerolinea" required>
                        </div>

                        <div class="marquito">
                          <p clas> Si tiene escalas proporciona el último vuelo</p>
                          <input type="text" class="form-control" autocomplete="on" name="NumVuelo" id="validationCustom02" placeholder="Numero de vuelo" required>
                        </div>
                      </div>


                      
    
                    <div class="form-row">
                    	<p class="main-title">Datos de Reserva</p>
						<div class="marquito">
							<input type="text" class="form-control" autocomplete="on" name="nombre" id="validationCustom01" placeholder="Nombre" required>
							<input type="text" class="form-control" autocomplete="on" name="apellidos" id="validationCustom02" placeholder="Apellidos" required>
							<input type="text" class="form-control" name="correo" id="validationCustomUsername" placeholder="Correo" aria-describedby="inputGroupPrepend" >
							 <input type="text" class="form-control" autocomplete="on" name="ciudad" id="validationCustom04" placeholder="Ciudad" required>
							 <input type="text" class="form-control" autocomplete="on" name="estado" id="validationCustom05" placeholder="Estado" required>

							 <select name="pais" id="pais" class="form-control">
                            <option value="Argentina">Argentina</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Canada">Canada</option>
                            <option value="Caribbean">Caribbean</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="Greece">Greece</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value="Korea">Korea</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Mexico" selected>Mexico</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Norway">Norway</option>
                            <option value="Panama">Panama</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                        </select>

						</div>                   
                    </div>

                    <div class="form-row">
                     
                      <div class="marquito">
                        <input type="text" class="form-control" autocomplete="on"  name="zip" id="validationCustom03" placeholder="Codigo postal" required />                     
                        <input type="text" class="form-control" autocomplete="on" name="telefono" id="validationCustom03" placeholder="Numero Telefonico" required />                     
                        <textarea name="address" id="Direccion" type="text" rows="4" placeholder="Direccion..." class="form-control" required=""></textarea>
                      </div>

                    </div>

	
                    <div class="form-row">
                      	<p class="main-title" >Datos del traslado</p>
							<div class="marquito">
								<input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nombre" required />
								<input type="text" name="lname" class="form-control" id="validationCustom02" placeholder="Apellido" required />
								<input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nombre Menor" required />                     
								<input type="text" name="lname" class="form-control" id="validationCustom02" placeholder="Apellido Menor" required />
							</div>
                         </div>         
                        
                           
                        <div class="form-row">
                        	 <p class="main-title" >Datos del huesped del cuarto</p>
                           <div class="marquito">
                              <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nombre" required>
                              <input type="text" name="lname" class="form-control" id="validationCustom02" placeholder="Apellido" required>
                           </div>
                        </div>                      
                     
                    <div class="form-row">
                    	<p class="main-title" >Datos del huesped del cuarto</p>
	                  	 <div class="marquito">
	                        <input class="form-check-input" name="acept" type="checkbox" id="ok" required>
	                        <label class="form-check-label" for="invalidCheck" ></label>
	                        <label>He leí­do y acepto el  <a href="https://kooningtravel.com/terminos" target="_blank">Aviso de privacidad</a></label>
	                    </div>
                    </div>

					 <div class="form-row">                 
                      <input id="btn_pagar" type="submit" class="btn btn-sm btn-caja-reserva" value="Pagar" >
                    </div>


                    
              </form>



			  <div class="form-group">  
                <p><strong>MXN $ </strong></p>
              </div>
            
          </div>



			<img style="display: none;" class="img-banner-right" src="/img/extras/banner-right.png" alt="viajes, vacaciones, parques,tour" >


		</div>	
	
	
	
	
	</div>
	
@stop


	