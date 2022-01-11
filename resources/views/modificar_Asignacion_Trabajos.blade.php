<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" 
id="modificarModal-{{$value->id}}" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modificar Datos de la Servicio Empresa</h4>
            </div>
            <form action="{{ route('updateAsignacion', $value->id) }}" method="POST">
                {{ @csrf_field() }}
              <div class="modal-body">
                <label for="Direccion_">Direccion: *</label>
                <input type="text" name="Direccion_" id="Direccion_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->Direccion }}">
              </div>

            <div class="modal-body">
                <label for="id_servicio_">Servicios: *</label>
                <select type="text" name="id_servicio_" id="id_servicio_" placeholder="" class="form-control placeholder-no-fix" >
                    @foreach($administrarServicio as $administrarServicio)
                    <option value="{{ $administrarServicio->id }}">{{ $administrarServicio-> Desscripcion}}</option>
                     @endforeach
                </select>

              </div>

              <div class="modal-body">
                <label for="id_empleado_">Empleados: *</label>
                <select type="text" name="id_empleado_" id="id_empleado_" placeholder="" class="form-control placeholder-no-fix" >
                    @foreach ($empleados as $empleado)
                     @if ( $value->id_empleado  == $empleado->id)
                            <option value="{{$value->id_empleado}}">{{$empleado->nombre_empleado}}</option>
                        @endif
                    @endforeach
                    @foreach($empleados as $empleado)
                    <option value="{{ $empleado->id }}">{{ $empleado->nombre_empleado }}</option>
                     @endforeach
                </select>

              </div>
              <div class="modal-body">
                <label for="estado_">Estado: *</label>
                <select type="text" name="estado_" id="estado_"  class="form-control placeholder-no-fix" >

                    @if ( $value->estado  == 1)
                    <option value="1" >Inactivo</option>
                    <option value="0" >Activo</option>
                    @endif
                    @if ( $value->estado  == 0)
                    <option value="0" >Activo</option>
                    <option value="1" >Inactivo</option>
                    @endif

                </select>


              </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                    <button class="btn btn-theme" type="submit"  >Registrar</button>
                </div>
            </form>
        </div>
     </div>
 </div>
<!-- modal -->
