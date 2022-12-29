<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elgreen Hotel Lodging</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h1>Elgreen Hotels Ltd</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/elgreen">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/lodging" 
                {{-- data-bs-toggle="modal" data-bs-target="#staticBackdrop" --}}

                >New Guests</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/allsales" id="allsale">Old Guest</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">New Stocks</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todaysales">Available Rooms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/todaysales">Occupied Rooms</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    <div class="container">

    
    <br>
        <div class="card" >
            <div class="card-header">
              Guest Details
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">First Name</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Last Name</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-6">
                      <label for="inputAddress2" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-6">
                      <label for="inputAddress2" class="form-label">Ocupation</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">Room Class</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Room Number</label>
                      <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>

                
            </div>
          </div>
    

    </div>







    
</body>
</html>