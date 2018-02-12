@extends('layouts.application', [
    'nav' => 'relays'
])
@section('content')
<div class="row">
    <div class="col-md-9">
        
    </div>
    <div class="col-md-3">
        <h2>Destinations</h2>
        @foreach ($relay->destinations as $destination)
            <div class="card">
                <div class="view overlay hm-white-slight">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Card title</h4>
                    <!--Text-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
@endsection