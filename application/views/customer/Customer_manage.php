
<div id="container">

    <br>
    <div class="row headtitle">
        <div>
            <h1>Customers</h1>
        </div>
        <div>
            <button type="button" class="btn btn-primary" onclick='GetListCustomer()'>Get Customer </button>
        </div>
        <div>
            <button id="AddCoustomer" type="button" class="btn btn-success" data-toggle="modal"
                data-target="#CustomerModal">New Customer <i class="fas fa-plus"></i></button>
        </div>
        <!-- <button onclick="userAction()" class="btn btn-success btn-lg"> Action </button> -->
    </div>
    <br>
    <table class="table" id="_ListCustomer">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">NickName</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


      <!-- <tr>
                <th scope="row">1</th>
                <td>
                    
                    <i id="EditCoustomer" class="fas fa-pen text-primary" data-toggle="modal"
                        data-target="#CustomerModal" name=""></i>
                    <i class="ml-2 fas fa-trash-alt text-danger"></i>

                </td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <i id="EditCoustomer" class="fas fa-pen text-primary" data-toggle="modal"
                        data-target="#CustomerModal"></i>
                    <i class="ml-2 fas fa-trash-alt text-danger"></i>
                </td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <i id="EditCoustomer" class="fas fa-pen text-primary" data-toggle="modal"
                        data-target="#CustomerModal"></i>
                    <i class="ml-2 fas fa-trash-alt text-danger"></i>
                </td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr> -->

    <!-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav> -->

    <!-- <?php
        echo uniqid();
    ?> -->
    <br>

    <!-- <div id="root">
       
        <div class="container"></div>
       
    </div> -->


</div>