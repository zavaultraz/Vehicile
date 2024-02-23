@extends('vehicle.parent')
@section('content')

<div class="card p-4">

    <form action="{{ route('vehicle.update', $vehicles->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $vehicles->name }}">
        </div>

        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" value="{{ $vehicles->color }}">
        </div>

        <div class="form-group">
            <label for="machine">Machine</label>
            <input type="text" class="form-control" id="machine" name="machine" value="{{ $vehicles->machine }}">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $vehicles->price }}">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
    </form>

</div>

@endsection

