<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous
    
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Form</title>
    </head>
    <body>
    <div class="col-md-6 mx-auto mt-5 container">
      <div class="card">
        <div class="card-header bg-primary text-white">Form Input Data Dosen</div>
        @if(session('status'))
        <script>
        Swal.fire({
  icon: 'succes',
  title: 'Awwo',
  text: "{{session('status')}}!",
});
</script>
@endif
          <div class="card-body">
           <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIDN</th>
      <th scope="col">Name</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Hp</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($lecturers as $index => $item)
    <tr>
      <th scope="row">{{$index +1}}</th>
      <td>{{$item->nidn}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->phone}}</td>
    </tr>
    @endforeach
  </tbody>
  </table>
    </div>
    </div>
    </div>
</div>
</body>
</html>