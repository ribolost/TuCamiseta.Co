@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-rocket"></i> TuCamiseta.co - DASHBOARD</h1>
        </div>
        
        <h2>Welcom{{ Auth::user()->user }} to the panel of administration of your online store.</h2><hr>
        
        <div class="row">
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-warning btn-block btn-home-admin">CATEGORIES</a>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-shopping-cart  icon-home"></i>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-warning btn-block btn-home-admin">PRODUCTS</a>
                </div>
            </div>
                    
        </div>
        
        <div class="row">
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-cc-paypal  icon-home"></i>
                    <a href="{{ route('admin.order.index') }}" class="btn btn-warning btn-block btn-home-admin">ORDERS</a>
                </div>
            </div> 
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-warning btn-block btn-home-admin">USERS</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-warning btn-block btn-home-admin">ARTISTS</a>
                </div>
            </div>
                    
        </div>
        
    </div>
    <hr>

@stop