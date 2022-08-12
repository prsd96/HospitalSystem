<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>New Doctor Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<div class="pull-right">
  <a class="btn btn-primary" href="{{ url('/') }}">Home</a>
</div>

    <div class="container mt-4">
     
        <div>
            <h3>Add New Doctor Form</h3>
        </div>

        <form name="new_hosp_form" method="post" action="{{route('doctors.store')}}">
            @csrf

            <div class="mb-3">
              <label for="dfirstname" class="form-label">Doctor First Name</label>
              <input type="text" class="form-control" name="dfirstname">
            </div>
            <div class="mb-3">
              <label for="dlastname" class="form-label">Doctor Last Name</label>
              <input type="text" class="form-control" name="dlastname">
            </div>
            <div class="mb-3">
              <label for="dhosp" class="form-label">Doctor Hospital</label>
              <select class="form-control" name="dhosp" id="dhosp">
                <option hidden>Choose Doctor Hospital</option>
                @foreach ($doctorhosplist_r as $dochosp)
                <option value="{{ $dochosp->doctorhospid }}">{{ $dochosp->doctorhospidname }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="dspecial" class="form-label">Doctor Specialization</label>
              <input type="text" class="form-control" name="dspecial">
            </div>
            <div class="mb-3">
              <label for="dcontact" class="form-label">Doctor Contact</label>
              <input type="number" class="form-control" name="dcontact">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>

</body>
</html>