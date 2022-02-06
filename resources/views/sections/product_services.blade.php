<section id='productservices'>
    <div class="container">
        <div class="row p-3">
            <div class="col-12">
                <h2 class="d-inline-block">Product and Services</h2>
                <div class="row h-100 justify-content-evenly align-items-center">
                    @for($i = 0; $i < 5; $i++)
                        @include('components.feature')
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>