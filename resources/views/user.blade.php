@extends('master')
{{-- @dd($mahasiswa) --}}
@section('main')
    {{-- <div class="m-10"> --}}
    {{-- <h3 class="font-satoshi font-extrabold mb-2">Selamat Datang, {{ $mahasiswa->nama_depan }}</h3> --}}
    {{-- <a href="#" class="block bg-orange-400 py-2 px-8 w-fit text-sm font-bold text-white rounded-md mb-5">Add
                New
                Transaction</a> --}}

    {{-- <h3 class="font-satoshi font-extrabold mb-2">Barang Pinjaman</h3>
    </div> --}}

    <div class="m-10 h-full">
        <h3 class="font-satoshi font-extrabold mb-2 text-lg">Riwayat Peminjaman Barang</h3>
        <table class="table-auto border-spacing-0 w-full text-center font-satoshi shadow-lg">
            <thead class="">
                <tr>
                    <th class="bg-neutral-200 py-3">ID</th>
                    <th class="bg-neutral-200 py-3">Nama Barang</th>
                    <th class="bg-neutral-200 py-3">Tanggal Pinjam</th>
                    <th class="bg-neutral-200 py-3">Tanggal Kembali</th>
                    <th class="bg-neutral-200 py-3">NIM</th>
                    <th class="bg-neutral-200 py-3">Nama Petugas</th>
                </tr>
            </thead>
            <tbody class="text-xs">
                @foreach ($pelayanan as $layanan)
                    <tr>
                        <td class="py-4">{{ $layanan->id }}</td>
                        <td class="py-4">{{ $layanan->barang->nama_barang }}</td>
                        <td class="py-4">{{ $layanan->tanggal_pinjam }}</td>
                        <td class="py-4">{{ $layanan->tanggal_kembali }}</td>
                        <td class="py-4">{{ $layanan->NIM }}</td>
                        <td class="py-4">{{ $layanan->petugas->nama_petugas }}</td>
                    </tr>
                @endforeach
                {{-- <tr>
                    <td class="py-4">2</td>
                    <td class="py-4">Keyboard Logitech</td>
                    <td class="py-4">Mouse Komputer</td>
                    <td class="py-4">Tersedia</td>
                    <td class="py-4">Baik</td>
                    <td class="py-4">
                        <div class="flex justify-center">
                            <a href="#"
                                class="block bg-green-500 py-2 px-8 w-fit text-sm text-white rounded-md hover:bg-green-600">Tambah
                            </a>
                        </div>
                    </td>
                </tr> --}}
            </tbody>
        </table>

    </div>
    <div class="m-10 h-full">
        <h1 class="font-satoshi text-xl font-extrabold mb-2">Laporan Peminjaman Barang tahun ini</h1>
        <table class="table-auto border-spacing-0 w-full text-center font-satoshi shadow-lg">
            <thead>
                <tr>
                    <th class="bg-neutral-200 py-3">ID</th>
                    <th class="bg-neutral-200 py-3">Nama Barang</th>
                    <th class="bg-neutral-200 py-3">Tanggal Pinjam</th>
                    <th class="bg-neutral-200 py-3">Tanggal Kembali</th>
                    <th class="bg-neutral-200 py-3">NIM</th>
                    <th class="bg-neutral-200 py-3">Nama Petugas</th>
                </tr>
            </thead>
            <tbody class="text-xs">
                @foreach ($report as $port)
                    <tr>
                        <td class="py-4">{{ $port->id }}</td>
                        <td class="py-4">{{ $port->barang->nama_barang }}</td>
                        <td class="py-4">{{ $port->tanggal_pinjam }}</td>
                        <td class="py-4">{{ $port->tanggal_kembali }}</td>
                        <td class="py-4">{{ $port->NIM }}</td>
                        <td class="py-4">{{ $port->petugas->nama_petugas }}</td>
                    </tr>
                @endforeach
                {{-- <tr>
                    <td class="py-4">2</td>
                    <td class="py-4">Keyboard Logitech</td>
                    <td class="py-4">Mouse Komputer</td>
                    <td class="py-4">Tersedia</td>
                    <td class="py-4">Baik</td>
                    <td class="py-4">
                        <div class="flex justify-center">
                            <a href="#"
                                class="block bg-green-500 py-2 px-8 w-fit text-sm text-white rounded-md hover:bg-green-600">Tambah
                            </a>
                        </div>
                    </td>
                </tr> --}}
            </tbody>
        </table>
        <div class="flex justify-end mt-5">
            <h4 class="font-satoshi text-xs font-normal mb-2">Total Jumlah Peminjaman : {{ $report->count() }}</h4>
        </div>


    </div>

    <div class="m-10">
        <table class="table-auto border-spacing-0 mt-10 w-full text-center font-satoshi shadow-lg">
            <thead>
                <tr>
                    <th class="bg-neutral-200 py-3">ID</th>
                    <th class="bg-neutral-200 py-3">Nama Barang</th>
                    <th class="bg-neutral-200 py-3">Deskripsi</th>
                    <th class="bg-neutral-200 py-3">Status</th>
                    <th class="bg-neutral-200 py-3">Kondisi</th>
                </tr>
            </thead>
            <tbody class="text-xs">
                @foreach ($barang as $item)
                    <tr>
                        <td class="py-4">{{ $item->id }}</td>
                        <td class="py-4">{{ $item->nama_barang }}</td>
                        <td class="py-4">{{ $item->deskripsi }}</td>
                        <td class="py-4">Tersedia</td>
                        <td class="py-4">{{ $item->kondisi }}</td>
                    </tr>
                @endforeach
                {{-- <tr>
                    <td class="py-4">2</td>
                    <td class="py-4">Keyboard Logitech</td>
                    <td class="py-4">Mouse Komputer</td>
                    <td class="py-4">Tersedia</td>
                    <td class="py-4">Baik</td>
                    <td class="py-4">
                        <div class="flex justify-center">
                            <a href="#"
                                class="block bg-green-500 py-2 px-8 w-fit text-sm text-white rounded-md hover:bg-green-600">Tambah
                            </a>
                        </div>
                    </td>
                </tr> --}}
            </tbody>
        </table>
        <div class="flex justify-end mt-5">
            <h4 class="font-satoshi text-xs font-normal mb-2">Total Jumlah Barang : {{ $barang->count() }}</h4>
        </div>
    </div>
@endsection
