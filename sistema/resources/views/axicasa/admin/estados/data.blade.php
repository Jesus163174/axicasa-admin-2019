<table class="table">
    <thead>
    <tr>
        <th>Estado</th>
        <th>Estatus</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($states as $state)
        <tr>
            <td>{{$state->nombre}}</td>
            <td>
                <i class="badge {{$state->estatus}}">{{$state->estatus}}</i>
            </td>
            <td>
                <a href="{{asset('administrador/estados/'.$state->id.'/edit')}}" class="btn btn-success btn-xs">Actualizar</a>
                @include('axicasa.admin.estados.form-delete')
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
