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
                        <a class="nav-item nav-link" id="nav-Display-tab" data-toggle="tab" href="#nav-Display"
                            role="tab" aria-controls="nav-Display" aria-selected="false">Profile Display</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-Info" role="tabpanel" aria-labelledby="nav-Info-tab">

                    <?php $this->load->view('customer/MP/Infomation');?>
                      
                    </div>
                    <div class="tab-pane fade" id="nav-Education" role="tabpanel" aria-labelledby="nav-Education-tab">...
                    </div>
                    <div class="tab-pane fade" id="nav-Display" role="tabpanel" aria-labelledby="nav-Display-tab">...
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>