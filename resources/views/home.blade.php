@extends('index')

@section('home')

<div class="container" style="background-color:rgba(255, 255, 255, 0.95); height: auto; margin-top: 100px; margin-bottom: 100px; padding: 100px; border-radius: 50px;">
      <h1>Aktueller Stand</h1>
      <ul>
        <p>Es gibt {{count($items)}} items in der Datenbank.</p>
        @foreach ($items as $item)
        <li>{{$item->name}}</li>
        @endforeach
      </ul>
</div>

@stop