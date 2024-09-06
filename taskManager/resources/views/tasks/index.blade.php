@extends('app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto pt-5">
                <form action="http://127.0.0.1:8000/tareas" method="POST"  class="w-100">
                    <div class="form-group mb-3">
                        <label for="" class="mb-3">Demo</label>
                        <input type="text" class="form-control" placeholder="Demo">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


