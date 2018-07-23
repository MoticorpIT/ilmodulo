@extends('layouts.app')

		@section('content')
			<div class="content">
				<!-- CATEGORIES TABLE -->
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title pull-left">Categories</h4>
								<button type="button" class="btn btn-danger btn-just-icon pull-right">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead class="text-primary">
											<tr>
												<th>Name</th>
												<th class="d-none d-sm-block">Status</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Flavors</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Labels</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Supplies</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Juices</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Products</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endsection
