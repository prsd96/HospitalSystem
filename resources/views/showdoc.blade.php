<!DOCTPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Doctor Records</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div>
  <a class="btn btn-primary" href="{{ route('doctors.index') }}"> Back</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Doctor ID</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Doctor Hospital</th>
      <th scope="col">Doctor Specialization</th>
      <th scope="col">Doctor Contact</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>{{ $doctordetails->id }}</td>
      <td>{{ $doctordetails->dfirstname.' '.$doctordetails->dlastname }}</td>
      <td>{{ $doctordetails->dochosp }}</td>
      <td>{{ $doctordetails->dspecial }}</td>
      <td>{{ $doctordetails->dcontact }}</td>
    </tr>
  </tbody>

</table>
</body>
</html>