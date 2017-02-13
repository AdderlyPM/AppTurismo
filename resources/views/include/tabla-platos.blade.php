
  <div class="panel-body">
    <div role="tabpanel">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified piluku-tabs" role="tablist">
        	<li role="presentation" class="active"><a href="#restaurantes" aria-controls="home" role="tab" data-toggle="tab">Platos</a></li>
      </ul>
      <!-- Tab panes -->

      <div class="tab-content piluku-tab-content">

          <div role="tabpanel" class="tab-pane active" id="restaurantes">

              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped display" id="example">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Tiempo Orden</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                    		
						@foreach($platos as $item)
                    	<tr>
							<td>{{$item->nombre}}</td>
							<td>{{$item->precio}}</td>
							<td>{{$item->tiempo_orden}}</td>
							<td>
					            {!! link_to_route('restaurant_edit_path', '' , $item->id, ['class'=> 'glyphicon glyphicon-pencil'])!!} |
					            <div class="modal fade delete-user-modal" id="{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" >
					              <div class="modal-dialog">
					                <div class="modal-content">
					                  <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					                    <h4 class="modal-title">Eliminar Restaurante</h4>
					                  </div>
					                  <div class="modal-body">
					                    <p>¿Estás seguro que deseas elminar el Restaurante <strong>{{$item->nombre}}</strong>?</p>
					                  </div>
					                  <div class="modal-footer">
					                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					                    &nbsp;  
					                    {!! link_to_route('restaurant_destroy_path', 'Eliminar' , $item->id, ['class'=> 'btn btn-danger'])!!}
					                  </div>
					                </div>
					              </div>
					            </div>
					            <a class="glyphicon glyphicon-remove" href="#" data-toggle="modal" data-target="#{{$item->id}}"></a>
					        </td>
                    	</tr>
						@endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Tiempo Orden</th>
                        <th>Acción</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

          </div>

      </div>
    </div>
  </div>


@section('js')
  <script src='/assets/js/jquery.dataTables.min.js'></script>
  <script src='/assets/js/bootstrap-datatables.js'></script>
  <script src='/assets/js/dataTables-custom.js'></script>
  <script src='/assets/js/mindmup-editabletable.js'></script>
  <script src='/assets/js/numeric-input-example.js'></script>
  <script src='/assets/js/dynamic-tables.js'></script>
@endsection