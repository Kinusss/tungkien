@extends('layouts.frontend')

@section('title', 'Kết quả tìm kiếm')

@section('content')
    <div class="bg-dark pt-4">
        <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
            <div class="d-lg-flex justify-content-between pb-3">
                <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                            <li class="breadcrumb-item">
                                <a class="text-nowrap" href="{{ route('frontend.home') }}"><i class="ci-home"></i>Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Kết quả tìm kiếm</li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                    <h1 class="h3 text-light mb-0">Kết quả tìm kiếm</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5 mb-2 mb-md-4">
        <h2>Kết quả tìm kiếm cho "{{ $query }}"</h2>

        <div class="row pt-3 mx-n2">
            @forelse($sanpham as $sp)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <a class="card-img-top d-block overflow-hidden" href="{{ route('frontend.sanpham.chitiet', ['tenloai_slug' => $sp->loaisanpham->tenloai_slug, 'tensanpham_slug' => $sp->tensanpham_slug]) }}">
                            <img src="{{ env('APP_URL') . '/storage/app/' . $sp->hinhanh }}" alt="{{ $sp->tensanpham }}" />
                        </a>
                        <div class="card-body py-2">
                            <a class="product-meta d-block fs-xs pb-1" href="{{ route('frontend.sanpham.phanloai', ['tenloai_slug' => $sp->loaisanpham->tenloai_slug]) }}">{{ $sp->loaisanpham->tenloai }}</a>
                            <h3 class="product-title fs-sm">
                                <a href="{{ route('frontend.sanpham.chitiet', ['tenloai_slug' => $sp->loaisanpham->tenloai_slug, 'tensanpham_slug' => $sp->tensanpham_slug]) }}">{{ $sp->tensanpham }}</a>
                            </h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price">
                                    <span class="text-accent">{{ number_format($sp->dongia, 0, ',', '.') }}<small>đ</small></span>
                                </div>
                                <div class="star-rating">
                                    @for($i = 0; $i < 5; $i++)
                                        @if($i < round($sp->danhgia))
                                            <i class="star-rating-icon ci-star-filled active"></i>
                                        @else
                                            <i class="star-rating-icon ci-star"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <form method="post" action="{{ route('frontend.giohang.them', ['tensanpham_slug' => $sp->tensanpham_slug]) }}">
                            @csrf
                            <div class="card-body card-body-hidden">
                                <button type="submit" class="btn btn-primary btn-sm d-block w-100 mb-2">
                                    <i class="ci-cart fs-sm me-1"></i>Thêm vào giỏ hàng
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p>Không tìm thấy sản phẩm nào.</p>
                </div>
            @endforelse
        </div>

        <hr class="my-3">

        {{ $sanpham->links() }}
    </div>
@endsection
