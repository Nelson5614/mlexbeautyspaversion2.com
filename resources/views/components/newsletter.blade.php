    <!-- Newsletter -->
    <section class="newsletter pt-120 pb-120" data-bg-img="assets/img/bg/newsletter-bg.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Newsletter Content -->
                    <div class="newsletter-content text-center">
                        <h2>Newsletter</h2>
                        <p>Please leave us your email address so we can update you on specials and promotions</p>

                        <form action="{{ route('newsletter') }}" method="POST" class="newsletter-form">
                            @csrf
                            <div class="theme-input-group">
                                <input class="form-control" type="email" name="email" placeholder="Enter your email here"> <button type="submit" class="submit-btn btn"><span>Submit now</span></button>
                            </div>
                        </form>
                    </div>
                    <!-- End Newsletter Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Newsletter -->