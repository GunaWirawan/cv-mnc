<div class="container">
    <h2 class="d-inline-flex">Photo Gallery</h2>
    <div class="row justify-content-evenly">
        <div class="row row-cols-auto">
            @for($i = 0; $i < 10; $i++)
                <div class="col px-1 py-1">
                    <img class="w-100" src="https://via.placeholder.com/150" alt="services">
                </div>
            @endfor
        </div>
    </div>
</div>