<style>

.modal-content {
    background: #333;}

.modal-body{
background:#FFF;
}

.close{
color:#FFF;
opacity:1;
}

</style>

<input type="hidden" id="mensagem_ok" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modalok">
<div id="Modalok" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#5cb85c;"> <span class='glyphicon glyphicon-ok'></span> Sucesso</h4>
      </div>
      <div class="modal-body">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer">

      <p style='text-align:center; margin:0;'><img src="definitions/upload/logo1.png" style="width:120px;"></p>
<!--
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class='glyphicon glyphicon-remove-sign'></span> Fechar</button>
-->
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="mensagem_ko" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modalko">
<div id="Modalko" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#d9534f;"><span class='glyphicon glyphicon-warning-sign'></span> Aviso</h4>
      </div>
      <div class="modal-body">
        <p class="debug-url"></p>
      </div>
      <div class="modal-footer">

 <p style='text-align:center; margin:0;'><img src="definitions/upload/logo1.png" style="width:120px;"></p>  

<!--
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class='glyphicon glyphicon-remove-sign'></span> Fechar</button>

-->
      </div>
    </div>
  </div>
</div>


<!-- Carros -->








<!-- Tipos de Conversão de PDF -->

<div id="pdf_conf" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Formato & Orientação:</span></h4>
      </div>
      <div class="modal-body">
      <div class="w3-row-padding">
      <div class="w3-col l6 s12">
        <label>Formato:</label>
          <select class="form-control" id="pagesize">
          <option value="a2">A2</option>
          <option value="a3">A3</option>
          <option value="a4">A4</option>
          </select>
      </div>

      <div class="w3-col l6 s12">
        <label>Orientação:</label>
          <select class="form-control" id="orientation">
            <option value="portrait">Vertical</option>
            <option value="landscape">Horizontal</option>
          </select>
      </div>
        </div>
      </div>

    <div class="modal-footer r">
    <p style='text-align:center; margin:0;'><img src="definitions/upload/logo1.png" class="logo-nav" style="width:68px;"></p>  
      <button type="button" class="btn btn-default cancel-edit" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>
        <font class="hidden-xs"> Fechar</font>
      </button>
      <button type="button" class="btn btn-success" onclick="generatePdf($('#pagesize').val(),$('#orientation').val())">
<span class="glyphicon glyphicon-ok"></span>
        <font class="hidden-xs"> Confirmar</font>
      </button>
    </div>
  </div>
  </div>
</div>


<!-- Carro -->


<div class="modal fade" id="editar_Carro" tabindex="-1" role="dialog" aria-labelledby="clientes">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Carro Numero #<span id="carro_id"></span></h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-xs-12 col-md-6">
                      <input type="hidden" id="bas">
                      <input type="hidden" id="nome_modelo">
                        <div class="form-group">
                            <i class="fas fa-id-card"></i> - <label for="modelo">Modelo:</label>
                              <select id="mol" class='form-control'></select>
                          </div>
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <div class="form-group">
                             <i class="fa fa-car"></i> - <label for="morada">Nome:</label>
                              <input type="text" class="form-control" id="no_value" >
                          </div>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                          <i class="fas fa-euro-sign"></i> - <label for="modelo">Preco:</label>
                          <input type="number" class="form-control" id="preco_value" placeholder="Preço do carro">
                         </div>
                      </div>
                      <div class="col-xs-12 col-md-6">
                         <div class="form-group">
                           <i class="fas fa-tachometer-alt"></i> - <label for="morada">Kms:</label>
                             <input type="number" class="form-control" id="kms_value" placeholder="Kms do carro">
                          </div>
                      </div>

                      <div class="col-xs-12">
                         <div class="form-group">
                           <i class="glyphicon glyphicon-picture"></i> - <label for="morada">Logotipo:</label>
                           <div id="logo_img"></div>
                           <div id="fileinfo">
                                <input id="logo" name="file" type="file" class="btn-primary btn col-xs-12" accept="image/gif, image/jpeg, image/png"><br>
                           </div>
                          </div>
                      </div>

                  </div>
                </div>
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img src="definitions/upload/logo1.png" class="logo-nav" style="width:68px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="salvar_Carro($('#carro_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </div>

<!-- Modelo -->

<div class="modal fade" id="editar_Modelo" tabindex="-1" role="dialog" aria-labelledby="clientes">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Modelo Numero #<span id="modelo_id"></span></h4>
                </div>


                <div class="modal-body">
                  <div class="row">
                    <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <i class="fas fa-id-card"></i> - <label for="modelo">Nome:</label>
                        <input type="text" class="form-control" id="modelo_nome_value" placeholder="Nome do Modelo">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img src="definitions/upload/logo1.png" class="logo-nav" style="width:68px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="salvar_Modelo($('#modelo_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Comentario -->

    <div class="modal fade" id="editar_Comentario" tabindex="-1" role="dialog" aria-labelledby="clientes">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Comentario Numero #<span id="comentario_id"></span></h4>
                </div>


                <div class="modal-body">
                  <div class="row">
                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-car"></i> - <label for="modelo">Titulo:</label>
                        <input type="text" class="form-control" id="titulo_comentario">
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Nome do Utilizador:</label>
                        <select id="username_id_value" class='form-control'></select>
                        <input type="hidden" id="id_admin">
                      </div>
                    </div>
                    <div class='col-md-12 col-xs-12'>
                      <div class="form-group">
                          <span class="glyphicon glyphicon-calendar"></span> Data do Comentario *
                          <div class='input-group date' id='data_comentario_dt'>
                              <input type='text' readonly class="form-control" id="data_comentario_value" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-file"></i> - <label for="modelo">Descricao:</label>
                        <textarea class="form-control" rows="5" id="descricao_value"></textarea>
                      </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                                              <div class="form-group" style="margin-top: 20px;">
                                                <div class="input-group">
                                                <input type='checkbox' checked name='my-checkbox' data-size='mini' data-off-color='danger' data-on-color='success' data-off-text="Não" data-on-text="Sim" name='activo_campo_opt' id='activo_campo_opt'>
                                                <input type="hidden" id="activo_campo">
                                    
                                                </div>
                                                </div>
                                            </div>
			                   </div>
                </div>
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img src="definitions/upload/logo1.png" class="logo-nav" style="width:68px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="salvar_Comentario($('#comentario_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal fade" id="editar_Reserva" tabindex="-1" role="dialog" aria-labelledby="clientes">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Reserva Numero #<span id="reserva_id"></span></h4>
                </div>


                <div class="modal-body">
                  <div class="row">

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-book"></i> - <label for="modelo">Nome:</label>
                        <input type="text" class="form-control" id="nome_reserva_value" readonly="readonly">
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Pais:</label>
                        <input type="text" class="form-control" id="pais_value" readonly="readonly">
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Email:</label>
                        <input type="email" class="form-control" id="email_value" >
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Telefone:</label>
                        <input type="number" class="form-control" id="telefone_value">
                      </div>
                    </div>

                    <div class='col-md-6 col-xs-12'>
                  <div class="form-group">
                      <span class="glyphicon glyphicon-calendar"></span> Data de Reserva:
                      <div class='input-group date' id='data_reseva_dt_value'>
                          <input type='text' readonly class="form-control" name="data_reserva_value" id="data_reserva_value" placeholder="Data de Reserva" />
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  </div>
            </div>

            <div class='col-md-6 col-xs-12'>
                  <div class="form-group">
                      <span class="fa fa-clock-o"></span> Hora de Reserva:
                      <div class='input-group date' id='hora_reseva_dt_value'>
                          <input type='text' readonly class="form-control" name="hora_reserva_value" id="hora_reserva_value" placeholder="Hora de Reserva" />
                          <span class="input-group-addon">
                              <span class="fa fa-clock-o"></span>
                          </span>
                      </div>
                  </div>
            </div>

            <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Carro:</label>
                        <select id="car_id_nome" class='form-control'></select>
                        <input type="hidden" id="id_carro">
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-12">
                     <div class="form-group">
                        <i class="fas fa-file"></i> - <label for="modelo">Observacao:</label>
                        <textarea class="form-control" rows="5" id="observacao_value"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                    
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img src="definitions/upload/logo1.png" class="logo-nav" style="width:68px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="salvar_Reserva($('#reserva_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="a_reserve" tabindex="-1" role="dialog" aria-labelledby="clientes">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-plus" style="color: #5bc0de;"></span> Adicionar Reserva </h4>
                </div>


                <div class="modal-body">
                  <div class="row">

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-book"></i> - <label for="modelo">Nome:</label>
                        <input type="text" class="form-control" id="nome_reserva">
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Pais:</label>
                        <input type="text" class="form-control" id="pais">
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Email:</label>
                        <input type="email" class="form-control" id="email" >
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Telefone:</label>
                        <input type="number" class="form-control" id="telefone">
                      </div>
                    </div>

                    <div class='col-md-6 col-xs-12'>
                  <div class="form-group">
                      <span class="glyphicon glyphicon-calendar"></span> Data de Reserva:
                      <div class='input-group date' id='data_reseva_dt'>
                          <input type='text' readonly class="form-control" name="data_reserva" id="data_reserva" placeholder="Data de Reserva" />
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  </div>
            </div>

            <div class='col-md-6 col-xs-12'>
                  <div class="form-group">
                      <span class="fa fa-clock-o"></span> Hora de Reserva:
                      <div class='input-group date' id='hora_reseva_dt'>
                          <input type='text' readonly class="form-control" name="hora_reserva" id="hora_reserva" placeholder="Hora de Reserva" />
                          <span class="input-group-addon">
                              <span class="fa fa-clock-o"></span>
                          </span>
                      </div>
                  </div>
            </div>

            <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Carro:</label>
                        <select id="car_id" class='form-control'></select>
                        <input type="hidden" id="id_carro_obs">
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-12">
                     <div class="form-group">
                        <i class="fas fa-file"></i> - <label for="modelo">Observacao:</label>
                        <textarea class="form-control" rows="5" id="observacao"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                    
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img src="../admin/definitions/upload/logo1.png" class="logo-nav" style="width:68px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" id="adicionar_reserva"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </div>


