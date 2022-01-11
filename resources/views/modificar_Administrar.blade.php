<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modificarModal-{{ $value->id}}" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modificar Servicios</h4>
            </div>
            <form action="{{ route('updateAdministracion', $value->id) }}" method="POST">
                {{ @csrf_field() }}
          
              <div class="modal-body">
                <label for="id_servicio_">Servicios: *</label>
                <select type="text" name="id_servicio_" id="id_servicio_" placeholder="" class="form-control placeholder-no-fix" >
                    @foreach ($servicios as $servicio)
                     @if ( $value->id_servicio  == $servicio->id)
                            <option value="{{$value->id_servicio}}">{{$servicio->nombre_servicio}}</option>
                        @endif
                    @endforeach
                    @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->nombre_servicio }}</option>
                     @endforeach
                </select>

              </div>


              <div class="modal-body">
                <label for="id_servicio_">Servicios: *</label>
                <select type="text" name="id_servicio_" id="id_servicio_" placeholder="" class="form-control placeholder-no-fix" >
                    @foreach ($servicios as $servicio)
                     @if ( $value->id_servicio  == $servicio->id)
                            <option value="{{$value->id_servicio}}">{{$servicio->nombre_servicio}}</option>
                        @endif
                    @endforeach
                    @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->nombre_servicio }}</option>
                     @endforeach
                </select>

              </div>
             

              <div class="modal-body">
                <label for="costo_servicio_">Servicios Costo: *</label>
                <select type="text" name="costo_servicio_" id="costo_servicio_" placeholder="" class="form-control placeholder-no-fix" >
                    @foreach ($servicios as $servicio)
                     @if ( $value->id_servicio  == $servicio->id)
                            <option value="{{$value->id_servicio}}">{{$servicio->costo_servicio}}</option>
                        @endif
                    @endforeach
                    @foreach($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->costo_servicio}}</option>
                     @endforeach
                </select>

              </div>
             

                <div class="modal-body">
                    <label for="Desscripcion_">Descripcion: *</label>
                    <input type="text" name="Desscripcion_" id="Desscripcion_" placeholder="" class="form-control placeholder-no-fix" value="{{ $value->Desscripcion}}">
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
