@extends('vehicle.parent')
@section('content')

<div class="card p-4">
<h1 class="text-center">Detail Kendaraan</h1>
    <label for="">Name kendaraan</label>
    <input type="text" value="{{ $vehicles->name }}" class="form-control" disabled>
    <label for="">warna</label>
    <input type="text" value="{{ $vehicles->color }}" class="form-control" disabled>
        <label for="">mesin</label>
    <input type="text" value="{{ $vehicles->machine }}" class="form-control" disabled>
        <label for="">harga</label>
    <input type="text" value="{{ $vehicles->price }}" class="form-control" disabled>


    <label for="">ID vehicle</label>
    <input type="text" value="{{ $vehicles->id }}" class="form-control" disabled>

  <div class="container d-flex justify-content-end mt-3">
            <a href="{{ route('vehicle.index') }}" class="btn btn-primary">Ok</a>
        </div>
</div>

@endsection