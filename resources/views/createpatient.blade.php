<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>New Patient Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<div class="pull-right">
  <a class="btn btn-primary" href="{{ url('/') }}">Home</a>
</div>

    <div class="container mt-4">
     
        <div>
            <h3>Add New Patient Form</h3>
        </div>

        <form name="new_hosp_form" method="post" action="{{route('patients.store')}}">
            @csrf
            <div class="mb-3">
              <label for="pfirstname" class="form-label">Patient First Name</label>
              <input type="text" class="form-control" name="pfirstname">
            </div>
            <div class="mb-3">
              <label for="plastname" class="form-label">Patient Last Name</label>
              <input type="text" class="form-control" name="plastname">
            </div>
            <div class="mb-3">
              <label for="pdoc" class="form-label">Concerned Doctor</label>
              <select class="form-control" name="pdoc" id="pdoc">
                <option hidden>Choose Doctor</option>
                @foreach ($doctorhosplist_r as $doclist)
                <option value="{{ $doclist->docid }}">{{ $doclist->docname }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="pcontact" class="form-label">Patient Contact</label>
              <input type="number" class="form-control" name="pcontact">
            </div>

            <div class="mb-3">
              <label for="admitdate" class="form-label">Admit Date</label>
              <input type="date" class="form-control" name="admitdate">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>