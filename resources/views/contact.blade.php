@extends('header_footer')
@section('index-body')

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Contact Us</h6>
                <h1 class="display-5">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="bg-primary h-100 p-5">
                    <form action="/contactaction" method="post" id="form">
                    @csrf
                        
                            <div class="row g-3">
                                <div class="col-6">
                                   <input type="text" id="name" name="name" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input type="email" id="email" name="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                <input type="text" id="subject" name="subject" class="form-control bg-light border-0 px-4" placeholder="Subject" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                <textarea id="message" name="message"class="form-control bg-light border-0 px-4 py-3" rows="2" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button  id="sendmessage" name="sendmessage"class="btn btn-secondary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-secondary h-100 p-5">
                        <h2 class="text-white mb-4">Get In Touch</h2>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-geo-alt fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Our Office</h5>
                                <span class="text-white">Kaloor - Kadavanthara Rd, Kattakara Rd W, opposite Bismi Hypermart Kaloor, Kathrikadavu, Kaloor, Ernakulam, Kerala 682017</span>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-envelope-open fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Email Us</h5>
                                <span class="text-white">bharatgas@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-phone-vibrate fs-4 text-white"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="text-white">Call Us</h5>
                                <span class="text-white">+91-8679630965</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @endsection

   