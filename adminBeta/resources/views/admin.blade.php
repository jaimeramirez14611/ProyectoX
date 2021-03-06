@extends('layoutadmin')

@section('contenido')

<!--                 Nav tab menu              -->
    <div class="nav-tabs-custom">

            <ul class="nav nav-tabs admincss"  role="tablist">
                 <li class="nav-item active" >
                      <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" aria-expanden="false">Agregar Orden de  trabajo</a>
                 </li>
                <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Buscar y administrar Orden de Trabajo</a>
                </li>


            </ul>

            <!--Formulario para resoluciones de tablet y mobile-->



   <!--                 contenedor de tablas            -->

            <div class="tab-content" id="myTabContent" >

                  <div class="tab-pane fade active in " id="home" role="tabpanel" aria-labelledby="home-tab" style= "background: white;">


                            <div class="align-content-around">
                              <div >
                                               <div class="col-lg-6  col-lg-offset-1   col-md-10  col-md-offset-1 " id="Cnt1OT" >
                                               <h4 class="bg-danger" style= " text-align: center; color: white; border: 1px solid #46b8da !important; background: #0D939B !important;
                                                  border-radius: 10px !important;">DATOS GENERALES</h4>
                                                 <div class="row" style="margin-top: 20px !important">
                                                    <div class="col-lg-6 col-md-12" >
                                                          <div class="input-group">
                                                              <span class= "input-group-addon bg-info colorSpan" id="basic-addon1"  style="">OT</span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Orden de Trabajo" aria-describedby="basic-addon1" required="true">
                                                          </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 separadorLabel">

                                                          <div class="card fc fc-unthemed fc-ltr">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon colorSpan">
                                                                      <i class="fa fa-calendar "></i>
                                                                    </div>
                                                                  <input class="form-control InputStyle" id="date" name="date" placeholder="YYYY-MM-DD" type="text"/>
                                                                </div>
                                                          </div>
                                                    </div>
                                                 </div>
                                                 <li role="separator" class="divider SeparatorColor" ></li>
                                                 <div class="row">
                                                      <div class="col-lg-6 col-md-12">
                                                          <div class="input-group">
                                                              <span class="input-group-addon  colorSpan" id="basic-addon1" style="width: 12px">Siebel</span>
                                                              <input type="text" class="form-control InputStyle" placeholder="OT Siebel" aria-describedby="basic-addon1">
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                           <div class="input-group">
                                                              <span class="input-group-addon colorSpan colorSpan" id="basic-addon1">Jornada</span>
                                                              <select id="inputState" class="form-control InputStyle">
                                                                  <option selected>---Seleccione---</option>
                                                                  <option>AM</option>
                                                                  <option>PM</option>
                                                              </select>
                                                            </div>
                                                      </div>
                                                 </div>
                                                  <li role="separator" class="divider SeparatorColor" ></li>
                                                 <div class="row">
                                                      <div class="col-lg-6 col-md-12 ">
                                                           <div class="input-group">
                                                              <span class="input-group-addon colorSpan " id="basic-addon1">Tipo OT</span>
                                                              <select id="iTipoOT" class="form-control InputStyle">
                                                                  <option selected> </option>
                                                                   @foreach( $otsT as $Tipoot)

                                                                   <option value="{{$Tipoot->id}}" >  {{$Tipoot->tipo}}</option>
                                                                  @endforeach
                                                              </select>
                                                            </div>
                                                      </div>
                                                 </div>

                                                  <li role="separator" class="divider SeparatorColor"></li>

                                                 <div class="row ">
                                                      <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="comment" >Comentario:</label>
                                                                <textarea class="form-control InputStyle" rows="2" id="comment"  style="resize:none;"></textarea>
                                                             </div>
                                                      </div>

                                                 </div>
                                            

                                                 <h4  style =" text-align: center; color: white; border: 1px solid #46b8da !important; background: #0D939B !important;
                                                  border-radius: 10px !important;" > DETALLE CUENTA-SERVICIO
                                                </h4>
                                                 <div id="alert-i"  class="text-center" style="background: green; color: white; border-radius: 10px !important;"></div>
                                                 <div id="alert-d" class="text-center" style="background: red; color: white;border-radius: 10px !important;"></div>


                               {!! Form::open(['route' => ['admin', ':COD' ], 'method' => 'post']) !!}
                                                  <div class="row">
                                                   <li role="separator" class="divider SeparatorColor" ></li>


                                                  <div class="col-lg-6 col-md-6">
                                                          <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Cuenta: </span>
                                                              <input id="iCod"  type="text" class="form-control InputStyle" placeholder="Nùmero de cuenta" aria-describedby="basic-addon1">

                                                          </div>
                                                  </div>
                                               <!--btn Buscar cuenta-->

                                                  <div class="col-lg-6 col-md-12">
                                                    <div class="input-group">


                                                                 <button type="submit" value="enviar" class="btn btn-block btn-primary btn-sm" id="btn-buscar">
                                                                        <i class="fa fa-search" >.....</i>
                                                                 </button>



                                                          </div>
                                                  </div>
                                                </div>
                               {!! Form::close() !!}

                                                 <li role="separator" class="divider SeparatorColor" ></li>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Nombres: </span>
                                                              <input id="nUsr" type="text" class="form-control InputStyle" placeholder="Nombres Usuario" aria-describedby="basic-addon1">

                                                          </div>

                                                    </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Apellidos: </span>
                                                              <input id="aUsr" type="text" class="form-control InputStyle" placeholder="Apellidos Usuario" aria-describedby="basic-addon1">

                                                          </div>

                                                    </div>
                                                </div>
                                                 <li role="separator" class="divider SeparatorColor" ></li>
                                                 <div class="row ">
                                                      <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="comment" >Direcciòn:</label>
                                                                <textarea id="txtDir" class="form-control InputStyle" rows="2" id="comment"  style="resize:none;"></textarea>
                                                             </div>
                                                      </div>

                                                 </div>

                                                 <li role="separator" class="divider SeparatorColor" ></li>

                                                 <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">contactos: </span>
                                                              <input id="contCli" type="text" class="form-control InputStyle" placeholder="Telefonos" aria-describedby="basic-addon1">

                                                          </div>

                                                    </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Ruta: </span>
                                                              <input id="rutaCli" type="text" class="form-control InputStyle" placeholder="Ruta" aria-describedby="basic-addon1">

                                                          </div>

                                                    </div>

                                                </div>
                                                 <li role="separator" class="divider SeparatorColor" ></li>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Nodo: </span>

                                                              <input id="nodoCli" type="text" class="form-control InputStyle" placeholder="Nodo" aria-describedby="basic-addon1">

                                                          </div>

                                                    </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Zona: </span>
                                                              <input id="zonaCli" type="text" class="form-control InputStyle" placeholder="Zona" aria-describedby="basic-addon1"  >

                                                          </div>

                                                    </div>
                                                  </div>
                                                   <li role="separator" class="divider SeparatorColor"></li>

                                                 <h4  style= " text-align: center; color: white; border: 1px solid #46b8da !important; background: #0D939B !important;
                                                  border-radius: 10px !important;">UNIDAD TECNICA
                                                </h4>
                                                <li role="separator" class="divider" style="color: white"></li>
                                                 <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                         <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Unidad: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Còdigo de unidad" aria-describedby="basic-addon1">

                                                          </div>

                                                    </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                         <div class="input-group">

                                                          <button type="button" class="btn btn-block btn-primary btn-sm">
                                                                 <i class="fa fa-search"> ..... </i>
                                                              </button>

                                                          </div>

                                                    </div>
                                                  </div>
                                                   <li role="separator" class="divider SeparatorColor" ></li>
                                                  <div class="row">
                                                      <div class="col-lg-6 col-md-12">
                                                          <div class="input-group">
                                                              <span class="input-group-addon colorSpan colorSpan" id="basic-addon1">Estado</span>
                                                              <select id="inputState" class="form-control InputStyle">
                                                                  <option selected>---Seleccione---</option>

                                                                       @foreach($estados as $Otstado)

                                                                       <option>  {{$Otstado->tipificacionest}}</option>
                                                                      @endforeach



                                                              </select>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-6 col-md-12 separadorLabel">
                                                           <div class="input-group">
                                                              <span class="input-group-addon colorSpan colorSpan" id="basic-addon1">Tipificaciòn</span>
                                                              <select id="inputState" class="form-control InputStyle">
                                                                  <option selected>---Seleccione---</option>
                                                                  <option>Visita efectuada</option>
                                                                  <option>Visita no efectuada</option>
                                                              </select>
                                                            </div>
                                                      </div>
                                                 </div>
                                                  <li role="separator" class="divider SeparatorColor" ></li>
                                                 <div class="row ">
                                                      <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="comment" >Comentario:</label>
                                                                <textarea class="form-control InputStyle" rows="2" id="comment"  style="resize:none;"></textarea>
                                                             </div>
                                                      </div>

                                                 </div>
                                          <div class="row">

                                                {!! Form::open(['route' => 'pb', 'method' => 'POST']) !!}
                                                    <div class="col-lg-3 col-lg-offset-3 col-md-4 col-md-offset-3  col-sm-4 col-sm-offset-3 col-xs-3 col-xs-offset-3">
                                                            <div class="input-group">
                                                                <button id="btn-saveOT" type="button" class="btn btn-block btn-success">Guardar</button>

                                                            </div>
                                                    </div>
                                                {!! Form::close() !!}

                                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                          <div class="input-group">

                                                              <button type="button" class="btn btn-block btn-danger">Cancelar</button>
                                                          </div>
                                                      </div>

                                          </div>
                                          <div class="row" style="height: 5px;"></div>
                                          <div id="alert-d2" class="text-center" style="background: red; color: white;border-radius: 10px !important;">sffs</div>

                                          </div>



                                          </div>


                                               <div class="col-lg-4  hidden-xs hidden-sm hidden-md"  id="Cnt2OT" style="height : 1000px; background: white;  ">
                                                <h4 class="bg-danger" style=" text-align: center; color: white; border: 1px solid #46b8da !important; background: #0D939B !important;
                                                  border-radius: 10px !important;">OTS/SBL Insertadas</h4>
                                                 <div class="row" style="padding: ">
                                                      <div class="col-lg-12 text-center">
                                                         <table id="tabla" class="table">
                                                                <thead>
                                                                  <tr>
                                                                    <th class="text-center">OT/SBL</th>
                                                                    <th class="text-center">Fecha</th>

                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td>John</td>
                                                                    <td>Doe</td>

                                                                  </tr>
                                                                  <tr>
                                                                    <td>Mary</td>
                                                                    <td>Moe</td>

                                                                  </tr>
                                                                  <tr>
                                                                    <td>July</td>
                                                                    <td>Dooley</td>

                                                                  </tr>
                                                                   <tr>
                                                                    <td>John</td>
                                                                    <td>Doe</td>

                                                                  </tr>

                                                                </tbody>
                                                              </table>


                                                      </div>

                                                 </div>





                                                    <div class="row">
                                                      <div class="col-lg-11">
                                                        <div class="panel panel-info " id="panelComent" style="margin-top: 10px !important;">
                                                            <div class="panel-heading bg-info" style="text-align: center; ">
                                                             Detalle de Ruta
                                                            </div>
                                                            <div class="panel-body">
                                                              <div class="input-group">
                                                              <span class="input-group-addon bg-info colorSpan" id="basic-addon1"  style="">Unidad: </span>
                                                              <input type="text" class="form-control InputStyle" placeholder="Numero de Unidad" aria-describedby="basic-addon1">


                                                          </div>
                                                           <li role="separator" class="divider" style="color: white"></li>
                                                           <div class="card fc fc-unthemed fc-ltr">
                                                                <div class="input-group">
                                                                    <div class="input-group-addon colorSpan">
                                                                      <i class="fa fa-calendar "></i>
                                                                    </div>
                                                                  <input class="form-control InputStyle" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
                                                                </div>
                                                          </div>

                                                           <li role="separator" class="divider" style="color: white"></li>
                                                           <label for="comment" >Detalles:</label>

                                                          <textarea class="form-control InputStyle" rows="8" id="comment" style="resize:none;"></textarea>

                                                            </div>
                                                         </div>

                                                      </div>

                                                 </div>



                            </div>
                            </div>

                  </div>


                  <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab" style="background: white">
                    fgdfg
                 </div>

@stop

  <!--Contenido-->
@section('script')

<script src="{{'js/Scriptcuentas.js'}}"></script>

<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.js"></script>

<script>

  $(function () {
    $('tr:odd').css('backgroundColor', '#D5D5F4');
    $('#tabla').DataTable({
      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
      "pagingType": "numbers",
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false,
      "pageLength"  : 12  ,
    })
  })
</script>


@stop
