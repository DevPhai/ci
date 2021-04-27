$(function() {

  $(document).on('show.bs.modal', '#CustomerModal', function (e) {
    $('#nav-Info-tab').click();
})


$("#AddCoustomer").click(function() {
  let titleModal = document.getElementById('CustomerModalLabel')
  let buttonAction = document.getElementById('ActionToCustomer')
  titleModal.textContent = "Add Customer" ;
  buttonAction.textContent = "Save";
  buttonAction.className = "btn btn-success";
  buttonAction.setAttribute("onclick","BindSave();");
});

$("#EditCoustomer").click(function() {
  let titleModal = document.getElementById('CustomerModalLabel')
  let buttonAction = document.getElementById('ActionToCustomer')
  titleModal.textContent = "Edit Customer" ;
  buttonAction.textContent = "Update";
  buttonAction.className = "btn btn-warning";
  buttonAction.setAttribute("onclick","BindEdit();");
});

});


  $('#inputDateOfBirth').datepicker();
  $('#inputGraduateDate').datepicker();


function GetListCustomer() {
  var table = $('#_ListCustomer').DataTable({
    pageLength: 10,
    serverSide: true,
    processing: true,
    ajax: {
      url: base_url + 'index.php/customer/bindLoadListCustomer',
      method: 'GET',
    },
    'columns': [
      {
        data: 'id',
        orderable: true
      },
      {
        data: 'FirstName'
      },
      {
        data: 'LastName'
      },
      {
        data: 'NickName'
      },
      {
        data: 'DateOfBirth'
      },
      {
        data:'Action',
        render: function (data,type,row){
          var dataid = row['id'];
          var btnAction = '<i id="EditCoustomer" class="fas fa-pen text-primary" data-toggle="modal"data-target="#CustomerModal" data-id="'+dataid+'"></i>';
          var btnDelete = '<i id="'+dataid+'" class="ml-2 fas fa-trash-alt text-danger"></i >';
          var Action = btnAction + btnDelete;
          return Action;
        }
      }
    ]
  });

}


function BindSave() {

  var formdata = (getformdataByjQuery());
  console.log(formdata);

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
  }, 2000);

}



function getformdataByjQuery(){
  var _data = {
    type: 1,
    FirstName: $('#inputFirstName').val(),
    LastName: $('#inputLastName').val(),
    NickName: $('#inputNickName').val(),
    DateOfBirth: $('#inputDateOfBirth').val(),
    Phone: $('#inputPhone').val(),
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
    Display: $('#file').val()
  }
  return _data;
}






// async function getCountry(){
//   console.log('getCountry');
//   let response = await fetch('https://api.printful.com/countries');
//   let data = await response.json();
//   addOption(data,'inputCountry');
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



$(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;

    console.log(e.target.result);
  };
  // read the image file as a data URL.
  let img = reader.readAsDataURL(this.files[0]);
  console.log(img);
});









function BindEdit(){
  $.ajax({
    type: 'POST',
    url: GetUrl('ApproveCenter/UpdateApproveContract'),
    data: model,
    type: 'post',
    datatype: "json",
    contentType: 'application/json;',
    traditional: true,
    success: function (data) {
        if (data.IsResult) {
            AlertSuccess();
            OpenLoading(false);
            $('#modalApprovel').modal('toggle');
            window.location.reload()
        } else {
            AlertError();
            OpenLoading(false);
            $('#modalApprovel').modal('toggle');
        }
    },
    error: function (xhr) {
        OpenLoading(false);
        NoticError("Error", lang.lblErrorOperation);
    }
});
}



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