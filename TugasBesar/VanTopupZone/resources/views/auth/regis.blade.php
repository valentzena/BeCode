<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('css/regis.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="image-container">
        <img src="{{ asset('gambar/dm.jpg') }}" alt="Logo" />
    </div>
    <div class="wrapper">
        <h2>REGISTRASI</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <!-- Nama -->
            <div class="mb-1">
                <label for="name" class="form-label text-white">Full Name</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Email -->
            <div class="mb-1">
                <label for="email" class="form-label text-white">Email</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Password -->
            <div class="mb-1">
                <label for="password" class="form-label text-white">Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!-- Konfirmasi Password -->
            <div class="mb-1">
                <label for="password_confirmation" class="form-label text-white">Konfirmasi Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>
            </div>
            <div class="form-check mb-1">
                <input type="checkbox" id="terms" class="form-check-input">
                <label for="terms" class="form-check-label">I accept terms & conditions</label>
            </div>
            <div class="mb-1">
                <button type="submit" class="btn w-100">Daftar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>