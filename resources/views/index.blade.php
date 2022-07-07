@extends('master')

@section('main')
    <div class="m-10">
        <table class="table-auto border-spacing-0 w-full text-center font-satoshi shadow-lg">
            <thead>
                <tr>
                    <th class="bg-neutral-200 py-3">ID</th>
                    <th class="bg-neutral-200 py-3">Nama Barang</th>
                    <th class="bg-neutral-200 py-3">Deskripsi</th>
                    <th class="bg-neutral-200 py-3">Status</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                <tr>
                    <td class="py-4">1</td>
                    <td class="py-4">Mouse Logitech</td>
                    <td class="py-4">Mouse Komputer</td>
                    <td class="py-4">Tersedia</td>
                </tr>
                <tr>
                    <td class="py-4">2</td>
                    <td class="py-4">Keyboard Logitech</td>
                    <td class="py-4">Mouse Komputer</td>
                    <td class="py-4">Tersedia</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
