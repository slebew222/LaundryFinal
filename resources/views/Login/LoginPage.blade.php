<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMATIKUY Laundry | Login</title>
    {{--  <link rel="stylesheet" href="<?= url('_assets/css/login.css') ?>">  --}}
    {{--  <link rel="shortcut icon" href="<?= url('_assets/img/logo/favicon-svg.svg') ?>" type="image/x-icon">  --}}
    <link rel="stylesheet" href="/CSS/login.css">
    <link rel="stylesheet" href="/IMG/logo/favicon-svg.svg" type="image/x-icon">
</head>

<body>
    <div class="box">
        <div class="box-content">
            <div class="col box__left">
                <div class="logo">
                    <img src="/IMG/logo/LOGOIMATIKUY.svg" alt="">
                </div>
                <div class="box__left-title">
                    <h4>Login untuk akunmu</h4>
                </div>

                <div class="box__left-form">
                    <form action="" method="post">
                        @csrf
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="text" name="email" placeholder="email" required autocomplete="off">
                            </div>
                        </div>

                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="password" name="password" placeholder="Password" required
                                    autocomplete="off">
                            </div>
                        </div>

                        <div class="box__left-form-group">
                            <button type="submit" class="btn-login mt-1">Login</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col box__right">
                <div class="box__right-content">
                    <div class="text__right">
                        <h1>Admin Laundry</h1>
                    </div>

                    <img src=" /IMG/orang.png" alt="" class="box-img-orang">
                    <img src=" /IMG/celana.png" alt="" class="box-img-celana">
                    <img src=" /IMG/kaos.png" alt="" class="box-img-kaos">
                    <img src=" /IMG/kemeja.png" alt="" class="box-img-kemeja">

                    <!-- Bubble Variasi -->
                    <div class="bubble-1"></div>
                    <div class="bubble-2"></div>
                    <div class="bubble-3"></div>
                    <div class="bubble-4"></div>
                    <div class="bubble-5"></div>
                    <div class="bubble-6"></div>

                    <!-- Garis Variasi -->
                    <div class="garis garis-sm garis-1"></div>
                    <div class="garis garis-md garis-2"></div>
                    <div class="garis garis-sm garis-3"></div>
                    <div class="garis garis-md garis-4"></div>
                    <div class="garis garis-md garis-5"></div>
                    <div class="garis garis-lg garis-6"></div>
                    <div class="garis garis-lg garis-7"></div>
                    <div class="garis garis-xl garis-8"></div>
                    <div class="garis garis-sm garis-9"></div>
                    <div class="garis garis-md garis-10"></div>
                    <div class="garis garis-sm garis-11"></div>
                    <div class="garis garis-md garis-12"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p>&copy; <span id="tahun"></span> IMATIKUY LAUNDRY.</p>
        <script>
            // mengambil tanggal hari ini
            var now = new Date();
            var tahun = now.getFullYear();
            // menampilkan tahun di dalam elemen HTML
            document.getElementById("tahun").innerHTML = tahun;
        </script>

    </div>

</body>

</html>
