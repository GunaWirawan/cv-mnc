<section id='productservices'>
    <div class="container">
        <div class="row p-3">
            <div class="col-12">
                <h2 class="d-inline-block">News and Event</h2>
                <div class="row h-100 justify-content-evenly align-items-center">
                    <div class="col p-4">
                        @for($i = 0; $i < 4; $i++)
                            <div class="row">
                                @include('components.news_events')
                            </div>
                        @endfor
                    </div>
                    <div class="col">
                        <div class="row">
                            <video width="560" height="320" poster="https://via.placeholder.com/560x320">
                                <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>