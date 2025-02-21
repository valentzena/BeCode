<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Organisasi</title>
    <!-- Tambahkan link ke Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <div class="mb-6 text-center">
            <h1 class="text-2xl font-bold text-gray-700">Edit Game</h1>
        </div>
        <div class="mb-6 text-center">
            <a href="/game" class="text-blue-500 hover:underline">Kembali</a>
        </div>
        <form method="post" action="/modul/update/{{ $game->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">nama</label>
                <input type="text" name="nama" placeholder="Isi nama" value="{{ $game->nama }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if($errors->has('nama'))
                <div class="text-red-500 text-sm mt-1">
                    {{$errors->first('nama')}}
                </div>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">gambar</label>
                <input type="file" name="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                <img src="{{ asset('storage/' . $game->gambar) }}" alt="Gambar saat ini" class="mt-2 w-32 h-32 object-cover rounded">
            </div>
            <div class="text-center">
                <input type="submit" value="Edit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            </div>
        </form>
    </div>
</body>
</html>