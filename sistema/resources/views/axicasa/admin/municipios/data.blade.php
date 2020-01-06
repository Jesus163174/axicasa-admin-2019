<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Estatus</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($municipios as $municipio)
            <tr>
                <td>{{$municipio->nombre}}</td>
                <td>
                    <i class="badge {{$municipio->estatus}}">{{$municipio->estatus}}</i>
                </td>
                <td>{{$municipio->estado->nombre}}</td>
                <td>
                    <a href="{{asset('administrador/municipios/'.$municipio->id.'/edit')}}" class="btn btn-success btn-xs">Actualizar</a>
                    @include('axicasa.admin.municipios.form-delete')
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
