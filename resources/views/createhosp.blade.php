<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>New Hospital Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<div class="pull-right">
  <a class="btn btn-primary" href="{{ url('/') }}">Home</a>
</div>

    <div class="container mt-4">
     
        <div>
            <h3>Add New Hospital Form</h3>
        </div>

        <form name="new_hosp_form" method="post" action="{{route('hospitals.store')}}">
            @csrf
            <div class="mb-3">
              <label for="hosp_name" class="form-label">Hospital Name</label>
              <input type="text" class="form-control" name="hname">
            </div>
            <div class="mb-3">
              <label for="hosp_logo" class="form-label">Hospital Logo</label>
              <input type="text" class="form-control" name="hlogo">
            </div>
            <div class="mb-3">
              <label for="location" class="form-label">Hospital Location</label>
              <input type="text" class="form-control" name="hlocation">
            </div>
            <div class="mb-3">
              <label for="staff_count" class="form-label">Hospital Staff Count</label>
              <input type="number" class="form-control" name="hstaffcount">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>