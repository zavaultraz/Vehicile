@extends('vehicle.parent')

@section('content')
    <div class="card p-4">

        <div class="card p-4">
            <!-- allert -->
            <!-- {{-- error alert --}} -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <h1>Create Category</h1>

            <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-floating mb-3">
                    <input type="" class="form-control" id="floatingInput" placeholder="Kendaraan" name="name">
                    <label for="floatingInput">Nama Kendaraan</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="" class="form-control" id="floatingInput" placeholder="kesehatan" name="tire_wheel">
                    <label for="floatingInput">Jumlah Roda</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="" class="form-control" id="floatingInput" placeholder="kesehatan" name="color">
                    <label for="floatingInput">Warna</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="" class="form-control" id="floatingInput" placeholder="kesehatan" name="price">
                    <label for="floatingInput">Harga</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="" class="form-control" id="floatingInput" placeholder="kesehatan" name="machine">
                    <label for="floatingInput">Jenis Mesin</label>
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan</button>

            </form>

        </div>

    </div>
@endsection
