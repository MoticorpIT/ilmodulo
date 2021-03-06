@extends('layouts.app')

@section('content')
	{{-- BREADCRUMBS --}}
	{{-- CONSIDER THIS PART OF MY SANDBOX - DID IT TO SEE HOW IT WORKED, KEPT IN CASE I WANT TO USE ACCROSS APP --}}
	<nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('orders.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
    </nav>
    {{-- SIZES TABLE --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				{{-- TABLE TITLE --}}
				<div class="card-header">
					<h4 class="card-title">You Really Shouldn't Be Here... </h4>
					<p>Pick a link below and get the ƒ#¢! out!</p>
				</div>
				{{-- TABLE --}}
				<div class="card-body">
					<ul class="list-unstyled">
						<li class="pl-2 pb-2"><a href="{{ route('orders.index') }}">Orders </a><small>View or Add Orders</small></li>
						<li class="pl-2 pb-2"><a href="{{ route('categories.index') }}">Categories </a><small>View, Add or Edit Categories</small></li>
						<li class="pl-2 pb-2"><a href="{{ route('items.index') }}">Items </a><small>View, Add or Edit Items</small></li>
						<li class="pl-2 pb-2"><a href="{{ route('roles.index') }}">Roles </a><small>View, Add or Edit Roles</small></li>
						<li class="pl-2 pb-2"><a href="{{ route('sizes.index') }}">Sizes </a><small>View, Add or Edit Sizes</small></li>
						<li class="pl-2 pb-2"><a href="{{ route('users.index') }}">Users </a><small>View, Add or Edit Users</small></li>
						<li class="pl-2 pb-2"><a href="{{ route('vendors.index') }}">Vendors </a> <small>View, Add or Edit Vendors</small></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
