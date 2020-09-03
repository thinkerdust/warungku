@extends('master')

@section('contents')
<div id="Contact">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                
                    <div class="section-title">
                        <h1>Contact</h1>
                        <p>Get In Touch With Me : </p>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="address">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Jl. Gajah Raya, Gayamsari </p>
                                    <p>Semarang, Indonesia </p>
                                </div>

                                <div class="email">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>shop@warungku.com </p>
                                </div>

                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Call:</h4>
                                    <p>(+62) 8889 7564 xxxx </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-8">
                            <form action="#" role="form" class="php-email-form">
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection