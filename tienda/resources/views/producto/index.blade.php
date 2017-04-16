@extends('layouts.master')

@section('content')

    <div class="row">

    @foreach( $arrayProductos as $key => $produ )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/producto/' . $key ) }}">
            <img src="{{$produ['imagen']}}" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$produ['nombre']}}
            </h4>
        </a>

    </div>
    @endforeach

</div>

@stop
