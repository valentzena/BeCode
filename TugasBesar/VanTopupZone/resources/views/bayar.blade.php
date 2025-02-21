<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bayar.css') }}">
</head>
<body>
  <div class="container mt-4">
    <h4 class="mb-4"><img src="{{ asset('gambar/dm ml.png') }}" alt="Diamond Icon" style="width: 100px; margin-right: 10px;"> Pilih Metode Pembayaran</h4>
    <div class="row">
      <div class="col-md-4">
        <div class="pembayaran-card">
            <h5 class="p1">Dana</h5>
          <div class="info">Dapatkan potongan sebesar 4%</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pembayaran-card">
            <h5 class="p1">ShopeePay</h5>
          <div class="info">Dapatkan potongan sebesar 3%</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pembayaran-card">
            <h5 class="p1">Gopay</h5>
          <div class="info">Dapatkan potongan sebesar 2%</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pembayaran-card">
            <h5 class="p1">OVO</h5>
          <div class="info">Dapatkan potongan sebesar 1%</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pembayaran-card">
            <h5 class="p1">Transfer Bank</h5>
          <div class="info">BCA, BRI, BNI, dan Mandiri</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pembayaran-card">
            <h5 class="p1">Pulsa</h5>
          <div class="info">Telkomsel, Indosat, XL, dan Tri </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
