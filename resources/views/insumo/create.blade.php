@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">Da de alta un nuevo insumo</h3>
            <form action="">
                <div class="card mb-3">
                    <div class="card-header">Datos generales</div>
                    <div class="card-body">
                        {{form_input_text(
                            id_name: 'name',
                            label:  'Insumo',
                            placeholder: 'Nombre del insumo'
                        )}}

                        {{form_input_text(
                            id_name: 'brand',
                            label:  'Marca del insumo',
                            placeholder: 'Marca del insumo'
                        )}}
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">Componentes del insumo</div>
                    <div class="card-body">
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Químico</th>
                                  <th scope="col">Porcentaje</th>
                                  <th scope="col">Numero CAS</th>
                                </tr>
                              </thead>
                              <tbody id="tableBody">
                                <tr>
                                  <th scope="row">1</th>
                                  <td><input type="text" name="" id=""></td>
                                  <td><input type="number" min="0" max="100" name="" id=""></td>
                                  <td><input type="text" name="" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between">
                            <button id="addRowBtn" class="btn btn-primary" type="button">Agregar fila</button>
                            <button id="deleteRowBtn"class="btn btn-danger" type="button">Eliminar fila</button>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header">Áreas de uso</div>
                    <div class="card-body">
                        <div class="form-check">
                            <ul>
                                <div class="row">
                                    @foreach ($areas as $area)
                                    <div class="col-6">
                                        <li class="w-100  mt-2 list-unstyled p-2">
                                            {{form_input_check(
                                                id_name: $area->id,
                                                label: $area->name,
                                                div_class: 'form-check col-6'
                                            )}}
                                        </li>  
                                    </div>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>    
            </form>
        </div>
    </div>
</div>

<style>
    table td {
  position: relative;
}

table td input {
  position: absolute;
  display: block;
  top:0;
  left:0;
  margin: 0;
  height: 100%;
  width: 100%;
  border: none;
  padding: 10px;
  box-sizing: border-box;
}
</style>

<script src="{{asset('js/insumo.alta.js')}}"></script>

@endsection
