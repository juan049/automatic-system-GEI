@extends('layouts.app')



@section('content')
<link href="https://cdn.jsdelivr.net/npm/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">Da de alta un nuevo insumo</h3>
            <form 
                action="{{route('insumo.store')}}"
                method="POST"
                >
                @csrf
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
                                <th scope="col">Nombre</th>
                                <th scope="col">Porcentaje</th>
                                <th scope="col">Numero CAS</th>
                                <td></td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td><input type="text" name="component-name-1" id="component-name-1"></td>
                                <td><input min="0" max="100" type="number" name="component-percentage-1" id="component-percentage-1"></td>
                                <td><input type="text" name="component-cas_number-1" id="component-cas_number-1"></td>
                                <td id="deleteBtn1" class="text-center text-danger cursor-pointer deleteRowBtn"><i class="bi bi-trash"></i></td>
                            </tr>
                            </tbody>
                          </table>

                          <div class="d-flex ">
                            <button id="addRowBtn" class=" btn btn-primary" type="button">Agregar Fila</button>
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
                <button type="submit" class="btn btn-success w-100 mt-3">Dar de alta</button>
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

.cursor-pointer {
    cursor: pointer;
}
</style>

<script src="{{asset('js/insumo.alta.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>

@endsection
