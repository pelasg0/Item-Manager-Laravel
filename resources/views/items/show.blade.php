@extends('index')

@section('item')
<div class="container" style="background-color:#e9ecef">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Wert</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->wert}}</td>
            </tr>
        </tbody>
      </table>
</div>
@stop