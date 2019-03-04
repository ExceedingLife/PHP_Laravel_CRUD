@extends("layout.mainlayout")

@section("content")

    <section id="section-content" class="text-center">
        <div class="container rounded contentdiv">
            <div class="row">
                <div class="col-md-12">
                    <div class="pb-2 mt-4 mb-2 border-bottom clearfix">
                        <h2>Demo Page Title</h2>
                    </div>
                </div>
            </div>
            <div class="card mx-auto mb-2" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="row d-block">
                <h1>This is a demo text</h1>
                <p>Here is some random text that is testing this demo file.</p>
            </div>
        </div>
    </section>

@endsection