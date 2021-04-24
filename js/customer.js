$('#inputDateOfBirth').datepicker();





var request = new XMLHttpRequest()
request.open('GET', 'https://restcountries.eu/rest/v2/all', true)
request.onload = function () {
  // Begin accessing JSON data here
  var data = JSON.parse(this.response)
  if (request.status >= 200 && request.status < 400) {
    data.forEach((Country) => {
      const SelectorCountry = document.getElementById('inputCountry')
      const Option = document.createElement('Option')
      Option.textContent = Country.name
      SelectorCountry.appendChild(Option)
    })
  } else {
    console.log('AIP restcountries Error');
  }

}
request.send();