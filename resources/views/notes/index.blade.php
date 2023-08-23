@extends('notes.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left" >
                <h2><strong>Personal Notes Manager</strong></h2>
                <br>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('notes.create') }}"> Create New Notes</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>CONTENT</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($notes as $note)
        <tr>
            <td>{{ $note->id }}</td>
            <td>{{ $note->name }}</td>
            <td>{{ $note->detail }}</td>
            <td>
                <form action="{{ route('notes.destroy',$note->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('notes.show',$note->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('notes.edit',$note->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $notes->links() }}


@endsection
