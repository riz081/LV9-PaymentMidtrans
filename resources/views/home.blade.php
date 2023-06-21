<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payyment-Midtrans</title>

    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <h1>Payment Midtrans</h1>

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/monitor.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Monitor BenQ</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
              <form action="/checkout" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="qty" class="form-label">Jumlah yang dipesan : </label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="Jumlah barang yang dipesan">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Customer : </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama!">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">No. Telp : </label>
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Masukkan nomor ponsel!">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" class="form-control" id="address" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    Checkout
                </button>
              </form>
            </div>
        </div>
    </div>

    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>