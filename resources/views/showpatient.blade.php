<!DOCTPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Patient Records</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div>
<a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Patient ID</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Patient Contact</th>
      <th scope="col">Admit Date</th>
      <th scope="col">Discharge Date</th>
    </tr>
  </thead>

  <tbody>
    <tr>
    <td>{{ $patientdetails[0]->id }}</td>
    <td>{{ $patientdetails[0]->pfirstname.' '.$patientdetails[0]->plastname }}</td>
    <td>{{ $patientdetails[0]->dochospname }}</td>
    <td>{{ $patientdetails[0]->docname }}</td>
    <td>{{ $patientdetails[0]->pcontact }}</td>
    <td>{{ $patientdetails[0]->admitdate }}</td>

    @if($patientdetails[0]->dischargedate ==null)         
      <td>{{ '0000-00-00' }}</td>         
    @else
      <td>{{ $patientdetails[0]->dischargedate }}</td>        
    @endif
    </tr>

  </tbody>
  
</table>

</body>
</html>
