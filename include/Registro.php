<div class="container-fluid" style="background-color: #00b6d1;">
    <img src="img/Separador-3.png" class="centrador" alt="separador3" style="margin-bottom: 5%;">
        <div class="container-full div-form text-center" id="registro">
        <h3 class="titulo-seccion owald text-center" style="color: #26357b !important; margin-top: -1%; margin-bottom: -1px;">Registro</h3>	
            <div class="container">
                <form action="#" method="POST">
                        <label for="Nombre y Apellido" class="owald label-calendar">Nombre y Apellido</label>
                        <input type="text" id="nombreyapellido" class="form-control form-control-lg inputs owald">
                        <label for="Correo Electrónico" class="owald label-calendar">Correo Electrónico</label>
                        <input type="text" class="form-control form-control-lg inputs owald" id="email" name="email">
                        <label for="Localidad / Estado" class="owald label-calendar">Localidad / Estado</label>
                        <input type="text" class="form-control form-control-lg inputs owald">
                        <label for="Fecha de Nacimiento" class="owald label-calendar">Fecha de Nacimiento</label>
                        <input id="startDate" class="form-control form-control-lg inputs owald" type="date"/>
                        <div class="form-floating owald">
                            <select class="form-select inputs" id="sel1" name="sellist">
                              <option>Sola</option>
                              <option>Con cereal</option>
                              <option>Con café</option>
                              <option>En preparaciones</option>

                            </select>
                            <label for="sel1" class="form-label owald">¿Como sueles consumir la leche?:</label>
                        </div>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input form-check-personalizacion" type="checkbox" id="check1" name="Acepto recibir información y/o otras 
                            promociones de Nestlé Venezuela" value="something" checked>
                            <label class="form-check-label form-check-personalizacion_label owald" style="color: white;">Acepto recibir información y/o otras promociones de Nestlé Venezuela<span style="color: red;"> * </span></label>
                        </div>
                        <br>
                        <p class="owald" style="color: white;">Los datos suministrados serán tratados bajo la política de privacidad de Nestlé Venezuela, SA. <br> <a href="https://www.nestle.com.ve/info/politicadeprivacidad" class="owald" style="color: white; text-decoration: none;">Política de Privacidad </a></p>
                    <button type="button" class="btn btn-send owald bton">Enviar</button>
                </form>
                
            </div>
	    </div>
    </div>