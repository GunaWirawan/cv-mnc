<div class="container">
    <h2 class="d-inline-flex">Video Gallery</h2>
    <div class="row justify-content-evenly">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
            @for($i = 0; $i < 10; $i++)
                <div class="col px-1">
                    <video class="w-100" poster='https://via.placeholder.com/426x240'>
                        <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                    </video>
                </div>
            @endfor
        </div>
    </div>
</div>