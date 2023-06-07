let cours_btn = document.querySelector('.cours-btn')
let annonce_btn = document.querySelector('.annonce-btn');
let updated_container = document.getElementById('updated-container');
let class_select = document.getElementById('class-select');

let selected_class_data = {};

cours_btn.addEventListener('click', function (){
    
    let html = `

    `;

});

annonce_btn.addEventListener('click', function(){
    
    let html = `
      <form action='' method='POST' class='main-form'>
        <legend style='margin-bottom: 20px'>Send an announcement:</legend>
        <div class='form-section'>
            <textarea name='announcement_body' id='announce-body' placeholder='Type your announcement here..'></textarea>
        </div>

        <input type='submit' value='Envoyer'>
        <input type='reset' value='effacer'>
      </form>
    `;
    updated_container.innerHTML = html;

})

function populate_class_select(data){

  if(data.err){
    console.log('error');
    alert('something went wrong please try again later');
  }
  if(data.length > 0){

    data.forEach(single_class => {
      let one_option = document.createElement('option');
      one_option.value = single_class.class_id;
      one_option.innerText = single_class.name;
      class_select.appendChild(one_option);
    });
  }
}



document.addEventListener('DOMContentLoaded', function (){
  annonce_btn.click();

  setTimeout(() => {
    fetch('../api/class_A.php?q=clss')
    .then(res => res.json())
    .then(data => populate_class_select(data))
    .catch(err => console.log(err));
  }, 10);

  class_select.addEventListener('change', function (){
    selected_class_data.id = class_select.value;
    console.log(selected_class_data)
  })



})