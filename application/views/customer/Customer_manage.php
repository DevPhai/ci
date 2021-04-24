<div id="container">
    <h1>Customers</h1>
    <br>
    <div class="row buttonAdd">
        <button id="AddCoustomer" type="button" class="btn btn-success btn-lg" data-toggle="modal"
            data-target="#CustomerModal">New Customer <i class="fas fa-plus"></i></button>

        <!-- <button onclick="userAction()" class="btn btn-success btn-lg"> Action </button> -->
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ListNo</th>
                <th scope="col">Action</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <i class="fas fa-pen text-primary" data-toggle="modal" data-target="#CustomerModal"></i>
                    <i class="ml-2 fas fa-trash-alt text-danger"></i>

                </td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <i class="fas fa-pen text-primary" data-toggle="modal" data-target="#CustomerModal"></i>
                    <i class="ml-2 fas fa-trash-alt text-danger"></i>
                </td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <i class="fas fa-pen text-primary" data-toggle="modal" data-target="#CustomerModal"></i>
                    <i class="ml-2 fas fa-trash-alt text-danger"></i>
                </td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>



    <!-- <?php
        echo uniqid();
    ?> -->
    <br>

    <!-- <div id="root">
       
        <div class="container"></div>
       
    </div> -->


</div>