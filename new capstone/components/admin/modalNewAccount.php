<div class="modal fade" id="newAccount" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 fw-bold h2">Add new Account</h4>
                <button type="button" class="close " data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addAccountDB" method="POST" enctype="multipart/form-data">
            <div class="modal-body mx-3 row">

                <div class="md-form mb-2 col-12">
                    <input type="text" id="lname" name="lname" class="form-control" autocomplete="off" required="required" placeholder="Last name">
                </div> 

                <div class="md-form mb-2 col-12">
                    <input type="text" id="fname" name="fname" class="form-control" autocomplete="off" required="required" placeholder="First name">
                </div> 

                <div class="md-form mb-2 col-12">
                    <input type="text" id="mname" name="mname" class="form-control" autocomplete="off" placeholder="Middle name">
                </div> 

                <div class="md-form mb-2">
                    <input type="text" id="address" name="address" class="form-control" required="required" placeholder="Address">
                </div>

                <div class="md-form mb-2">
                    <input type="tel" id="contactNo" name="contactNo" class="form-control" required="required" placeholder="Contact No.">
                </div>
                
                <div class="md-form mb-3 mt-1 col-6">
                    <i class="fas fa-envelope prefix grey-text">Birthday</i>
                    <input type="date" id="bday" name="bday" required="required" class="form-control">
                </div>

                <div class="md-form mb-3 mt-1 col-6">
                    <i class="fas fa-envelope prefix grey-text pb-3">Sex</i>
                    <div class="row">
                        <div class="col-12 d-flex mt-1">
                            <input type="radio" id="male" class="gender" value="male" required="required" name="sex">
                            <label for="form5Male">Male</label>
                            <input type="radio" id="female" class="gender" value="female" required="required" name="sex">
                            <label for="form7Female">Female</label>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="md-form mb-2">
                    <label>Photo: </label>
                    <input type="file" id="userPhoto" name="userPhoto" class="custom-file-input">
                </div>

                <div class="md-form mb-2">
                    <input type="email" id="email" name="email"class="form-control" required="required" placeholder="Email">
                </div>

                <div class="md-form mb-2">
                    <input type="text" id="uname" name="uname" class="form-control" autocomplete="off" required="required" placeholder="Username">
                </div>

                <div class="md-form mb-2">
                    <input type="text" pattern=".{8, 15}" id="password" autocomplete="off" name="password" required="required" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="modal-footer md-form d-flex justify-content-center requestMargin my-0">
                <button class="btn btn-dark btn-lg btn-block login" type="submit" id="addAccount" name="addAccount">Add account</button>
                <input type="hidden" name="action" value="adduser">
                <input type="hidden" name="userId" id="userId" value="">
            </div>
            </form>
        </div>                      
    </div>
</div>