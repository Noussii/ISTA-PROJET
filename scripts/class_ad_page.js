var input = document.getElementById('class-list-inp');
var dataList = document.getElementById('class-list');
if (dataList.options.length > 0) {
    input.value = dataList.options[0].value;
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
        .then(res => res.text())
        .then(data => console.log(data))
        .catch(err => console.log(err))
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

document.querySelector('#pdf-updload-btn').addEventListener('click', send_emploi_pdf);