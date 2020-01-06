<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tipos as $tipo)
            <tr>
                <td>{{$tipo->nombre}}</td>
                <td>
                    <a href="{{asset('administrador/tipo_inmuebles/'.$tipo->id.'/edit')}}" class="btn btn-success btn-xs">Actualizar</a>
                    @include('axicasa.admin.tipos_inmuebles.form-delete')
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
