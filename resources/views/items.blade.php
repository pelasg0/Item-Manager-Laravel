@extends('index')

@section('items')
<div class="container" style="background-color:#e9ecef">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <th scope="row">{{$item->itemId}}</th>
                <td>{{$item->name}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@stop

