var input = document.getElementById('class-list-inp');
var dataList = document.getElementById('class-list');
if (dataList.options.length > 0) {
    input.value = dataList.options[0].value;
}

function showError(err){
    console.log(err)
}

function send_emploi_pdf(ref){
    const pdf_inp = document.querySelector("input[name='emploiPdf']");

    if(pdf_inp.files.length > 0){
        
        let formData = new FormData();
        let pdf_file = pdf_inp.files[0];
        formData.append('emploiPdf', pdf_file);

        fetch('../api/class_A.php?q=add_emp&cls='+ref,
        {
            method: 'POST',
            body: formData,
            headers: {
                "enctype": "multipart/form-data"
            }
        })
        .then(res => res.json())
        .then(data => showMyModal(data.title, data.message, 4000, data.success_state))
        .catch(err => console.log(err))
    }
    else{
        showMyModal('Failed!', 'please upload a time schedule.',  4000, 'orange');
    }
    pdf_inp.value = '';
}

function showMyModal(title, message, duration, success){
        let dialog = document.getElementById('success-dialog');
        dialog.innerHTML = '';
        let title_element = document.createElement('h1');
        let message_element = document.createElement('p');
        message_element.innerText = message;
        title_element.innerText = title;
        
        if(success && success !== true){
            dialog.style.border = '3px solid '+success;
        }

        if(success === false){
            dialog.style.border = '3px solid red';
        }


        dialog.append(title_element, message_element);
        dialog.showModal()
        if(duration && typeof duration == 'number'){
            setTimeout(() => {
                dialog.close();
            }, duration);
        }
}


function get_selected_class_id(){
    let inp = document.querySelector("input[list='class-list']");
    let datalist_options = inp.list.options;
    let inp_value = inp.value;

    for(let opt of datalist_options){
        if(opt.value === inp_value){
            return opt.id;
        }
    }

}

document.getElementById('pdf-updload-btn').addEventListener('click', function(e){
    send_emploi_pdf(get_selected_class_id());
})

// document.querySelector('#pdf-updload-btn').addEventListener('click', send_emploi_pdf);