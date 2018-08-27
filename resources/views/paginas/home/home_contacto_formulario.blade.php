             {!! Form::open( ['route'   => $Route,
                            'method'   => 'Post',
                            'files'    => true,
                            'class'    => 'col-lg-8 mx-auto text-center',
                           
                            ])               !!}

                            <h2 class="section-heading">Contáctanos</h2>
                            <hr class="my-4">
                           

               <div class="form-group">
                    <label class="control-label" for="Nombre">Nombres</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introduzca su nombre" required  />
                </div>               
                <div class="form-group">
                    <label class="control-label" for="Correo">Dirección de Correo Electrónico</label>
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Introduzca su correo electrónico" required />
                </div>
                <div class="form-group">
                    <label class="control-label" for="Mensaje">Mensaje</label>
                    <textarea rows="5" cols="30" class="form-control" id="Mensaje" name="Mensaje" placeholder="Introduzca su mensaje" required ></textarea>
                </div>
                <div class="form-group">                
                    <input type="submit" class="btn btn-primary" value="Enviar">
                    <input type="reset" class="btn btn-default" value="Limpiar">               
                </div>
                <div id="respuesta" style="display: none;"></div>



            {!! Form::close() !!}