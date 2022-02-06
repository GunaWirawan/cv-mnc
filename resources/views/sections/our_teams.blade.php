<section id='productservices'>
    <div class="container">
        <div class="row p-3">
            <div class="col-12">
                <h2 class="d-inline-block">Our Teams</h2>
                <div class="row h-100 justify-content-evenly align-items-center">
                    @for($i = 0; $i < 6; $i++)
                        @include('components.team_profile')
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>