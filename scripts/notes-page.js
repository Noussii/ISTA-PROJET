const table = document.querySelector('#notes-table > #notes-body');

document.body.onload = function (e) {
    fetch('../api/class_A.php?req=all_notes'
    ,{method: 'GET', headers: {'Accept': 'application/json'}}
    )
    .then(response => {
        return response.json();
    })
    .then(res => {
        return res;
    })
    .then(dataObj => populateTable(dataObj))
    .catch(err => console.log(err));
}


function populateTable(data){
    data.forEach(obj => { 
        let tr = document.createElement('tr');
        for(let prop in obj){
            let td = document.createElement('td');
            td.innerText = obj[prop];
            tr.appendChild(td);
        }
        table.appendChild(tr);
    });
}



