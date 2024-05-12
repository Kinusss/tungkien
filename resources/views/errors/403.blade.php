@extends('layouts.frontend')

@section('title', '403 - Không được phép')

@section('content')
	<div class="container py-5 mb-lg-3">
			<div class="row justify-content-center pt-lg-4 text-center">
				<div class="col-lg-5 col-md-7 col-sm-9">
					<h1 class="display-404 py-lg-3">403</h1>
					<h2 class="h3 mb-4">Không được phép.</h2>
					<h3 class="h5 fw-normal mb-4">Tài khoản không đủ quyền truy cập chức năng này.</h3>
					<p class="fs-md mb-4">
						<u>Dưới đây là một số liên kết gợi ý:</u>
					</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-10">
					<div class="row">
						<div class="col-md-4 mb-3">
							<a class="card h-100 border-0 shadow-sm" href="{{ route('frontend.home') }}">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<i class="ci-home text-primary h4 mb-0"></i>
										<div class="ps-3">
											<h5 class="fs-sm mb-0">Trang chủ</h5>
											<span class="text-muted fs-ms">Quay lại trang chủ</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 mb-3">
							<a class="card h-100 border-0 shadow-sm" href="#">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<i class="ci-search text-success h4 mb-0"></i>
										<div class="ps-3">
											<h5 class="fs-sm mb-0">Tìm kiếm</h5>
											<span class="text-muted fs-ms">Tìm trong cửa hàng</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 mb-3">
							<a class="card h-100 border-0 shadow-sm" href="#">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<i class="ci-help text-info h4 mb-0"></i>
										<div class="ps-3">
											<h5 class="fs-sm mb-0">Tin tức & Trợ giúp</h5>
											<span class="text-muted fs-ms">Truy cập trung tâm trợ giúp</span>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
	
	