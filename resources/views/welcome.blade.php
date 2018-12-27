@extends('layouts.appWelcome')
@section('content')
<section id="about" class="about-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">Expediente</h2>
                <p class="text-white-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Omnis, sunt asperiores numquam et quibusdam dolores aut consequuntur tenetur repudiandae 
                    inventore voluptatibus excepturi ullam minus dolorum similique veniam, architecto, perspiciatis voluptatem.
                </p>
            </div>
        </div>
        <img src="{{asset('startbootstrap/img/ipad1.png')}}" class="img-fluid" alt=""> 
    </div><br>
</section>
<section id="projects" class="projects-section bg-light">
    <div class="container">
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" src="{{asset('startbootstrap/img/bg-masthead.jpg')}}" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Descripcion1</h4>
                    <p class="text-black-50 mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione possimus,
                        animi id expedita vero reiciendis saepe, distinctio magni nihil necessitatibus consectetur.
                        Repudiandae minima iure doloremque officiis quisquam voluptatum blanditiis nisi.
                    </p>
                </div>
            </div>
        </div>  
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{asset('startbootstrap/img/demo-image-01.jpg')}}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Descripcion2</h4>
                            <p class="mb-0 text-white-50">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Nostrum modi assumenda vitae cupiditate sit dolorum numquam adipisci praesentium,
                                repellat sunt dolorem expedita atque, magnam nesciunt doloribus? Quod excepturi in enim?
                            </p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{asset('startbootstrap/img/demo-image-02.jpg')}}" alt="">
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Descripcion3</h4>
                            <p class="mb-0 text-white-50">
                                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia nihil,
                                   voluptates nulla vitae libero accusantium ullam fuga voluptatibus
                                  temporibus aspernatur in dignissimos repellat? At maxime quidem voluptates eaque, nulla impedit?
                            </p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection