@extends('index')

@section('insert')

<h1>{{$kek}}</h1>
<div class="container" style="background-color:rgba(255, 255, 255, 0.95); height: auto; margin-top: 100px; margin-bottom: 100px; padding: 100px; border-radius: 50px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Bildname</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Typ</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <button type="button" class="btn btn-secondary mt-3">Suchen!</button>
            </form>
        </div>
    </div>
</div>


@endsection