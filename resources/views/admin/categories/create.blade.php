@extends('layouts.app')

@section('content')
	{{-- CATEGORIES FORM --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				<div class="card-header">
					<h5 class="card-title">Create a Category</h5>
				</div>
				<div class="card-body">

					@include('layouts.errors')

					<form id="modulo" method="POST" action="/admin/categories">
						{{ csrf_field() }}
						<input type="hidden" name="is_active" value="1">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" autofocus>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="update ml-auto mr-auto">
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save Category</button>
								<a href="{{ route('categories.index') }}" class="btn btn-round">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
