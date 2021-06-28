<div class="modal fade" id="enviarEvidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar evidencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('actividades.update', $actividad->id_actividad) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <label>Adjuntar evidencia de la actividad</label>
                            {{$actividad->id_actividad}}
                            <br>
                            {{-- //<input name="agregarrol" class="form-control input-sm" type="file" > --}}
                            <input type="file" class="form-control-file" id="imagenes[]"  name="imagenes[]" multiple
               accept="image/*" >

               <input type="text" hidden="" value="{{ $actividad->estado }}" name="estado">

                            {{-- @error('agregarrol')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enviar evidencia</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>

        </div>
    </div>
</div>
