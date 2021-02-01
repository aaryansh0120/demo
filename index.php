<?php $page = 'index';
include 'header.php'; ?>

<!-- Carousel for Landing page images -->
<div id="carouselExampleCaptions" class="carousel slide my-2" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/hospital09.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h4>Welcome to Kavita Memorial Nursing Home</h4>
                <p>Available 24x7: 77830 06621, 8760871111</p>
                <button class="btn btn-danger">Treatment</button>
                <button class="btn btn-primary">Rejuvenate</button>
                <button class="btn btn-success">Healing</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/hospital07.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h4>Its a first multi speciality hospital in your town</h4>
                <p>Treatment, Rejuvenate, Healing</p>
                <button class="btn btn-danger">Treatment</button>
                <button class="btn btn-primary">Rejuvenate</button>
                <button class="btn btn-success">Healing</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/hospital08.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h4>Best hospital in your city</h4>
                <p>Treatment, Rejuvenate, Healing</p>
                <button class="btn btn-danger">Treatment</button>
                <button class="btn btn-primary">Rejuvenate</button>
                <button class="btn btn-success">Healing</button>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<!-- Services Section -->
<section class="my-5">
    <div class="bg-light">
        <h2 class="text-center Display-5">Services</h2>
        <hr class="mx-auto w-25" />
        <div class="container-fluid my-5">
            <div class="row">
                <div class="card mb-3 col-lg-6 col-md-6 col-12 col-xxl-6 mx-auto">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/card04.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">OPD SERVICES</h3>
                                <p class="card-text">We provide 24 x 7 consultation services in hajipur. We also provide cardiology consultation daily between 2 pm to 5 pm.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-lg-6 col-md-6 col-12 col-xxl-6 mx-auto">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/card03.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">IPD & Emergency services</h3>
                                <p class="card-text">We provide 24x7 IPD & Emergency services by qualified doctors and trained staffs. Kavita Memorial Nursing Home is equipped with modern life saving devices and well equiped operation theatre.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 text-center pb-4">
                <p><a class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to Book" href="appointment.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index" viewBox="0 0 16 16">
                            <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 1 0 1 0V6.435a4.9 4.9 0 0 1 .106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 0 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.035a.5.5 0 0 1-.416-.223l-1.433-2.15a1.5 1.5 0 0 1-.243-.666l-.345-3.105a.5.5 0 0 1 .399-.546L5 8.11V9a.5.5 0 0 0 1 0V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v5.34l-1.2.24a1.5 1.5 0 0 0-1.196 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z" />
                        </svg> Book Appointment</a></p>
            </div>
        </div>


    </div>
</section>

<!-- Our Team Section -->
<div class="container my-4">
    <h2 class="text-center text-dark font-weight-bolder Display-5"><em style="color:gold;">Our Team</em></h2>
    <hr class="mx-auto w-25" />
    <div class="row my-4">
        <div class="col-lg-4 col-md-4 col-12 col-xxl-4">
            <img src="images\pic01.jpg" class="bd-placeholder-img rounded-circle mx-auto d-block" width="140" height="140" alt="">
            <h2 class="text-center">Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 col-xxl-4">
            <img src="images\pic01.jpg" class="bd-placeholder-img rounded-circle mx-auto d-block" width="140" height="140" alt="">

            <h2 class="text-center">Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 col-xxl-4">
            <img src="images\pic01.jpg" class="bd-placeholder-img rounded-circle mx-auto d-block" width="140" height="140" alt="">

            <h2 class="text-center">Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
    </div>
</div>


<!-- Google Map -->
<div class="row">
    <div class="bg-dark">
        <h2 class="text-center Display-5 pt-3">Locate Us</h2>
        <hr class="mx-auto w-25" />

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-xxl-12 text-center pb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48372.623694756745!2d85.14812388163638!3d25.69393407044444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc352c77bc48a951!2sKavita%20Memorial%20Nursing%20Home!5e0!3m2!1sen!2sin!4v1611996365619!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
    <div class="mt-5">
        <h2 class="text-center Display-5">Our Reviews</h2>
        <hr class="mx-auto w-25" />
    </div>
         <script src="https://apps.elfsight.com/p/platform.js" defer></script>
         <div class="elfsight-app-479ba60c-6d0f-40a0-84b9-4ced53566427"></div>
    </div>
</div>

<!-- Whatsapp Chat Feature -->
<div class="container-fluid text-start">
    <a href="https://wa.me/917783006621/?text=I want Consultation with you." title="click to open whatsapp chat"><button class="btn btn-success my-4 rounded-pill">
            <i class="fa fa-whatsapp"></i> Chat Now
        </button></a>
</div>

<?php include 'footer.php'; ?>