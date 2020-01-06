<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Costo</th>
            <th>Estatus</th>
            <th>Colonia</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inmuebles as $inmueble)
            <tr>
                <td>{{$inmueble->titulo}}</td>
                <td>${{number_format($inmueble->costo,2,',','.')}}</td>
                <td>
                    <i class="badge {{$inmueble->estatus}}">{{$inmueble->estatus}}</i>
                </td>
                <td>
                    {{$inmueble->colonia->nombre}}
                </td>
                <td>
                    <a href="{{asset('inmuebles/'.$inmueble->id)}}" class="btn btn-success btn-xs">Detalle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
