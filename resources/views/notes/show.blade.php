@extends('notes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> <strong>Show Notes</strong></h2>
                <br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('notes.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $note->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $note->detail }}
            </div>
        </div>
    </div>
@endsection