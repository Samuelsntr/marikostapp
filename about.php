<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="bg-img" style="background-image: url('img/10097.jpg');">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a><img src="img/Logo MARIKOST.png" alt="" width="70" height="70"></a>
                    <input class="form-control me-2 cari" type="search" placeholder="Mau kost dimana?" aria-label="Search">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active tulisan" aria-current="page" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active tulisan" href="#">Service</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active tulisan" aria-current="page" href="#">Login/Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active tulisan" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <section class="aboutMarikost">
            <div class="row my-auto">
                <div class="col">
                    <img src="img/marikost.jpg" alt="" style="width:100% ; height:400px ;">
                </div>
                <div class="col my-auto">
                    <h1 class="fw-bold">WHAT IS MARIKOST?</h1>
                    <p>Platform layanan jasa yang membantu mengatasi masalah pemilik kost, pencari kost bahkan anak kost untuk mengelola, mencari kost hingga memenuhi kebutuhan selama menjadi anak kost. Marikost juga memberikan rekomendasi kost-kostan yang sesuai dengan kategori yang tersedia dan dilengkapi dengan deskripsi yang rinci dan lengkap. Bukan hanya itu saja, Marikost menyediakan berbagai fitur layanan jasa yang dapat membantu pengguna terutama anak kost untuk memenuhi kebutuhan sehari-hari. Gak perlu khawatir dalam menggunakannya karena fitur-fitur yang Marikost sediakan sangat user friendly.</p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col my-auto">
                    <h1 class="fw-bold">MARIKOST GOALS</h1>
                    <p>Tujuan dari Marikost sendiri sederhana yaitu ingin menyediakan suatu platform layanan jasa berbasis teknologi yang mudah digunakan sehingga pengguna seperti pemilik kost, pencari kost hingga anak kost dapat menggunakan satu platform ini untuk mengatasi segala permasalahan yang mereka hadapi.

                    </p>
                </div>
                <div class="col my-auto">
                    <img src="img/goals.PNG" alt="" style="width:100% ; height:400px ;">
                </div>
            </div>
            <div class="row">
                <div class="col my-auto">
                    <img src="img/uniqnesss.jpg" alt="" style="width:100% ; height:400px ;">
                </div>
                <div class="col my-auto">
                    <h1 class="fw-bold">OUR UNIQUENESS</h1>
                    <p>Yang membedakan Marikost dengan platform lain salah satunya adalah fitur layanan jasa seperti jasa tukang, jasa laundry, pembayaran, hingga toko kelontong yang di sediakan dalam satu platform. Sehingga, pengguna khususnya pemilik kost dan anak kost tidak perlu khawatir dalam memenuhi kebutuhan sehari-hari selama menjadi anak kost. Marikost siap membantu kalian!</p>
                </div>
            </div>

        </section>

        <?php include "footer.php"; ?>