@extends('master')

@section('main')
    <div class="flex justify-center m-10 h-full font-satoshi">
        <div class="h-fit shadow-lg w-max rounded-lg text-center flex-col justify-center">
            <h3 class="">Form Peminjaman barang</h3>
            <form action="/user/store" method="post">
                @csrf
                <input class="block m-10 shadow-lg rounded-lg w-96 h-10 p-5 outline-none" type="text" name="NIM"
                    placeholder="NIM" required>
                <input class="block m-10 shadow-lg rounded-lg w-96 h-10 p-5 outline-none" type="datetime-local"
                    name="tanggal_pinjam" value="{{ Carbon\Carbon::now() }}" required>
                <input class="block m-10 shadow-lg rounded-lg w-96 h-10 p-5 outline-none" type="datetime-local"
                    name="tanggal_kembali" required>
                <select name="barang_id" class="block m-10 shadow-lg rounded-lg w-96 h-10 outline-none" required>
                    @foreach ($barang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
                    @endforeach
                </select>
                <select name="petugas_id" class="block m-10 shadow-lg rounded-lg w-96 h-10 outline-none" required>
                    @foreach ($petugas as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_petugas }}</option>
                    @endforeach
                </select>
                <div class="flex justify-center mb-10">
                    <button
                        class="bg-orange-500 text-white font-bold rounded-sm text-sm block w-fit h-fit px-6 py-2 hover:shadow-md"
                        type="submit">Pinjam
                        Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection
