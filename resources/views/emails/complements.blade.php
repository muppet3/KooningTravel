				
					@isset ($complements)

						@isset ($complements['hotel'])
						    
						    
								    <tr>
										<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; "><br>
											<div style="line-height: 24px; font-family: Tahoma; color: rgb(102, 102, 102); text-transform: uppercase; font-size: 16px; font-weight: normal; text-align: center;">
												Reserva de hotel
											</div>
											<br>
											<h3 class="titulosreserva">Nombre del cliente</h3>
											<p>{{$complements['hotel']['Nombre']}}</p>
											<h3 class="titulosreserva">Fecha llegada</h3>
											<p>{{$complements['hotel']['llegada']}}</p>
											<h3 class="titulosreserva">Fecha salida</h3>
											<p>{{$complements['hotel']['salida']}}</p>
											<h3 class="titulosreserva">Adultos</h3>
											<p>{{$complements['hotel']['adultos']}}</p>
											@if ($complements['hotel']['menores']>0)
												<h3 class="titulosreserva">Menores</h3>
												<p>{{$complements['hotel']['menores']}}</p>
											@endif
											<h3 class="titulosreserva">Habitaciones</h3>
											<p>{{$complements['hotel']['habitaciones']}}</p>
											<h3 class="titulosreserva">Numero de reservación</h3>
											<p>{{$complements['hotel']['idreserva']}}</p>
											<br>
										</td>
									</tr>
						    
						@endisset
						@isset ($complements['transporte'])
						    @foreach ($complements['transporte'] as $item)
							    <tr>
									<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; "><br>
										<div style="line-height: 24px; font-family: Tahoma; color: rgb(102, 102, 102); text-transform: uppercase; font-size: 16px; font-weight: normal; text-align: center;">
												Reserva de traslado
											</div>
										<br>
										<h3 class="titulosreserva">Traslado {{$item->type}}</h3>
										<h3 class="titulosreserva">Hotel</h3>
										<p> {{$item->hotel}} </p>
										<h3 class="titulosreserva">Servicios</h3>
										<p> {{$item->services}} </p>
										<h3 class="titulosreserva">Fecha llegada</h3>
										<p> {{$item->check_in}} </p>
										@if (!is_null($item->check_out))
											<h3 class="titulosreserva">Fecha Salida</h3>
											<p> {{$item->check_out}} </p>
										@endif
										<h3 class="titulosreserva">Tipo de transporte</h3>
										<p> {{$item->transport}} </p>
									</td>
								</tr>
						    @endforeach
						@endisset
						@isset ($complements['activities'])
						    @foreach ($complements['activities'] as $item)
						    @php
						    	dd($item->ticket);
						    @endphp
						    	<tr>
								<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 17px; font-family: tahoma; color: #333;  border-bottom: 10px solid #f2f2f2;  border-left: 1px solid #f2f2f2;  border-right: 1px solid #f2f2f2; border-top: 1px solid #f2f2f2; "><br>
									<div style="line-height: 24px; font-family: Tahoma; color: rgb(102, 102, 102); text-transform: uppercase; font-size: 16px; font-weight: normal; text-align: center;">
												Reserva de Actividad nombres
									</div>
									<br>
									<h3 class="titulosreserva">Complemento:</h3>
									<h3 class="titulosreserva">Tour:</h3>
									<p> '. $producto->nombre.' </p>

								</td>
							</tr>
						    @endforeach
						@endisset
						
					@endisset