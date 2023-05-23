let classes_select = document.querySelector('#classes_select');
let module_select = document.querySelector('#module');
let top_filter_btn = document.querySelector('#top_filter_btn');

function insert_module_select(json){
    while(module_select.lastChild){
        module_select.removeChild(module_select.lastChild);
    }
    json.forEach(dataObj => {
        let opt = document.createElement('option');
        opt.value = dataObj.subject_id;
        opt.text = dataObj.subject_name;
        module_select.appendChild(opt);
    });
}

function populateTable(data){
    let table = document.querySelector('#notes-table-body');
    while(table.lastChild){
        table.removeChild(table.lastChild);
    }
    data.forEach(obj => { 
        let tr = document.createElement('tr');
        for(let prop in obj){
            let td = document.createElement('td');
            let inp = document.createElement('input');
            if(!Number(obj[prop])){
                td.innerText = obj[prop];     
                tr.appendChild(td);
                continue;
            }
            inp.setAttribute('type', 'number');
            inp.value = obj[prop];
            td.appendChild(inp);
            tr.appendChild(td);
        }
        table.appendChild(tr);
    });
}



document.body.onload = function (e){
    console.log(classes_select.value);
    fetch('../api/notes.php?q=modules&cls='+classes_select.value)
    .then(res => res.json())
    .then(data => insert_module_select(data));
}

classes_select.onclick = function (e){
    console.log(classes_select.value);
    fetch('../api/notes.php?q=modules&cls='+classes_select.value)
    .then(res => res.json())
    .then(data => insert_module_select(data));
}

top_filter_btn.onclick = function (e){
    console.log(classes_select.value);
    if(!module_select.value) return;
    fetch('../api/notes.php?q=notes&subj='+module_select.value)
    .then(res => res.json())
    .then(data => populateTable(data));
}