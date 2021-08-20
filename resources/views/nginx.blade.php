@extends('layouts.app')
@section('content')
<div class="container">
            Data Nginx
            <hr>
           
            <div class="col-md-4 mb-3">
        <form class="form d-flex" method="get" action="{{ route('searchnginx') }}">
    <div class="form-group w-100 mb-2">
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan Ip Address ... ">
        <button type="submit" class="btn btn-outline-primary" style="width: 23%;">Search</button>

        
    </div>
</form>
        </div>
        <div class="col-md-8 mt-4">
          <button class="btn btn-primary mb-4">
                <a href="{{ route('nginx.export') }}" style="color: white; text-decoration: none;">Export to CSV File</a>
            </button>
        </div>
       
            <table class="table table-bordered">
  <thead class="text-center">
    <tr>
      <th>No</th>
      <th>Ip Address</th>
      <th>Date</th>
      <th>Method</th>
      <th>Status Server</th>
      <th>Ping Ms</th>
      <th>Site Request</th>
      <th>rt</th>
      <th>uct</th>
      <th>uht</th>
      <th>urt</th>
      <th>gz</th>
    </tr>
  </thead>
  <tbody class="text-center">

    @php $i=1; @endphp
  @foreach($nginx as $datalog)
      <tr>
          <td>{{ $i++ }}</td>
          <td>{{ $datalog->ip_address }}</td>
          <td>{{ $datalog->date }}</td>
          <td>{{ $datalog->method }}</td>
          <td>{{ $datalog->status_server }}</td>
          <td>{{ $datalog->ping_ms }}</td>
          <td>{{ $datalog->site_request }}</td>
          <td>{{ $datalog->rt }}</td>
          <td>{{ $datalog->uct }}</td>
          <td>{{ $datalog->uht }}</td>
          <td>{{ $datalog->urt }}</td>
          <td>{{ $datalog->gz }}</td>
        </tr>
    @endforeach
  </tbody>
</table>

{{ $nginx->links() }}

</div>
@endsection