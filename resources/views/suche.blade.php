@extends("index")

@section("suche")

<div class="container" style="background-color:rgba(255, 255, 255, 0.95); height: auto; margin-top: 100px; margin-bottom: 100px; padding: 100px; border-radius: 50px;">
    <div class="row">
        <h1>Suche</h1>
        <div class="col-md-6 col-md-offset-3">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Suchanfrage</label>
                    <input type="text" class="form-control" placeholder="Item Name" name="name">
                    <button type="button" class="btn btn-secondary mt-3">Suchen!</button>
                </div>
                
            </form>
        </div>
    </div>
</div>

@stop