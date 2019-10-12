@extends('layouts.app')

@section('content')
<!-- home peg style begins -->
<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
<body>
    <!-- end of home peg style -->

<center><h2>WELCOME</br></br>TO </br></br>EVELYN HONE GRADUATE SYSTEM</h2></center>
</br></br></br></br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
             </center>   
                <div class="card-header"><center>Dashboard</div>
                </center>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                    Login to perform tasks!
                    <center>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br><br><br><br>

<footer>
                         
                        
            <!-- Start Copyright -->
                <center>
                    <div class="copyright-section">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                       <p>
                  <a href="#">F.A.Qs</a><br>
             &copyright 2018. Designed & Developed by Margiesperanza 
                
                  </center> 
                  </a>
                </p>
              </div>
            </div>
@endsection
