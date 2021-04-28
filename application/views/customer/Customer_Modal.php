<!-- Modal  -->
<div class="modal fade" id="CustomerModal" tabindex="-1" role="dialog" aria-labelledby="CustomerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-light">
                <h5 class="modal-title" id="CustomerModalLabel"></h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-Info-tab" data-toggle="tab" href="#nav-Info"
                            role="tab" aria-controls="nav-Info" aria-selected="true">Infomation</a>
                        <a class="nav-item nav-link" id="nav-Education-tab" data-toggle="tab" href="#nav-Education"
                            role="tab" aria-controls="nav-Education" aria-selected="false">Education</a>
                        <a class="nav-item nav-link" id="nav-Education-tab" data-toggle="tab" href="#nav-Display"
                            role="tab" aria-controls="nav-Display" aria-selected="false">Profile Display</a>
                    </div>
                </nav>
                <form id="formCustomer" enctype="multipart/form-data">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-Info" role="tabpanel"
                            aria-labelledby="nav-Info-tab">
                            <input type="hidden" id="hidCustommerID">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputFirstName">First Name</label>
                                    <input type="text" class="form-control" id="inputFirstName" name="FirstName"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputLastName">Last Name</label>
                                    <input type="text" class="form-control" id="inputLastName" name="LastName" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputNickName">Nick Name</label>
                                    <input type="text" class="form-control" id="inputNickName" name="NickName" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputDateOfBirth">Date Of Birth</label>
                                    <div class="input-group date">
                                        <input autocomplete="off" type="text" class="form-control" id="inputDateOfBirth"
                                            name="DateOfBirth" placeholder="mm/dd/yyyy" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPhone">Phone Number</label>
                                    <input type="Phone" class="form-control" id="inputPhone" name="Phone" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputEmail">Email</label>
                                    <input type="Email" class="form-control" id="inputEmail" name="Email" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" name="Address" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" name="Address2" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="City" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputProvince">Province</label>
                                    <input type="text" class="form-control" id="inputProvince" name="Province" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputCountry">Country</label>
                                    <input type="text" class="form-control" id="inputCountry" name="Country" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPostalCode">PostalCode</label>
                                    <input type="text" class="form-control" id="inputPostalCode" name="PostalCode"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-Education" role="tabpanel"
                            aria-labelledby="nav-Education-tab">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEducationalLevel">Educational Level</label>
                                    <input type="text" class="form-control" id="inputEducationalLevel"
                                        name="EducationalLevel" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputInstitution">Institution</label>
                                    <input type="text" class="form-control" id="inputInstitution" name="Institution"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputMajor">Major</label>
                                    <input type="text" class="form-control" id="inputMajor" name="Major" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div class="form-group col-md-6 ">
                                    <label for="inputGraduateDate">Graduate Date</label>
                                    <input autocomplete="off" type="text" class="form-control" id="inputGraduateDate"
                                        name="GraduateDate" placeholder="mm/dd/yyyy" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-Display" role="tabpanel" aria-labelledby="nav-Display-tab">
                            <div class="container">
                                <div class="form-row justify-content-md-center">
                                    <div class="col">
                                        <label for="file">Profile Display</label>
                                        <div class="input-group ">
                                            <input type="file" class="form-control" placeholder="Upload File"
                                            id="file"  accept="image/*">
                                        </div>
                                        <div class="col">
                                            <img src="<?php echo base_url('img/person.jpg') ?>" id="preview"
                                                class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id='ActionToCustomer' type="button" class=""></button>
                    </div>
            </div>
        </div>
    </div>

    </body>

    </html>