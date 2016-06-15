<article>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3 col-md-push-9">
                    <aside class="mas-datos">
                        {if $objNumTelf|@count gt 0}
                        <h3>Central Telefónica</h3>
                            {section name=id loop=$objNumTelf}
                        <a class="telefono" href="#">+51 <span>{$objNumTelf[id]->st_num}</span></a>
                            {/section}
                        <hr class="blanca-corta">
                        {/if}
                        <h3>Horarios</h3>
                        <ul class="bullet2">
                            <li><a><strong>Consulta Externa</strong></a></li>
                            <table style="width:100%" class="table-horario">
                                    <tr>
                                        <td>Lunes a Viernes</td>
                                        <td>08:00 am a 1:00 pm</td> 
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2:00 pm a 16:00 pm</td> 
                                    </tr>
                                    <tr>
                                        <td>Sábados</td>
                                        <td>08:00 am a 12:00 pm</td> 
                                    </tr>
                            </table><br>
                            <li><a><strong>Visita Hospitalización</strong></a></li>
                            <p style="margin-left: 1em; color: #fff;">Todos los días de 15:00 a 17:00 pm. (Luego de transcurridos 15 días de hospitalización. Previa autorización médica).</p><br>
                            <li><a><strong>Farmacia</strong></a></li>
                            <table style="width:100%" class="table-horario">
                                    <tr>
                                            <td>Lunes a Viernes</td>
                                            <td>08:00 am a 1:00 pm</td> 
                                    </tr>
                                    <tr>
                                            <td></td>
                                            <td>2:00 pm a 4:00 pm</td> 
                                    </tr>
                                    <tr>
                                            <td>Sábados</td>
                                            <td>08:00 am a 12:00 pm</td> 
                                    </tr>
                            </table>
                        </ul>									
                    </aside>
                    <aside class="direccion">
                        <h3>Dirección</h3>
                        <p>Av. Cayetano Heredia 210 l Castilla l Piura l Perú</p>
                    </aside>
                    <section class="redes">
                        <div class="siguenos clearfix">
                            <h3 class="pull-left">SÍGUENOS</h3>
                            <ul class="pull-right">
                                <li class="fb">
                                    <a href="https://www.facebook.com/centroderepososjdpiura" target="_blank" title="Síguenos en Facebook"></a>
                                </li>
                                <li class="tw">
                                    <a href="https://twitter.com/crsjdpiura" target="_blank" title="Síguenos en Twitter"></a>
                                </li>
                                <li class="yt">
                                    <a href="https://www.youtube.com/channel/UCtGJmRisNLhgpvR8qxt28oA" target="_blank" title="Síguenos en YouTube"></a>
                                </li>
                                <li class="in">
                                    <a href="https://www.linkedin.com/company/3121795?trk=tyah&trkInfo=tas%3Aorden%20hospital" target="_blank" title="Síguenos en Linked In"></a>
                                </li>
                                <li class="issuu">
                                    <a href="https://issuu.com/septentrional" target="_blank" title="Síguenos en Issuu"></a>
                                </li>
                            </ul>
                        </div>								
                    </section>
                </div>
                {$novedades}
            </div>								
        </div>
    </section>
			<section class="multimedia">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="videos clearfix">
                                            <a class="titulo pull-left" href="multimedia-videos.html">Videos</a>
                                            <a class="youtube pull-right" href="https://www.youtube.com/channel/UCtGJmRisNLhgpvR8qxt28oA" target="_blank" title=""><span>Canal de youtube</span></a>
                                            <div class="marco">
                                                <iframe width="100%" height="272" src="https://www.youtube.com/embed/-CbDvz-_MME" frameborder="0" allowfullscreen style="display:compact;"></iframe>
                                            </div>
                                            <p>Corporativo Centro de reposo San Juan de Dios</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="fotos clearfix text-center">
                                            <a class="titulo pull-left" href="multimedia-fotos.html">Fotos</a>
                                            <a class="picassa pull-right" href="multimedia-fotos.html" target="_blank" title=""><span>Picassa</span></a>
                                            <div id="picassa_home" class="fotos__picassa"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
			</section>
			<section>
				<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="row">
							<div class="col-xs-12 col-md-4 text-center">
								<div class="modulo-home">
									<a href="servicios-principales-convenios.html" target="_blank">
										<div class="modulo-home__imagen">
											<img class="img-responsive" src="{$SERVER_APP_IMG}Resp_Social.jpg" alt="">
											<span class="punta"></span>
										</div>
										<div class="modulo-home__texto">
											<h4 class="text-left">Convenios</h4>
											<hr class="gris-corta">
											<p class="text-left">IESS, ISFFA, ISSPOL<br>
												A través de los convenios con estas instituciones, brindamos servicios de atención de la más alta calidad a los usuarios de estas instituciones del Perú.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-4 text-center">
								<div class="modulo-home">
									<a>
										<div class="modulo-home__imagen">
											<img class="img-responsive" src="{$SERVER_APP_IMG}Resp_Social.jpg" alt="">
											<span class="punta"></span>
										</div>
										<div class="modulo-home__texto">
											<h4 class="text-left">Instalaciones</h4>
											<hr class="gris-corta">
											<p class="text-left">Estrenamos modernas instalaciones para Terapia Física, tratamientos en: Estimulación Eléctrica, Ultrasonido, Magnetoterapia, Terapia Láser, Preso terapia, Crioterapia, Termoterapia</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-4 text-center">
								<div class="modulo-home">
									<a>
										<div class="modulo-home__imagen">
											<img class="img-responsive" src="{$SERVER_APP_IMG}Resp_Social.jpg" alt="">
											<span class="punta"></span>
										</div>
										<div class="modulo-home__texto">
											<h4 class="text-left">Cuidados Paliativos</h4>
											<hr class="gris-corta">
											<p class="text-left">Contamos con un equipo de profesionales capacitados para mejorar la calidad de vida nuestros pacientes oncológicos y no oncológicos, física, psicosocial y espiritualmente.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</section>
		</article>  
		<section class="mapa-home">
		</section>