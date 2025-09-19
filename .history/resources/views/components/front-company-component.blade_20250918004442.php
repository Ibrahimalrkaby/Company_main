<!-- Client Start -->
@if (count($companies) > 0)
    <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                @foreach ( as )
                <a href="#"><img class="img-fluid" src="{{ asset("companies/$company->image") }}"
                    alt=""></a>
                @endforeach
            </div>
        </div>
    </div>
@endif

<!-- Client End -->
