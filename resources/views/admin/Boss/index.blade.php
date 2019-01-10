@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome Boss</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <a href="{{ url('admin/Bosses/create') }}" class="btn btn-lg btn-primary">New</a>

                        @foreach ($boss as $Boss)
                            <hr>
                            <div class="Boss">
                                <h4>{{ $Boss->name }}</h4>
                                <div class="content">
                                    <p>
                                        AttackForce: {{ $Boss->AttackForce }}
                                    </p>
                                    <p>
                                        HP: {{$Boss->HP}}
                                    </p>
                                    <p>
                                        {{$Boss->Description}}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ url('admin/Bosses/'.$Boss->id.'/edit') }}" class="btn btn-success">Edit</a>
                            <form action="{{ url('admin/Bosses/'.$Boss->id) }}" method="POST" style="display: inline;">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection