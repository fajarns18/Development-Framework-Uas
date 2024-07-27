<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('styles.css') }}" />
  <!-- DataTables Responsive CSS -->
  <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
  <title>SISTEM INFORMASI AKADEMIK SEKOLAH</title>
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>PUNKDAWA</div>
      <div class="list-group list-group-flush my-3">
        <a href="/guru" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="/jadwal" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-chart-line me-2"></i>jadwal</a>
        <a href="/kelas" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-paperclip me-2"></i>Kelas</a>
        <a href="/kurikulum" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-shopping-cart me-2"></i>Kurikulum</a>
        <a href="/nilai" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-gift me-2"></i>Nilai</a>
        <a href="/pegawai" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-comment-dots me-2"></i>Pegawai</a>
        <a href="/pelajaran" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-map-marker-alt me-2"></i>Pelajaran</a>
        <a href="/siswa" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-map-marker-alt me-2"></i>Siswa</a>
        <a href="/login/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-2 m-0">Dashboard</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-2"></i>LAOS
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                  {{-- <a class="dropdown-item" href="{{ route('logout') }}">Logout</a> --}}
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid px-4">
        

        <div class="row">
          <div class="col">

            @include($content)

          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- DataTables JavaScript -->
  <script src="../js/dataTables/jquery.dataTables.min.js"></script>
  <script src="js/dataTables/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true
      });
    });
  </script>
  <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
      el.classList.toggle("toggled");
    };
  </script>
</body>

</html>
