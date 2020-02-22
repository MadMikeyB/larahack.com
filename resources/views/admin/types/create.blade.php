@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @include('admin.nav', ['page' => 'types'])
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create Event Type
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.types.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
