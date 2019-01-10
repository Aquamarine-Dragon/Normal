@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add A New Boss</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Adding Failed</strong> 输入不符合要求<br><br>
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <form action="{{ url('admin/Bosses') }}" method="POST">
                            {!! csrf_field() !!}
                            <input type="text" name="name" class="form-control" required="required" placeholder="Enter Name">
                            <br>
                            <input type="number" name="HP" class="form-control" required="required" placeholder="Enter HP">
                            <br>
                            <input type="number" name="AttackForce" class="form-control" required="required" placeholder="Enter Attack Force">
                            <br>
                            <textarea name="Description" rows="10" class="form-control" required="required" placeholder="Enter Description"></textarea>
                            <br>
                            <button class="btn btn-lg btn-info">Add new descriptions</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection