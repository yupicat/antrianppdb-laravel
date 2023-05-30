<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antrian PPDB</title>
    <!-- My CSS -->
<link rel="stylesheet" type="text/css" href="{!! asset('storage/style.css') !!}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  </head>
  <body>
    {{-- <div class="border">
        <nav>
        </nav>
      </div> --}}
      <div class="container-fluid text-center">
        <div class="row py-3 border mb-5 shadow">
          <div class="col">
            <h1 class="text-center">DAFTAR ANTRIAN PPDB 2023/2024</h1>
          </div>
        </div>

        <div class="row px-3 row-cols-1 row-cols-md-3 g-5 ">
          <div class="col">
            <div class="card">
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>NOMOR ANTRIAN</b>
              </div>
              <div class="card-body">
                <h1 class="card-title" style="font-size: 230px;">2</h1>
              </div>
              <div style="background-color: #526D82; color:white;" class="card-header">
                <b>LOKET 2</b>
              </div>
            </div>
          </div>
          <div class="col">
            <video controls width="800">
              <source src="/public/storage/video.mp4" type="video/mp4">
            </video>
          </div>
        </div>

        <div class="row px-3 row-cols-1 row-cols-md-4 g-5 mt-5 ">
          <div class="col">
            <div class="card ">
              <div class="card-header " style="background-color: #526D82; color:white;">
                LOKET 1
              </div>
              <div class="card-body">
                <h3 class="card-title" style="font-size: 50px;">1</h3>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-header" style="background-color: #526D82; color:white;">
                LOKET 2
              </div>
              <div class="card-body">
                <h3 class="card-title"  style="font-size: 50px;">2</h3>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-header" style="background-color: #526D82; color:white;">
                LOKET 3
              </div>
              <div class="card-body">
                <h3 class="card-title">3</h3>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-header"style="background-color: #526D82; color:white;">
                LOKET 4
              </div>
              <div class="card-body">
                <h3 class="card-title"  style="font-size: 50px;">4</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>