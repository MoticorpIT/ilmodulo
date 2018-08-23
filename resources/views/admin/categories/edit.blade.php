@extends('layouts.app')

@section('content')
	{{-- CATEGORIES FORM --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				<div class="card-header">
					<h5 class="card-title">Edit a Category</h5>
				</div>
				<div class="card-body">

					@include('layouts.errors')

					<form id="modulo" method="POST" action="/admin/categories/{{ $category->id }}">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" value="{{ $category->name}}" autofocus>
								</div>
							</div>
							<div class="col-md-4">
								<div class="chekbox-title-dropdowns">
									Status
								</div>
								<div class="form-check form-group">
									<select class="form-control" name="is_active" id="status">
										{{-- IF CATEGORY IS_ACTIVE MARK SELECTED --}}
										<option value="1" {{ $category->is_active == 1 ? 'selected' : '' }}>Active</option>
										<option value="0" {{ $category->is_active == 0 ? 'selected' : '' }}>Disabled</option>
									</select>
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
