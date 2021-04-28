$('#inputDateOfBirth').datepicker({
  autoclose: true,
  format: 'mm/dd/yyyy'
});
$('#inputGraduateDate').datepicker({
  autoclose: true,
  format: 'mm/dd/yyyy'
});

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
    buttonAction.setAttribute("onclick", "BindSave();");
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
          var DateOfBirth = dataResult[index].DateOfBirth.split("-");
          var strDateOfBirth = DateOfBirth[1] + '/' + DateOfBirth[2] + '/' + DateOfBirth[0];
          let id = '"' + dataResult[index].Customer_id + '"';
          let Name = '"' + dataResult[index].FirstName + '"';

          html += "<tr class='customerlist' id='"+id+"'>";
          html += "<th scope='row'>" + ListNo + "</th>";
          html += "<td>" + dataResult[index].FirstName + "</td>";
          html += "<td>" + dataResult[index].LastName + "</td>";
          html += "<td>" + dataResult[index].NickName + "</td>";
          html += "<td>" + strDateOfBirth + "</td>";
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


function BindSave() {
  var formdata = (getformdataByjQuery());
  console.log(formdata);
  var form = $("#formCustomer")
  if (form[0].checkValidity() === true) {
    $.ajax({
      url: base_url + 'index.php/Customer/bindSaveCustomer',
      data: formdata,
      method: 'POST',
      dataType: "json",

      beforeSend: function () {
        $('#ActionToCustomer').prop('disabled', true);
      },
      success: function (dataResult) {

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
  }
  else {
    form.addClass('was-validated');
  }
}


function BindEdit() {
  var formdata = (getformdataByjQuery());
  console.log(formdata);
  var form = $("#formCustomer")
  if (form[0].checkValidity() === true) {
    $.ajax({
      url: base_url + 'index.php/Customer/bindEditCustomer',
      data: formdata,
      method: 'POST',
      dataType: "json",

      beforeSend: function () {
        $('#ActionToCustomer').prop('disabled', true);
      },
      success: function (dataResult) {

        if (dataResult.statusCode == 200) {
          alertdialog(1, 'Update Success ');
        }
        else {
          alertdialog(2, 'Update Error ');
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
  } else {
    form.addClass('was-validated');
  }
}


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


function getformdataByjQuery() {
  var _data = {
    FirstName: $('#inputFirstName').val(),
    LastName: $('#inputLastName').val(),
    NickName: $('#inputNickName').val(),
    DateOfBirth: $('#inputDateOfBirth').val(),
    PhoneNumber: $('#inputPhone').val(),
    Email: $('#inputEmail').val(),
    Address: $('#inputAddress').val(),
    Address2: $('#inputAddress2').val(),
    City: $('#inputCity').val(),
    Province: $('#inputProvince').val(),
    Country: $('#inputCountry').val(),
    PostalCode: $('#inputPostalCode').val(),
    EducationalLevel: $('#inputEducationalLevel').val(),
    Institution: $('#inputInstitution').val(),
    Major: $('#inputMajor').val(),
    GraduateDate: $('#inputGraduateDate').val(),
    ImgProfile: $('#file').text(),
    Customer_id: $('#hidCustommerID').val()
  }
  return _data;
}


function goEdit($id) {
  $('#ActionToCustomer').show();
  disabledform(false);
  let titleModal = document.getElementById('CustomerModalLabel')
  let buttonAction = document.getElementById('ActionToCustomer')
  titleModal.textContent = "Edit Customer";
  buttonAction.textContent = "Update";
  buttonAction.className = "btn btn-warning";
  buttonAction.setAttribute("onclick", "BindEdit();");
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

        var DateOfBirth = dataResult.data[0].DateOfBirth.split("-");
        var GraduateDate = dataResult.data[0].GraduateDate.split("-");
        var strDateOfBirth = DateOfBirth[1] + '/' + DateOfBirth[2] + '/' + DateOfBirth[0];
        var strGraduateDate = GraduateDate[1] + '/' + GraduateDate[2] + '/' + GraduateDate[0];

        $('#inputFirstName').val(dataResult.data[0].FirstName);
        $('#inputLastName').val(dataResult.data[0].LastName);
        $('#inputNickName').val(dataResult.data[0].NickName);
        $('#inputDateOfBirth').val(strDateOfBirth);
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
        $('#inputGraduateDate').val(strGraduateDate);
        $('#file').text(dataResult.data[0].ImgProfile);
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
  $form.find('input[type=text],input[type=Phone],input[type=Email]').each(function () {
    $(this).val('');
  });
  $("#preview").attr('src', base_url + 'img/person.jpg');
  $("#file").text('');
  $("#file").val('');
  $("#formCustomer").removeClass('was-validated');
}

function disabledform(disabled){
  var $form = $('#formCustomer');
  $form.find('input[type=text],input[type=Phone],input[type=Email]').each(function () {
   
    if(disabled){
      $(this).prop("disabled", true);
    }else{
      $(this).prop("disabled", false);
    }
  });
  if(disabled){
    $('#file').hide();
  }else{
    $('#file').show();
  }
  
}



// $(document).on("click", ".browse", function () {
//   var file = $(this).parents().find(".file");
//   file.trigger("click");
// });
// $('input[type="file"]').change(function (e) {
//   var fileName = e.target.files[0].name;
//   $("#file").val(fileName);

//   var reader = new FileReader();
//   reader.onload = function (e) {
//     // get loaded data and render thumbnail.
//     document.getElementById("preview").src = e.target.result;

//     console.log(e.target.result);
//   };
//   // read the image file as a data URL.
//   let img = reader.readAsDataURL(this.files[0]);
//   console.log(img);
// });


// async function getCountry(){
//   console.log('getCountry');
//   let response = await fetch('https://restcountries.eu/rest/v2/all');
//   let data = await response.json();
//   //addOption(data,'inputCountry');
//   console.log(data);
// }



// function addOption(data, id){
//   console.log(addOption);
//   data.forEach((data) => {
//     const Selector = document.getElementById(id)
//     const Option = document.createElement('Option')
//     Option.textContent = data.name
//     Selector.appendChild(Option)
//     console.log('appendChild');
//   })
// }

// var request = new XMLHttpRequest()
// request.open('GET', 'https://restcountries.eu/rest/v2/all', true)
// request.onload = function () {
//   // Begin accessing JSON data here
//   var data = JSON.parse(this.response)
//   if (request.status >= 200 && request.status < 400) {
//     data.forEach((Country) => {
//       const SelectorCountry = document.getElementById('inputCountry')
//       const Option = document.createElement('Option')
//       Option.textContent = Country.name
//       SelectorCountry.appendChild(Option)
//     })
//   } else {
//     console.log('AIP restcountries Error');
//   }

// }
// request.send();





// function GetFormValues() {
//   var $formInfo = $('#Infomation');
//   var $formEducation= $('#Educational');
//   var $Display = $('#image-form');
//   var elements = new Array();
//   $formInfo.find('input[type=text],input[type=Phone],input[type=Email]').each(function () {
//       if ($(this).attr('disabled') != 'disabled' && $(this).attr('disabled') != true) {
//           var name = $(this).attr('name');
//           if (name != null && name != undefined) {
//               elements.push({
//                   name: $(this).attr('name'),
//                   value: $(this).val()
//               });
//           }
//       }
//   });
//   $formEducation.find('input[type=text]').each(function () {
//     if ($(this).attr('disabled') != 'disabled' && $(this).attr('disabled') != true) {
//         var name = $(this).attr('name');
//         if (name != null && name != undefined) {
//             elements.push({
//                 name: $(this).attr('name'),
//                 value: $(this).val()
//             });
//         }
//     }
// });
// $Display.find('input[type=text]').each(function () {
//   if ($(this).attr('disabled') != 'disabled' && $(this).attr('disabled') != true) {
//       var name = $(this).attr('name');
//       if (name != null && name != undefined) {
//           elements.push({
//               name: $(this).attr('name'),
//               value: $(this).val()
//           });
//       }
//   }
// });
//   return elements;
// }