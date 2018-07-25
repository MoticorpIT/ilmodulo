@extends('layouts.app')

		@section('content')
			<!-- CATEGORIES FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Create A Category</h5>
						</div>
						<div class="card-body">

							@include('layouts.errors')

							<form method="POST" action="/admin/categories">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="chekbox-title-dropdowns">
											Status
										</div>
										<div class="form-check form-group">
											<select class="form-control" name="is_active" id="status">
												<option value="1">Active</option>
												<option value="0">Disabled</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Save Category</button>
										<a href="{{ URL::previous() }}" class="btn btn-round">Cancel</a>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		@endsection