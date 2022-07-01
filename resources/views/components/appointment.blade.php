<!-- Appointment Form Wrapper -->
<div class="appointment-form-wrap" data-bg-img="assets/img/bg/contact-form-bg.png">
    <h3>Book Your Appointment</h3>
    <form action="{{ url('appointment') }}" method="POST" class="appointment-form">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="beautain-select">
                    <div class="input-group style--two">
                        <select name="aa_service" id="appointment-treatment" class="form-control">
                            <option value="">Select Treatment</option>
                            <option value="Sports massage">Sports massage</option>
                            <option value="Aromatherapy">Aromatherapy</option>
                            <option value="Swedish massage">Swedish massage</option>
                            <option value="Cupping therapy">Cupping therapy</option>
                            <option value="Deep Tissue">Deep Tissue</option>
                            <option value="Foot Detox">Foot Detox</option>
                            <option value="Facial Treatment">Facial Treatment</option>
                            <option value="Butt Enlargement">Butt Enlargement</option>
                            <option value="Verginal Tightning">Verginal Tightning</option>
                            <option value="Tummy Reduction">Tummy Reduction</option>
                            <option value="Breasts Lifting">Breasts Lifting</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="time" name="aa_time" class="form-control" placeholder="Appointment Date*" required>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="form-group">
                    <input type="date" name="aa_date" class="form-control" placeholder="Appointment Date*" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="aa_name" class="form-control" placeholder="Your Name*" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="email" name="aa_email" class="form-control" placeholder="Email Address*" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="aa_number" class="form-control" placeholder="Phone Number*" required>
                </div>
            </div>
            <div class="col-lg-12">
                <textarea class="form-control" name="aa_message" placeholder="Your Messages" required></textarea>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="d-flex align-items-center flex-wrap">
                    <button type="submit" class="btn">
                        <span>Send Now</span>
                        <img src="assets/img/icon/btn-arrow.svg" alt="" class="svg">
                    </button>
                    <div class="form-response"></div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- End Appointment Form Wrapper -->