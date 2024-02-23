@extends('vehicle.parent')

@section('content')
    <div>
        <h1>Data Kendaaraan <i class="fa-solid fa-car"></i></h1>
        <hr>
        <div class="container d-flex justify-content-end mb-5">
            <a href="{{ route('vehicle.create') }}" class="btn btn-primary">Tambah <i class="fa-solid fa-plus"></i></a>
        </div>
        @if (session('succes'))
            <div class="alert alert-success">
                {{ session('succes') }}
            </div>
        @endif

      <div class="row">
    @foreach ($vehicles as $row)
        <div class="col-md-4 mb-6">
            <div class="card">
                <div class="card-body">
                    <h1 >{{ $row->name }} <i class="fa-solid fa-bus"></i></h1>
                    <p class="card-text">Warna: {{ $row->color }}</p>
                    <p class="card-text">Mesin: {{ $row->machine }}</p>
                    <p class="card-text">Harga: Rp {{ $row->price }},00 / Hari <i class="fa-solid fa-money-bill-1-wave"></i></p>
                    <div class="text-center">
                        <a href="{{ route('vehicle.show', $row->id) }}" class="btn btn-info mb-2"><i class="fa-regular fa-eye"></i> View</a>
                        <a href="{{ route('vehicle.edit', $row->id) }}" class="btn btn-warning mb-2"><i class="fa-regular fa-pen-to-square"></i> Update</a>
                        <form action="{{ route('vehicle.destroy', $row->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mb-2"><i class="fa-solid fa-xmark"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

    </div>
@endsection
