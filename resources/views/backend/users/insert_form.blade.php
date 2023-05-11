<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard Users Page</title>
  <link rel="stylesheet" href="{{asset('build/assets/css/app.css')}}">



  <!-- Custom styles for this template -->
  <link href="{{asset('build/assets/css/dashboard.css')}}" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Laravel Ecommerce</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Cixis</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                Idareetme paneli
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Str::of(url()->current())->contains("/users") ? "active" : "" }}"
              href="{{url("/users")}}">
                <span data-feather="file"></span>
                Istafadeciler

              </a>
            </li>
          </ul>


        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Istifadeciler</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

              <a href="/users/create" class="btn btn-sm btn-outline-danger">Elave et</a>
            </div>
          </div>
        </div>
        <h2>Yeni istifadeci elave et</h2>
        <div class="table-responsive">
          <form action="{{url("/users")}}" method="POST">
          @csrf
            <div class="row">
              <div class="col-lg-6">
                <label for="name" class="form-label">Ad Soyad</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ad Soyad daxil edin">
              </div>
              <div class="col-lg-6">
                <label for="email" class="form-label">Eposta daxil edin</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-posta daxil edin">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label for="password" class="form-label">Parol daxil edin</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Parol daxil ediniz">
              </div>
              <div class="col-lg-6">
                <label for="password2" class="form-label">Parol tekrari</label>
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Parolu yeniden daxil edin">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-check mt-4">
                  <input class="form-check-input" type="checkbox"  id="is_admin" name="is_admin" value="1">
                  <label class="form-check-label" for="is_admin">
                    Yetkili istifadeci

                  </label>
                </div>

              </div>
              <div class="col-lg-6">
                <div class="form-check mt-4">
                  <input class="form-check-input" type="checkbox"  id="is_active" name="is_active" value="1">
                  <label class="form-check-label" for="is_active">
                    Aktiv istifadeci

                  </label>


                </div>
              </div>
            </div>
            <div class="row">
           <div class="col-12">
           <button type="sumbit" class="btn btn-success mt-2">Elave et</button>
           </div>
            </div>
          </form>




        </div>

      </main>
    </div>
  </div>

  <script type="text/javascript" src="{{asset('build/assets/js/app.js')}}"></script>
</body>

</html>