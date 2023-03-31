@extends('index')

@section('items')
<div class="container" style="background-color:#e9ecef">
    @foreach ($items as $item)
        <h2>{{$item->name}}</h2>
    @endforeach
</div>
@stop