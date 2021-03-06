@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @include('admin.nav', ['page' => 'types'])
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Event Type
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.types.update', $type) }}" method="post">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" class="form-control" id="id" name="id" readonly value="{{ $type->id }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $type->name) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
