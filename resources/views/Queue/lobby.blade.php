<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lobby</title>
</head>
<style>
    body {
        text-align: center;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
       margin: 0;
    }

</style>
<body>
    <div class="mb-4 text-center font-monospace fw-bold">
      <h1>Priority Number</h1>
        <div class="col d-flex justify-content-center">
          <div class="card p-2 " style="width: 20rem;"> 
              <form method="post" action="{{route('Queue.addtoque')}}">
                @csrf
                @method('post')
                  <div class=" mb-2"><input class=" w-100" type="text"text-capitalize="active " name="lastname" placeholder="Last Name" autocapitaize="word"></div>
                  <div class=" mb-2"><input class="w-100" type="text" name="firstname" placeholder="First Name"></div>
                  <input class=" visually-hidden" type="text" name="status" value="Reserve">
                  <div class=" mb-2 ">
                    <select class="form-select" name="priorityStatus">
                        <option value="N/A">N/A</option>
                        <option value="Pregnant">Pregnant</option>
                        <option value="Senior Citizen">Senior Citizen</option>
                      </select>
                  </div>
                  <div>
                    <select class="form-select" name="laboratory">
                        <option value="SCH">Scholarship</option>
                        <option value="CHM">Chemistry</option>
                        <option value="SHL">Shelf Life</option>
                        <option value="MTR">Metrology</option>
                        <option value="CHR">Cashier</option>
                        <option value="HAL">Halal</option>
                      </select>
                  </div>
                    
                      <button type="submit" class="m-1  btn btn-primary ">Add To Queue</button>
                  </div>
              </form>
          </div>
        </div>
  </div>
</body>
</html>