@extends('layouts.app')
@section('content')
<div class="container">

            Data Uwsgi
            <hr>

            <div class="col-md-4 mb-3">
        <form class="form d-flex" method="get" action="{{ route('searchuwsgi') }}">
    <div class="form-group w-100 mb-2">
        <input type="text" name="searchuwsgi" class="form-control w-75 d-inline" id="searchuwsgi" placeholder="Search address ...">
        <button type="submit" class="btn btn-outline-primary" style="width: 23%;">Search</button>

        
    </div>
</form>
        </div>
        <div class="col-md-8 mt-4">
          <button class="btn btn-primary mb-4">
                <a href="{{ route('uwsgi.export') }}" style="color: white; text-decoration: none;">Export to CSV File</a>
            </button>
        </div>
       
            <table class="table table-bordered">
  <thead class="text-center">
    <tr>
      <th>no</th>
      <th>Address Space Usage</th>
      <th>Rss Usage</th>
      <th>Pid</th>
    </tr>
  </thead>
  <tbody class="text-center">

    @php $i=1; @endphp
  @foreach($uwsgi as $datalog)
      <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $datalog->address_space_usage }}</td>
          <td>{{ $datalog->rss_usage }}</td>
          <td>{{ $datalog->pid }}</td>
        </tr>
    @endforeach
  </tbody>
</table>

    {{ $uwsgi->links() }}

  </div>
@endsection