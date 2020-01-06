<table class="table">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Municipio</td>
            <td>Estado</td>
            <td>Estatus</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($colonias as $colonia)
            <tr>
                <td>{{$colonia->nombre}}</td>
                <td>{{$colonia->municipio->nombre}}</td>
                <td>{{$colonia->municipio->estado->nombre}}</td>
                <td>
                    <i class="badge {{$colonia->estatus}}">{{$colonia->estatus}}</i>
                </td>
                <td>
                    <a href="{{asset('administrador/colonias/'.$colonia->id.'/edit')}}" class="btn btn-success btn-xs">Actualizar</a>
                    @include('axicasa.admin.colonias.form-delete')
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
