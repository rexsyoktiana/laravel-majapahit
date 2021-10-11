<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a href="{{ route('profile') }}">
                        <button class="btn btn-primary">My Profile</button>
                    </a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Alamat KTP</th>
                                <th>Pekerjaan</th>
                                <th>Nama Lengkap</th>
                                <th>Pendidikan Terakhir</th>
                                <th>No Telpon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile as $k => $v)
                                <td>{{ $v->user->username }}</td>
                                <td>{{ $v->user->email }}</td>
                                <td>{{ $v->alamat }}</td>
                                <td>{{ $v->pekerjaan }}</td>
                                <td>{{ $v->nama }}</td>
                                <td>{{ $v->pendidikan_terakhir }}</td>
                                <td>{{ $v->no_telpon }}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
