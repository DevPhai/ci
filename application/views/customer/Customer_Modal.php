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
                <form id="formCustomer">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-Info" role="tabpanel" aria-labelledby="nav-Info-tab">
                    <input type="hidden" id="hidCustommerID">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">First Name</label>
                                <input type="text" class="form-control" id="inputFirstName" name="FirstName">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName" name="LastName">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputNickName">Nick Name</label>
                                <input type="text" class="form-control" id="inputNickName" name="NickName">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputDateOfBirth">Date Of Birth</label>
                                <input type="text" class="form-control " id="inputDateOfBirth" name="DateOfBirth">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPhone">Phone Number</label>
                                <input type="Phone" class="form-control" id="inputPhone" name="Phone">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputEmail">Email</label>
                                <input type="Email" class="form-control" id="inputEmail" name="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="Address">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" name="Address2">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity" name="City">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputProvince">Province</label>
                                <input type="text" class="form-control" id="inputProvince" name="Province">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCountry">Country</label>
                                <input type="text" class="form-control" id="inputCountry" name="Country">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPostalCode">PostalCode</label>
                                <input type="text" class="form-control" id="inputPostalCode" name="PostalCode">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Education" role="tabpanel" aria-labelledby="nav-Education-tab">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEducationalLevel">Educational Level</label>
                                <input type="text" class="form-control" id="inputEducationalLevel"
                                    name="EducationalLevel">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputInstitution">Institution</label>
                                <input type="text" class="form-control" id="inputInstitution" name="Institution">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputMajor">Major</label>
                                <input type="text" class="form-control" id="inputMajor" name="Major">
                            </div>

                            <div class="form-group col-md-6 ">
                                <label for="inputGraduateDate">Graduate Date</label>
                                <input type="text" class="form-control " id="inputGraduateDate" name="GraduateDate">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Display" role="tabpanel" aria-labelledby="nav-Display-tab">.
                        <div class="container">
                            <div class="form-row justify-content-md-center">
                                <div class="col">
                                    <div id="msg"></div>
                                    <label for="file">Profile Display</label>
                                    <input type="file" name="img[]" class="file" accept="image/*">
                                    <div class="input-group my-3">
                                        <input type="text" class="form-control" disabled placeholder="Upload File"
                                            id="file">
                                        <div class="input-group-append">
                                            <button type="button" class="browse btn btn-primary">Browse</button>
                                        </div>
                                    </div>
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