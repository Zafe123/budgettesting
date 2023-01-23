@extends('layouts/components/Navbar.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5">
            <img src="{{URL('images/avatar.png')}}"><h2>Welcome back, {{ Auth::user()->name }}<span><button class="btn btn-success float-end rounded-pill p-2">✚&nbsp;Add Income</button></span></h6></h2>
            <p class="text-muted">This is your income. Make as much as you can.</p>
        </div>
    </div>
    <div class="container m-4 p-4">
      <div class="row">
        <h6 class="fw-bold text-success">Income records</h6>
        <table class="table border table-hover">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Amout</th>
              </tr>
              <tr>
                <td></td>
              </tr>
          </thead>
          <tbody>
             
          </tbody>
      </table>
      </div>
    </div>
</div>
@endsection
