<div class="container">
    <div class="form-row justify-content-md-center">
        <div class="col">
            <div id="msg"></div>
            <form method="post" id="image-form">
                <label for="file">Profile Display</label>
                <input type="file" name="img[]" class="file" accept="image/*">
                <div class="input-group my-3">
                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                    <div class="input-group-append">
                        <button type="button" class="browse btn btn-primary">Browse</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col">
            <img src="<?php echo base_url('img/person.jpg') ?>" id="preview" class="img-thumbnail">
        </div>
    </div>
</div>