@extends('master')

@section('main')
    <div class="flex justify-center m-10 h-full font-satoshi">
        <div class="h-fit shadow-lg w-max rounded-lg text-center flex-col justify-center">
            <h3 class="">Tambah barang</h3>
            <form action="/user/addbarang" method="post">
                @csrf
                <input class="block m-10 shadow-lg rounded-lg w-96 h-10 p-5 outline-none" type="text" name="nama_barang"
                    placeholder="Nama Barang" required>
                <input class="block m-10 shadow-lg rounded-lg w-96 h-10 p-5 outline-none" type="text" name="deskripsi"
                    placeholder="Deskripsi" required>
                <select name="kondisi" class="block m-10 shadow-lg rounded-lg w-96 h-10 outline-none" required>
                    <option value="Baik">Baik</option>
                    <option value="Cukup Baik">Cukup Baik</option>
                    <option value="Kurang Baik">Kurang Baik</option>
                </select>
                <div class="flex justify-center mb-10">
                    <button
                        class="bg-orange-500 text-white font-bold rounded-sm text-sm block w-fit h-fit px-6 py-2 hover:shadow-md"
                        type="submit">Tambah
                        Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection
