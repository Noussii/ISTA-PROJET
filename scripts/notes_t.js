let classes_select = document.querySelector('#classes_select');
let module_select = document.querySelector('#module');
let top_filter_btn = document.querySelector('#top_filter_btn');
let global_notes_data = [];

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
    data.forEach( obj => { 
        let fullname = `${obj.first_name} ${obj.last_name}`;
        let tr = document.createElement('tr');
        tr.dataset.value = obj['student_id'];
        for(const [objKey, objValue] of Object.entries(obj)){
            if(objKey === 'student_id' || objKey === 'first_name') continue;
            let td = document.createElement('td');
            let span = document.createElement('span');
            let inp = document.createElement('input');
            td.dataset.value = objKey;
            inp.className = 'note_inp';
            span.className = 'edit-icon'; 

            if(objKey === 'last_name'){
                td.innerText = fullname;  
                td.dataset.value = 'full_name';   
                tr.appendChild(td);
                continue;
            }
            inp.setAttribute('type', 'number');
            inp.setAttribute('max', 20);
            inp.setAttribute('min', 0);
            inp.value = objValue;
            td.append(inp, span);
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
    if(!module_select.value) return;
    fetch('../api/notes.php?q=notes&subj='+module_select.value)
    .then(res => res.json())
    .then(data => {
        populateTable(data);
        global_notes_data = data;
    });
}

function collect_notes_changes_to_json(){
    let table_body = document.querySelector('#notes-table-body');
    let table_rows = Array.from(table_body.children);
    global_notes_data = [];

    table_rows.forEach(row => {
        let obj_for_curr_row = {};
        let rows_arr = Array.from(row.children);
        rows_arr.forEach(single_td => {
            if(single_td.dataset.value === 'full_name') {
                obj_for_curr_row['student_id'] = row.dataset.value;
                // console.log('row value: ', row.dataset.value)
                return;
            };
            let inp = single_td.firstChild;
            obj_for_curr_row[single_td.dataset.value] = inp.value;
        });
        obj_for_curr_row['subject_id'] = module_select.value;
        global_notes_data.push(obj_for_curr_row);
    })
    // console.log('data dd: ', global_notes_data);
    return global_notes_data;
}


let notes_dialog = document.querySelector('#notes_confirmation_dialog');
document.querySelector('input[value="submit notes"]').onclick = function (e){
    notes_dialog.showModal();
    document.querySelector('#close_notes_modal_btn').onclick = function(e){
        notes_dialog.close();
    }
    document.querySelector('#confirme_notes_modal_btn').onclick = function (e){
        // window.location = '../api/notes.php?q=notes&mod=update&v='+JSON.stringify(collect_notes_changes_to_json());
        fetch('../api/notes.php?q=notes&mod=update&v='+JSON.stringify(collect_notes_changes_to_json()), {method: 'POST'})
        .then(response => response.text())
        .then(data => console.log(data))
        notes_dialog.close();
        // console.log(global_notes_data);
        // console.log(collect_notes_changes_to_json())
    }
}