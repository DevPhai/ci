

$(function () {
  GetListCustomer();
  $("#AddCoustomer").on("click", function () {
    $('#ActionToCustomer').show();
    disabledform(false);
    let titleModal = document.getElementById('CustomerModalLabel')
    let buttonAction = document.getElementById('ActionToCustomer')
    titleModal.textContent = "Add Customer";
    buttonAction.textContent = "Save";
    buttonAction.className = "btn btn-success";
    clearFormdata();
    $('#nav-Info-tab').trigger('click');
  });

});

function GetListCustomer() {
  $.ajax({
    url: base_url + 'index.php/Customer/bindLoadListCustomer',
    method: 'GET',
    dataType: "json",

    success: function (dataResult) {
      if (dataResult != null && dataResult != undefined) {
        let html = "";
        for (let index = 0; index < dataResult.length; index++) {
          let ListNo = index + 1;

          let id = '"' + dataResult[index].Customer_id + '"';
          let Name = '"' + dataResult[index].FirstName + '"';

          html += "<tr class='customerlist' id='" + id + "'>";
          html += "<th scope='row'>" + ListNo + "</th>";
          html += "<td>" + dataResult[index].FirstName + "</td>";
          html += "<td>" + dataResult[index].LastName + "</td>";
          html += "<td>" + dataResult[index].NickName + "</td>";
          html += "<td>" + dataResult[index].DateOfBirth + "</td>";
          html += "<td>" + dataResult[index].PhoneNumber + "</td>";
          html += "<th>";
          html += "<i class='fas fa-edit text-primary mr-3'  onclick='goEdit(" + id + ")'></i>";
          html += "<span>|</span>";
          html += "<i class='ml-3 fas fa-trash-alt text-danger mr-3 ' onclick='BindDelete(" + id + "," + Name + ")'></i>";
          html += "<span>|</span>";
          html += "<i class='ml-3 fas fa-info-circle text-info' onclick='Detail(" + id + ")'></i>";
          html += "</th>";
          html += "</tr>";
        }
        $('tbody').html(html);
      }

    },
    error: function (xhr) {

      console.log('Error Not response !! ');

    }
  });

}


$('#formCustomer').submit(function (e) {
  e.preventDefault();
  var Action = 'bindSaveCustomer';
  var id = $('#hidCustommerID').val();
  if(id != null && id != ""){
    Action = 'bindEditCustomer';
  }
 
    $.ajax({
      url: base_url + 'index.php/Customer/' + Action,
      method: 'post',
      data: new FormData(this),
      contentType: false,
      processData: false,
      dataType: "json",
      beforeSend: function () {
        $('#ActionToCustomer').prop('disabled', true);
      },
      success: function (dataResult) {
        console.log('dataResult');
        console.log(dataResult);
        if (dataResult.statusCode == 200) {
          alertdialog(1, 'Save Success ');
        }
        else {
          alertdialog(2, 'Save Error ');
        }

        $('#ActionToCustomer').prop("disabled", false)
        $('#CustomerModal').modal('hide');

      },
      error: function (xhr) {
        $('#ActionToCustomer').attr('disabled', false);
        $('#CustomerModal').modal('hide');
        alertdialog(2, 'Error Not response !! ');

      }
    });

});




function BindDelete($id, $name) {
  if (confirm("Do you want to delete " + $name + " ?")) {
    $.ajax({
      url: base_url + 'index.php/Customer/bindDelCustomer/' + $id,
      method: 'POST',
      dataType: "json",
      success: function (dataResult) {
        if (dataResult.statusCode == 200) {
          alertdialog(1, 'delete Success ');
        }
        else {
          alertdialog(2, 'delete Error ');
        }
      },
      error: function (xhr) {
        alertdialog(2, 'Error Not response !! ');

      }
    });
  }
}

function alertdialog(alertType, TestAlert) {
  let ClassName = new Array();
  let alert = document.getElementById('alert');
  alert.className = alert.className.replace(/\bmystyle\b/g, "");
  ClassName.push('alert');
  switch (alertType) {
    //type 1 = Success
    //type 2 = Error
    case 1:
      ClassName.push('alert-success');
      break;
    case 2:
      ClassName.push('alert-danger');
      break;
  }

  alert.classList.add(ClassName[0]);
  alert.classList.add(ClassName[1]);
  alert.textContent = TestAlert;
  alert.setAttribute('style', 'display: block;');

  setTimeout(function () {
    alert.textContent = '';
    alert.setAttribute('style', 'display: none;');
    if (alertType == 1) {
      GetListCustomer();
    }
    clearFormdata();
  }, 1000);

}




function goEdit($id) {
  $('#ActionToCustomer').show();
  disabledform(false);
  let titleModal = document.getElementById('CustomerModalLabel')
  let buttonAction = document.getElementById('ActionToCustomer')
  titleModal.textContent = "Edit Customer";
  buttonAction.textContent = "Update";
  buttonAction.className = "btn btn-warning";
  GetCustomerById($id);
  $('#CustomerModal').modal('show');
  $('#nav-Info-tab').trigger('click')
}


function Detail($id) {
  let titleModal = document.getElementById('CustomerModalLabel')
  let buttonAction = document.getElementById('ActionToCustomer')
  titleModal.textContent = "Detail Customer";
  $('#ActionToCustomer').hide();
  GetCustomerById($id);
  disabledform(true);
  $('#CustomerModal').modal('show');
  $('#nav-Info-tab').trigger('click')
}


function GetCustomerById($id) {
  $.ajax({
    url: base_url + 'index.php/Customer/bindLoadCustomerByid/' + $id,
    method: 'GET',
    dataType: "json",

    success: function (dataResult) {
      console.log('GetCustomerById');
      console.log(dataResult);
      if (dataResult != null && dataResult != undefined) {


        $('#inputFirstName').val(dataResult.data[0].FirstName);
        $('#inputLastName').val(dataResult.data[0].LastName);
        $('#inputNickName').val(dataResult.data[0].NickName);
        $('#inputDateOfBirth').val(dataResult.data[0].DateOfBirth);
        $('#inputPhone').val(dataResult.data[0].PhoneNumber);
        $('#inputEmail').val(dataResult.data[0].Email);
        $('#inputAddress').val(dataResult.data[0].Address);
        $('#inputAddress2').val(dataResult.data[0].Address2);
        $('#inputCity').val(dataResult.data[0].City);
        $('#inputProvince').val(dataResult.data[0].Province);
        $('#inputCountry').val(dataResult.data[0].Country);
        $('#inputPostalCode').val(dataResult.data[0].PostalCode);
        $('#inputEducationalLevel').val(dataResult.data[0].EducationalLevel);
        $('#inputInstitution').val(dataResult.data[0].Institution);
        $('#inputMajor').val(dataResult.data[0].Major);
        $('#inputGraduateDate').val(dataResult.data[0].GraduateDate);
        $('#file').val('');
        $('#preview').attr('src',base_url + 'img/' + dataResult.data[0].ImgProfile)
        $('#hidCustommerID').val(dataResult.data[0].Customer_id);
      }
    },
    error: function (xhr) {
      console.log('Error Not response !! ');
    }
  });

}

function clearFormdata() {
  var $form = $('#formCustomer');
  $form.find('input[type=text],input[type=Phone],input[type=Email],input[type=date]').each(function () {
    $(this).val('');
  });
  $("#preview").attr('src', base_url + 'img/person.jpg');
  $("#file").val('');
  $('#hidCustommerID').val('');
  $("#formCustomer").removeClass('was-validated');
}

function disabledform(disabled) {
  var $form = $('#formCustomer');
  $form.find('input[type=text],input[type=Phone],input[type=Email],input[type=date]').each(function () {

    if (disabled) {
      $(this).prop("disabled", true);
    } else {
      $(this).prop("disabled", false);
    }
  });
  if (disabled) {
    $('#file').hide();
  } else {
    $('#file').show();
  }

}

$('input[type="file"]').change(function(e) {
  var reader = new FileReader();
  reader.onload = function(e) {

      document.getElementById("preview").src = e.target.result;
  };
  reader.readAsDataURL(this.files[0]);
});




// async function getCountry(){
//   console.log('getCountry');
//   let response = await fetch('https://restcountries.eu/rest/v2/all');
//   let data = await response.json();
//   //addOption(data,'inputCountry');
//   console.log(data);
// }



