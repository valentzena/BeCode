<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login VanTopUpZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="script.js" defer></script>
    <style>
        body {
            background: linear-gradient(135deg, #4c69e8, #c77dff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .form-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .header {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .header img {
            width: 80px;
            height: auto;
            margin-bottom: 0.5rem;
        }
        .header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: bold;
            color: #4c69e8;
        }
        .form-text {
            font-size: 0.85rem;
            color: #6c757d;
        }
        button.btn-primary {
            transition: all 0.3s ease;
        }
        button.btn-primary:hover {
            background-color: #3c56c5;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="header">
            <img src="{{ asset('gambar/dm.jpg') }}" alt="Logo">
            <h3>Selamat Datang di VanTopUpZone!</h3>
        </div>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  placeholder="Masukkan Email" name="email">
                @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingatkan saya</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim</button>
        </form>
    </div>
</body>
</html>