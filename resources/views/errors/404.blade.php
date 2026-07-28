@extends('layout.layoutone')

@section('title')
    Page Not Found
@endsection

@section('content')
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="error-page-content">
                        <div class="error-page-content-heading wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>404</span> Page Not Found</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <a href="{{ route('index') }}" class="btn-default">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
