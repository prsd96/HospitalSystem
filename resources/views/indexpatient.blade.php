<?php $number = 0; ?>

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

<div class="pull-right">
  <a class="btn btn-primary" href="{{ url('/') }}">Home</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Patient Doctor</th>
      <th scope="col">Admit Date</th>
      <th scope="col">Discharge Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($patientlist as $patient)
    <tr>
      <td>{{ ++$number }}</td>
      <td>{{ $patient->pfirstname.' '.$patient->plastname }}</td>
      <td>{{ $patient->pdocname }}</td>
      <td>{{ $patient->admitdate }}</td>

      @if($patient->dischargedate ==null)         
        <td>{{ '0000-00-00' }}</td>         
      @else
        <td>{{ $patient->dischargedate }}</td>        
      @endif

      <td><a class="btn btn-info" href= "{{ route('patients.show',$patient->id) }}">View Details</a></td>
      <td>
        <form action="{{ route('patients.update',$patient->id) }}" method="post">
          <input class="btn btn-default" type="submit" value="Inactive" />
          @method('PUT')
          @csrf
        </form>
      </td> 
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>
