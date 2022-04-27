<div class="modal fade" id="R_BarangayBusinessPermit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 fw-bold h2">Barangay Business Permit</h4>
                <button type="button" class="close " data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="php/userSignup.php" method="POST">
            <div class="modal-body mx-3 row">
                <div class="md-form mb-2 col-12">
                    <input type="text" id="fname" name="fname" class="form-control validate" placeholder="Last name, First name Middle initial">
                </div>

                <div class="md-form mb-2 col-12">
                    <input type="number" id="age" name="age" class="form-control validate" placeholder="Age">
                </div>

                <div class="md-form mb-2 col-12">
                    <input type="text" id="business_name" name="business_name" class="form-control validate" placeholder="Business Name">
                </div>

                <div class="md-form mb-2">
                    <input type="text" id="address" name="address" class="form-control validate" placeholder="Address">
                </div>
            </div>
            <div class="modal-footer md-form d-flex justify-content-center requestMargin my-0">
                <button class="btn btn-dark btn-lg btn-block login" type="submit" id="request_BC" name="request_BP">Request</button>
            </div>
            </form>
        </div>                      
    </div>
</div>