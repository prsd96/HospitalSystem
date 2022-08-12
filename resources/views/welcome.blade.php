<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

    <div class="container mt-4">
        <a type="button" class="btn btn-primary" href="{{route('hospitals.create')}}">Add New Hospital</a>
        <a type="button" class="btn btn-primary" href="{{route('hospitals.index')}}">Show Hospital List</a>
    </div>

    <div class="container mt-4">
        <a type="button" class="btn btn-primary" href="{{route('doctors.create')}}">Add New Doctor</a>
        <a type="button" class="btn btn-primary" href="{{route('doctors.index')}}">Show Doctor List</a>
    </div>

    <div class="container mt-4">
        <a type="button" class="btn btn-primary" href="{{route('patients.create')}}">Add New Patient</a>
        <a type="button" class="btn btn-primary" href="{{route('patients.index')}}">Show Patient List</a>
    </div>

</body>
</html>