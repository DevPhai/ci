
function showData(data) {
    let UserList = document.querySelector('#UserList');
    data.forEach(val => {
        let myEl = document.createElement('li');
        myEl.innerText = `${val.first_name} ${val.last_name}  |  Email :  ${val.email}`;
        UserList.appendChild(myEl);
    });
}

fetch('http://localhost:3000/users')
    .then(response => response.json())
    .then(data => showData(data));



function createData() {
    fetch('http://localhost:3000/users', {
        method:'post',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            "id":0,
            "first_name": "thapana",
            "last_name": "Brown",
            "email": "bobbrown432@yahoo.com"
        })
    })
        .then(response => console.log(response))
        .catch(err => console.log(err));
        location.reload();
}
let createDataBtn = document.querySelector('#createData');
createDataBtn.addEventListener('click',createData);


function updateData() {
    fetch('http://localhost:3000/users/3', {
        method:'put',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            "id": 3,
            "first_name": "Anna2",
            "last_name": "Smith2",
            "email": "annasmith2322@gmail.com"
        })
    })
        .then(response => console.log(response))
        .catch(err => console.log(err));
        location.reload();
}
let updateDataBtn = document.querySelector('#updateData');
updateDataBtn.addEventListener('click',updateData);



function deleteData() {
    fetch('http://localhost:3000/users/6', {
        method:'delete',
      
    })
        .then(response => console.log(response))
        .catch(err => console.log(err));
        location.reload();
}
let deleteDataBtn = document.querySelector('#deleteData');
deleteDataBtn.addEventListener('click',deleteData);