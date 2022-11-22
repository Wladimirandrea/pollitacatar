<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Product</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('resultados.index') }}"> Back</a>

        </div>

    </div>

</div>



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action="{{ route('resultados.store') }}" method="POST">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>resultado1:</strong>

                <input type="text" name="resultado1" class="form-control" placeholder="resultado1">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>resultado2:</strong>

                <input type="text" name="resultado2" class="form-control" placeholder="resultado2">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>resultado3:</strong>

                <input type="text" name="resultado3" class="form-control" placeholder="resultado1">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>resultado4:</strong>

                <input type="text" name="resultado4" class="form-control" placeholder="resultado2">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>resultado5:</strong>

                <input type="text" name="resultado5" class="form-control" placeholder="resultado1">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>resultado6:</strong>

                <input type="text" name="resultado6" class="form-control" placeholder="resultado2">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>resultado7:</strong>

                <input type="text" name="resultado7" class="form-control" placeholder="resultado1">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>resultado8:</strong>

                <input type="text" name="resultado8" class="form-control" placeholder="resultado2">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>
