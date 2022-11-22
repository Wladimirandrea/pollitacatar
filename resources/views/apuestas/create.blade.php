<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('apuestas.store') }}" method="POST">

                        @csrf



                         <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-group">

                                    <strong>apuesta1:</strong>

                                    <input type="text" name="apuesta1" class="form-control" placeholder="Name">

                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <div class="form-group">

                                    <strong>Apuesta2:</strong>

                                    <input type="text" name="apuesta2" class="form-control" placeholder="Name">


                                </div>

                            </div>
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="form-group">

                                        <strong>apuesta3:</strong>

                                        <input type="text" name="apuesta3" class="form-control" placeholder="Name">

                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="form-group">

                                        <strong>Apuesta4:</strong>

                                        <input type="text" name="apuesta4" class="form-control" placeholder="Name">


                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">

                                            <strong>apuesta5:</strong>

                                            <input type="text" name="apuesta5" class="form-control" placeholder="Name">

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">

                                            <strong>Apuesta6:</strong>

                                            <input type="text" name="apuesta6" class="form-control" placeholder="Name">

                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                            <div class="form-group">

                                                <strong>apuesta7:</strong>

                                                <input type="text" name="apuesta7" class="form-control" placeholder="Name">

                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">

                                            <div class="form-group">

                                                <strong>Apuesta8:</strong>

                                                <input type="text" name="apuesta8" class="form-control" placeholder="Name">
                                                <input type="hidden" name="id_resultado" value="1" class="form-control" placeholder="Name">
                                            </div>

                                        </div>



                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                    <button type="submit" class="btn btn-primary">Submit</button>

                            </div>

                        </div>



                    </form>
                </div>


            </div>
        </div>
    </div>

</div>
