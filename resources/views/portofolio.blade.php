<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTOFOLIO|DEA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <style type="text/css">
        body {
            font-family: Arial;
        }
        #project {
            background-color: #f8f9fa;
        }
        /* #about {
            background-color: ;
        } */
        .form-label>span {
            color: #dc3545
        }
    </style>
    
</head>
<body>
   <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top"> 
        <div class="container">
            
                
            
            <a class="navbar-brand" href="#">Dea Agustina</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('tabel') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--akhir navbar-->
   

    
     
    
    <!--awal Home-->
    @foreach ($profil as $key => $item)

    <section id="home" class="pt-5">
        <div class="container-fluid p-0">
            <div class="p-5 text-bg-light text-center">
                <img src="\storage\{{$item -> foto}}" alt="Selpiya Setiawati" width="200" class="rounded-circle img-thumbnail">
                <h2 class="mt-3 fw-bold">{{$item -> nama_lengkap}}</h2>
                <p class="fs-5">Student | {{$item -> kategori}}</p>
            </div>
        </div>
    </section>
    <!--akhir home-->
    
    <!--awal about-->
    <section id="about" class="p-5">
        <div class="container">
            <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">About Me</h3>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <p>{{$item -> about}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--akhir about-->
    @endforeach
    
    <!--Awal Project-->
    <section id="project" class="p-5">
        <div class="container">
            <div class="p-5 text-bg-light text-center">
                <h3 class="fw-bold mb-3">My Project</h3>
                <div class="row justify-content-center">
                @foreach ($portofolio as $key => $item)

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="\storage\{{ $item -> foto}}" class="card-img-top"width="100" alt="">
                            <div class="card-body">
                                
                                <p class="card-text">{{$item -> judul}}</p>
                                <p class="card-text">{{$item -> deskripsi}}</p>
                            </div>
                        </div>
                         </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Akhir Project-->
    
    <!--Awal Contact-->
    <section id="contact" class="pt-5">
        <div class="container">
            <div class="p-5 text">
                <h3 class="fw-bold text-center mb-3">Contact</h3>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="/contact/create" method="post" id="form-contact">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap<span>*</span></label>
                                <input type="text" class="form-control" id="text" name="nama" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email<span>*</span></label>
                                <input type="text" class="form-control" id="email" name="email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan<span>*</span></label>
                                <textarea class="form-control" name="pesan" id="pesan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Akhir Contact-->
</body>

<footer>

</footer>
<!-- Copyright-->
<div class="copyright py-4 text-center text-black">
    <div class="container"><small>Copyright &copy; deaa 2023</small></div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</html>