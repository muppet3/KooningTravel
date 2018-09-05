
@extends('layouts/structure')
@section('content')
<div class="body-cart" >
  <div class="col-md-12" >
    <ul class="nav nav-pills nav-wizard">
      <li id="step1" class="active">
        <div class="nav-wedge"></div>
        <a data-toggle="tab" >1. Reservacion</a>
        <div class="nav-arrow"></div>
      </li>
      <li id="step2">
        <div class="nav-wedge"></div>
        <a data-toggle="tab">2. Forma de pago</a>
      </li>
    </ul>
  </div>
  <div class="col-md-9" id="step-1" >
    <div class="row-fluid" >
      @empty ($cart)
      @else    
        @foreach ($cart as $key =>$item)
          @switch($item['type'])
              @case('hotel')
                <div class="small hotel">
                  <div class="bloque">
                    <img class="img-cart" alt="Hotel,parque,tour,kooning travel" src="/img/complements/extras/hotel.png">
                    <h2>Hotel</h2>
                    <h3 class="hotel-bloque" >{{$item['name']}}</h3>
                  </div>
                  <div class="bloque center">
                    <p><span><i class="fa fa-building" aria-hidden="true"></i> {{$item['name']}}</span></p>
                    <p><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item['location']}}</span></p>
                    <p><span><i class="fa fa-clock-o" aria-hidden="true"></i> Llegada {{$item['checkin']}}</span></p>
                    <p><span><i class="fa fa-clock-o" aria-hidden="true"></i> Salida {{$item['checkout']}}</span></p>
                    <div class="roms" >
                      <div class="vacancy" >                        
                        <span>{{$item['adults']}} Adultos <i class="fa fa-male" aria-hidden="true"></i> </span>
                      </div>
                      <div class="vacancy" >                        
                        <span> {{$item['children']}} Menores <i class="fa fa-child" aria-hidden="true"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="bloque">
                    <p class="price-r" >
                      <strong class="price-roms" >MXN ${{number_format($item['total'],2)}}</strong>
                      <a href="{{Request::root()}}/eliminar/{{$key}}" class="del-room" ><span class="del-icon"></span></a>
                    </p>
                  </div>
                </div>
                @break
              
              @case('traslado')
                <div class="small traslado">
                  <div class="bloque">
                    <img class="img-cart" alt="parques,parque,tour,kooning travel" src="/img/complements/extras/traslados.png">
                    <h2>Traslado</h2>
                    <h3 class="traslado-bloque">{{$item['destiny']}}</h3>
                  </div>
                  <div class="bloque center">
                    <p><strong> Hotel: </strong> {{$item['destiny']}} </p>
                    <p><strong> Fecha LLegada:</strong> {{$item['checkin']}}</p>
                    <p><strong> Hora LLegada:</strong> {{$item['timein']}}</p>
                    @isset ($item['checkout'])
                      <p><strong> Fecha Salida:</strong> {{$item['checkout']}}</p>
                      <p><strong> Hora Salida</strong> {{$item['timeout']}}</p>
                    @endisset
                    <p><strong> Servicios:</strong> {{$item['service']}}</p>
                    <p><strong> Camioneta tipo:</strong> {{$item['transport']}}</p>
                  </div>
                  <div class="bloque">
                    <p class="price-r" >
                      <strong class="price-roms" >MXN ${{number_format($item['total'])}}</strong>
                      <a class="del-room" href="{{Request::root()}}/eliminar/{{$key}}"  ><span class="del-icon"></span></a>
                    </p>
                  </div>
                </div>
                @break
              @case('parque'||'tour')
                  <div class="small {{$item['type']}}">
                    <div class="bloque">
                      <img class="img-cart" alt="{{$item['type']}}s,{{$item['type']}},kooning travel" src="/img/complements/extras/parques.png">
                      <h2>{{$item['activity']}}</h2>
                      <h3 class="{{$item['type']}}-bloque"> {{$item['ticket']}}</h3>
                    </div>
                    <div class="bloque center">
                      <p><strong>Fecha: </strong> {{$item['date']}}</p>
                      <p><strong><i class="fa fa-male" aria-hidden="true"></i> Adultos: </strong> {{$item['adults']}} &nbsp;&nbsp;&nbsp;
                        <strong><i class="fa fa-child" aria-hidden="true"></i> Niños: </strong> {{$item['children']}}</p>
                      <p><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicacion: </strong> {{$item['location']}}</p>
                      <p><strong><i class="fa fa-clock-o" aria-hidden="true"></i> Horario: </strong> {{$item['schedule']}}</p>
                    </div>
                    <div class="bloque">
                      <p class="price-r" >
                        <strong class="price-roms" >MXN ${{number_format($item['total'])}}</strong>
                        <a class="del-room" href="{{Request::root()}}/eliminar/{{$key}}" ><span class="del-icon"></span></a>
                      </p>
                    </div>
                  </div>
                  @break                    
          @endswitch
        @endforeach
      @endempty
    </div>
    <div class="extras" >
      <div class="row">
        <h4 class="producto">Los mejores parques tematicos KoonningTravel!</h4>
        <a class="top" target="_blank" href="/parques/Xcaret">
        <div class="conte">
          <img src="/img/complements/extras/xcaretl.png" alt="Xcaret, xperiencias,parque" class="img-responsive center-block" >
          <div class="card-hotel">
            <span class="card-txt-clase">Parque Xcaret!</span>
            <p class="card-txt-hotel">Entradas Xcaret!</p>
            <figure class="img-hotel-disney">
              <img src="/img/complements/extras/xcaret.png" alt="xcaret, parques, xperiencias" class="img-w"></figure>
            <a href="/parques/Xcaret" target="_blank">
            <div class="card-precios">
              <span class="txt-paquete">Entrada Adulto</span>
              <p class="txt-precio">desde: <span class="precio">1,874.81MXN</span></p>
            </div>
            </a>
            <a href="/parques/Xcaret" target="_blank">
              <div class="card-precios">
                <span class="txt-paquete">Entrada Niño</span>
                <p class="txt-precio">desde: <span class="precio">$937.31MXN</span></p>
              </div>
            </a>
            <p class="mensualidades">*Hasta 12 Meses sin Intereses</p>
          </div>
        </div>
        </a>
        <a class="top" target="_blank" href="/Tours/Chichen-Itza">
        <div class="conte">
          <img src="/img/complements/extras/mayalandl.png" alt="Chichen Itza, Tours, tour" class="img-responsive center-block" >
          <div class="card-hotel">
            <span class="card-txt-clase">Tour Mayaland!</span>
            <p class="card-txt-hotel">Entradas Chichen Itza!</p>
            <figure class="img-hotel-disney">
              <img src="/img/complements/extras/mayaland.png" alt="mayaland, tour, chichen itza" class="img-w"></figure>
            <a target="_blank" href="/Tours/Chichen-Itza" target="_blank">
            <div class="card-precios">
              <span class="txt-paquete">Entrada Adulto</span>
              <p class="txt-precio">desde: <span class="precio">$2,109.80MXN</span></p>
            </div>
            </a>
            <a href="/Tours/Chichen-Itza" target="_blank">
              <div class="card-precios">
                <span class="txt-paquete">Entrada Niño</span>
                <p class="txt-precio">desde: <span class="precio">$1,534.40MXN</span></p>
              </div>
            </a>
            <p class="mensualidades">*Hasta 12 Meses sin Intereses</p>
          </div>
        </div>
        </a>
        <a class="top" target="_blank" href="/parques/Cirque-Soleil">
        <div class="conte">
          <img src="/img/complements/extras/joya.png" alt="soleil, parque, circus" class="img-responsive center-block" >
          <div class="card-hotel">
            <span class="card-txt-clase">Parque La Joya</span>
            <p class="card-txt-hotel">Entradas Cirque Soleil!</p>
            <figure class="img-hotel-disney">
              <img src="/img/complements/extras/lajoya.png" alt="Cirque Soleil, parques, parque" class="img-w"></figure>
            <a target="_blank" href="/parques/Cirque-Soleil" target="_blank">
            <div class="card-precios">
              <span class="txt-paquete">Entrada Adulto</span>
              <p class="txt-precio">desde: <span class="precio">$1,463.00MXN</span></p>
            </div>
            </a>
            <a href="/parques/Cirque-Soleil" target="_blank">
              <div class="card-precios">
                <span class="txt-paquete">Entrada Niño</span>
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
  <div class="col-md-9" id="step-2" >
    <!-- aqui empiza -->
    <form class="form-pay-reservation"  action="/purchase" method="POST">
      @csrf
      
      <div id="radCardPayments" class="paymentType" >
        <ul id="rad-payment-form">
          <li class="selected allc">
            <input type="radio" id="credit1" name="radpayment1" value="radCC" checked="checked">
            <label for="credit1">Tarjeta de Crédito</label>
          </li>
          <li class=" amer">
            <input type="radio" id="credit2" name="radpayment1" value="radDC">
            <label for="credit2">Tarjeta de Débito</label>
          </li>
          <li class="">
            <input type="radio" data-fop-minimumamount="0" data-fop-multiple="false" data-fop-pays="0" data-fop-interest="0" data-fop-type="paypal" name="radpayment1" value="PAYPALMX" id="credit3">
            <label for="credit3"><img src="/img/complements/extras/bancos/PAYPALMX_xm.png" alt="PayPal (tarjeta de crédito o débito)"></label>
          </li>
        </ul>
      </div>
      <div id="first-fop" class="amount-pay box-blue-payment ">
        <div class="first-bloque" >
          <span class="Aviso-Mens ">
          <span>Contamos con 3, 6 y 9 meses sin intereses</span><img src="/img/complements/extras/bancos/tag-white.png">
          </span>
          <ul id="payment-form-BD" class="one-payment">
            <li class="selected text1">
              <input type="radio" data-fop-minimumamount="0" data-fop-multiple="true" data-fop-debit="false" data-fop-pays="0" data-fop-interest="0" data-fop-type="cc" name="payment1" value="VM" id="BC7" checked="checked">
              <label for="BC7" class="imgContainer"><img src="/img/complements/extras/bancos/v_xm.png" alt="Visa"></label>
            </li>
            <li class="ame text2" >
              <input type="radio" data-fop-minimumamount="0" data-fop-multiple="true" data-fop-debit="false" data-fop-pays="0" data-fop-interest="0" data-fop-type="cc" name="payment1" value="A" id="AMEX12">
              <label for="AMEX12" class="imgContainer"><img src="/img/complements/extras/bancos/amex_xm.png" alt="Amex"></label>
            </li>
          </ul>
          <div id="select-bank">
            <label for="banco-select">Elija un banco</label>
            <span id="fakeInput" class="fakeInput"><span class="selectedBank"><span class="logoBank"><img src="/img/complements/extras/bancos/1pago_m.png" alt="Un solo pago"></span>
            <strong>Todo los Bancos</strong>
            </span><img class="arrows" src="/img/complements/extras/bancos/sprite.gif"></span>
            <div id="fakeInput-required" class="stTxtError" style="display: none;">Opción inválida</div>
            <div id="note-debit-card" class="stLabTB" style="display: none;">* Por el momento no podemos recibir todas las tarjetas de débito. Por favor sólo use esta forma de pago si su banco se encuentra en esta lista.</div>
            <ul id="banco-select" class="bankSelection" style="display:none;">
              <li class="otherBank selected all" data-fop-id="-1" data-fop-issuerid="V" data-fop-mean="V" data-fop-minimumamount="0" >
                <span class="logoBank"><img src="/img/complements/extras/bancos/1pago_m.png" alt="Un solo pago"></span>
                <strong>Todo los Bancos</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="Santander-Serfin" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/Santander-Serfin_m.png"></span>
                <strong>Santander Serfin</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="Banorte" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/Banorte_m.png"></span>
                <strong>Banorte</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="IxeBanco" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/IxeBanco_m.png"></span>
                <strong>Banco Ixe</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="HSBC" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/HSBC_m.png"></span>
                <strong>HSBC</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="Scotiabank-Inverlat" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/Scotiabank-Inverlat_m.png"></span>
                <strong>Scotiabank Inverlat</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="Inbursa" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/Inbursa_m.png"></span>
                <strong>Inbursa</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="BancaAfirme" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/BancaAfirme_m.png"></span>
                <strong>Banca Afirme</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="BancodelBajio" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/BanBajio_m.png"></span>
                <strong>Banco del Bajio</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="BancaMifel" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/BancaMifel_m.png"></span>
                <strong>Banca Mifel</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="FAMSA" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/FAMSA_m.png"></span>
                <strong>Ahorro FAMSA</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="Banjercito" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/Banjercito_m.png"></span>
                <strong>Banjercito</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="BanRegio" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/BanRegio_m.png"></span>
                <strong>BanRegio</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="Invex" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/Invex_m.png"></span>
                <strong>Banco Invex</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="Itau" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/Itau_m.png"></span>
                <strong>Itaú</strong>
              </li>
              <li class="hidde" data-fop-id="-1" data-fop-issuerid="Liverpool" data-fop-mean="V" data-fop-minimumamount="1000"><span class="logoBank"><img src="/img/complements/extras/bancos/Liverpool_m.png"></span>
                <strong>Liverpool</strong>
              </li>
            </ul>
          </div>
        </div>
        <div class="second-bloque">
          <div class="ts" >
            <input type="radio" value="1" id="1" placeholder="1 Pago" name="MESES" checked />
            <span id='negritass'>1x {{number_format($total)}}</span>
            <input type="radio" value="03" id="3" placeholder="3 meses sin intereses" name="MESES" disabled />
            <span id='negritass'>3x {{number_format($tres)}}</span>
            <input  type="radio" value="06" id="6" placeholder="6 meses sin intereses" name="MESES" disabled />
            <span id='negritass'> 6x {{number_format($seis)}}</span>
            <input type="radio" value="09" id="9" placeholder="9 meses sin intereses" name="MESES" disabled />
            <span id='negritass'> 9x {{number_format($nueve)}}</span>
          </div>
          <div class="right">
            <div class="imput" >
              <input class="bgc" id="numbercard" placeholder="Numero de Tarjeta" type="text" name="sourceOfFunds[provided][card][number]" maxlength="16" required />
              <input class="bgm" id="month" placeholder="Mes" type="text" name="sourceOfFunds[provided][card][expiry][month]" maxlength="2" required />
              <input class="bgy" id="year" placeholder="Año" type="text" name="sourceOfFunds[provided][card][expiry][year]"  maxlength="2" required />
              <input class="bgs" id="securityCode" placeholder="CVC" type="text" name="sourceOfFunds[provided][card][securityCode]" maxlength="3" required />
            </div>
            <input type="submit" id="pagar" class="pagar" name="submit" value="Pagar">
          </div>
        </div>
      </div>
    </form>
    <!-- aqui termina -->
  </div>
  <div class="col-md-3" >
    <div class="medium" id="form-pago" >
      <div class="top-car">
        <h2>Reservacion</h2>
        <h3>Datos de la Reserva </h3>
      </div>
      <form  class="needs-validation" id="datoscliente" action="javascript:void(0)" method="post">
        @csrf
        <div style="display: none;" >
          <input type="hidden" name="name2" />
          <input type="hidden" name="Aerolinea" />
          <input type="hidden" name="NumVuelo" />
          <input type="hidden" name="name1" />
          <input type="hidden" name="lname2" />
          <input type="hidden" name="lname1" />
        </div>
        @isset ($traslado)
        
          <div class="form-row">
            <div class="marquito">
              <p class="main-title" >Datos del traslado</p>
              <input type="text" class="form-control" autocomplete="on" name="Aerolinea" id="aerolinea" placeholder="Aerolinea" required>
            </div>
            <div class="marquito">
              <p class="main-title" > Si tiene escalas proporciona el último vuelo</p>
              <input type="text" class="form-control" autocomplete="on" name="NumVuelo" id="numvuelo" placeholder="Numero de vuelo" required>
            </div>
          </div>
        @endisset
        
        <div class="form-row">
          <div class="marquito">
            <p class="main-title">Datos de la Reserva</p>
            <input type="text" class="form-control" autocomplete="on" name="nombre" id="nombre" placeholder="Nombre" required>
            <input type="text" class="form-control" autocomplete="on" name="apellidos" id="apellidos" placeholder="Apellidos" required>
            <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo" aria-describedby="inputGroupPrepend" >
            @isset ($hotel)
              <input type="text" class="form-control" autocomplete="on" name="ciudad" id="ciudad" placeholder="Ciudad" required>
              <input type="text" class="form-control" autocomplete="on" name="estado" id="estado" placeholder="Estado" required>
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
              <input type="text" class="form-control" autocomplete="on"  name="zip" id="zip" placeholder="Codigo postal" required />
            @endisset
          </div>
        </div>
        <div class="form-row">
          <div class="marquito">
            <input type="text" class="form-control" maxlength="10" autocomplete="on" name="telefono" id="telefono" placeholder="Numero Telefonico" required />
            <textarea name="address" id="address" type="text" placeholder="Direccion..." class="form-control" required=""></textarea>
          </div>
        </div>
        @isset ($hotel)
          <div class="form-row">
            @for ($room = 1; $room <= $query['r'] ; $room++)
              <div class="marquito">
                <p class="main-title" >Datos del huesped del cuarto {{$room}}</p>
                <input type="text" name="name{{$room}}" class="form-control" id="name3" placeholder="Nombre" required>
                <input type="text" name="lname{{$room}}" class="form-control" id="lname3" placeholder="Apellido" required>
              </div>
            @endfor
          </div>
        @endisset
        
        <div class="form-row">
          <div class="marquito">
            <input class="form-check-input" name="acept" type="checkbox" id="ok" required>
            <label class="terminos" > He leí­do y acepto el
              <a href="https://kooningtravel.com/terminos" target="_blank">Aviso de privacidad</a>
            </label>
          </div>
        </div>
        <div class="form-row">
          <button id="btn_pagar" type="submit" class="btn btn-sm btn-caja-reserva" onClick="send()" value="Pagar" >Pagar</button>
        </div>
        <div class="form-row">
          <label class="price" >MXN ${{number_format($total)}}</label>
        </div>
      </form>
    </div>
    <div class="medium" id="form-pagar" >
      <div class="top-car">
        <h2>Reservacion</h2>
        <h3>Datos de la Reserva </h3>
      </div>
      <form name="contactform" id="contactform" class="needs-validation" action="/hotels/confirm" onsubmit="" method="post">
        <div class="pricing-table-features">
          <div class="detailst" >
            @foreach ($cart as $key => $item)
              @switch($item['type'])
                  @case('hotel')
                    <span class="desct" > 
                      <b>{{$item['name']}}</b>
                    </span>
                    @break
                  @case('traslado')
                    <span class="desct" > 
                      <b>{{$item['destiny']}}</b>
                    </span>
                    @break
                  @case('parque'||'tour')
                    <span class="desct" > 
                      <b>{{$item['ticket']}}</b>
                    </span>
                    @break
              @endswitch
              
              <span class="desct" > 
                <b>nombre producto</b>
              </span>
              <span class="costt" style="display: block; text-align: right;">
                $ 1,002.52
              </span>
            @endforeach
          </div>
        </div>
        <div class="form-row">
          <label class="price" >MXN ${{number_format($total)}}</label>
        </div>
        <div class="form-row">
          
        </div>
      </form>
    </div>
    <img style="display: none;" class="img-banner-right" src="/img/complements/extras/banner-right.png" alt="viajes, vacaciones, parques,tour" >
  </div>
</div>
@stop