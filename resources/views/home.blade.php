@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="container">
                      <h3>Follow the Tabs</h3>
                      <hr> 
                           <div class="row">
                             <div class="col-sm-2 col-sm-offset-5">
                               <div role="tabpanel">
                                <!-- Nav tabs -->
                                <center>
                                
                              <!-- Tab panes -->
                            <!-- Tab panes -->
 
        
    
 

                              
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
