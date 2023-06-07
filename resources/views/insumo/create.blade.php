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
                        <input id="componentsTableInput" type="hidden" name="components-table" value="">
                        <table id="table" class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Porcentaje</th>
                                <th scope="col">Numero CAS</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                              </tr>
                            </tbody>
                        </table>

                        <div class="mt-5 bordered">

                            {{form_input_text(
                                div_class: 'form-group d-flex mb-3',
                                id_name: 'componentName',
                                label:  'Nombre del comonente',
                                label_class: 'w-25',
                                placeholder: 'Nombre del comonente'
                            )}}

                            

                             {{ form_input_number(
                                div_class: 'form-group d-flex mb-3',
                                id_name: 'componentPercentage',
                                label:  'Porcentaje del comonente',
                                label_class: 'w-25',
                                placeholder: 'Porcentaje del comonente',
                                min: 0,
                                max: 100
                             )}}

                            

                            {{form_input_text(
                                div_class: 'form-group d-flex mb-3',
                                id_name: 'componentCAS',
                                label:  'Numero CAS',
                                label_class: 'w-25',
                                placeholder: 'Numero CAS'
                            )}}
                              
                            <button id="addRowBtn" class="btn btn-primary w-100" type="button">Agregar Fila</button>
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


.cursor-pointer {
    cursor: pointer;
}
</style>

<script src="{{asset('js/insumo.alta.js')}}"></script>


@endsection
