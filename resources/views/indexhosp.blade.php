<?php $number = 0; ?>

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

<div class="pull-right">
  <a class="btn btn-primary" href="{{ url('/') }}">Home</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Hospital Logo</th>
      <th scope="col">Hospital Location</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($hospitallist as $hospital)
    <tr>
      <td>{{ ++$number }}</td>
      <td>{{ $hospital->hname }}</td>
      <td>{{ $hospital->hlogo }}</td>
      <td>{{ $hospital->hlocation }}</td>
      <td><a class="btn btn-info" href= "{{ route('hospitals.show',$hospital->id) }}">View Details</a></td>
      <td>
        <form action="{{ route('hospitals.update',$hospital->id) }}" method="post">
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
