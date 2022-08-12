<!DOCTPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Hospital Records</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div>
<a class="btn btn-primary" href="{{ route('hospitals.index') }}"> Back</a>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Hospital ID</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Hospital Logo</th>
      <th scope="col">Hospital Location</th>
      <th scope="col">Staff Count</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>{{ $hospdetails_result->id }}</td>
    <td>{{ $hospdetails_result->hname }}</td>
    <td>{{ $hospdetails_result->hlogo }}</td>
    <td>{{ $hospdetails_result->hlocation }}</td>
    <td>{{ $hospdetails_result->hstaffcount }}</td>
    </tr>
  </tbody>
</table>

</body>
</html>
