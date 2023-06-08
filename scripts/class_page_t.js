let cours_btn = document.querySelector('.cours-btn')
let annonce_btn = document.querySelector('.annonce-btn');
let updated_container = document.getElementById('updated-container');
let class_select = document.getElementById('class-select');





let selected_class_data = {};

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

cours_btn.addEventListener('click', function (){
    
    let html = `

    `;

});

annonce_btn.addEventListener('click', function(){
    
    let html = `
      <div>
        <legend style='margin-bottom: 20px'>Send an announcement:</legend>
        <div class='form-section'>
            <textarea name='announcement_body' id='announce-body' placeholder='Type your announcement here..'></textarea>
        </div>
        <input class='envoyer-announce-btn' type='button' value='Envoyer'>
        <input class='clear-announce-btn' type='button' value='effacer'>
      </div>
    `;
    updated_container.innerHTML = html;

})

function populate_class_select(data){

  if(data.err){
    console.log('error');
    alert('something went wrong please try again later');
  }
  if(data.length > 0){
    
    data.forEach((single_class, idx) => {
      let one_option = document.createElement('option');
      one_option.value = single_class.class_id;
      one_option.innerText = single_class.name;
      if(idx === 0){
        one_option.setAttribute('selected', true);
        selected_class_data.id = single_class.class_id;
      }
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
  selected_class_data.id = class_select.value;

  class_select.addEventListener('change', function (){
    selected_class_data.id = class_select.value;
    console.log(selected_class_data)
  })

  document.querySelector('.envoyer-announce-btn').addEventListener('click', function(){
    let textarea = document.getElementById('announce-body');
    if(textarea.value.length === 0){
      showMyModal('Canceled', 'please fill in the text area.', 3000, 'yellow')
    }else{
      fetch(`../api/class_A.php?q=publish_announce&cls_ref=${selected_class_data.id}&announcement_body=${textarea.value}`)
      // .then(res => res.text())
      // .then(data => {
      //   if(data.success){
      //     showMyModal('Great', 'your announcement was published successfully', 3000, true);
      //   }else showMyModal('Failed', 'something went wrong please check every thing is as intended and try again.', 3000, false);
      // })
      // .catch(err => console.log(err))
      .then(res => res.json())
      .then(json => {
        if(json.success){
          showMyModal('Great', 'your anouncement was uploaded successfully.', 3000, true)
        }else{
          showMyModal('Failed', 'something went wrong please check every thing is as intended and try again.', 3000, false)
        }
      })
      .catch(err => console.log(err));
    }
  })

  document.querySelector('.clear-announce-btn').addEventListener('click', function(){
    let textarea = document.getElementById('announce-body');
    textarea.value = '';
  })




})

function showErr(err){
  console.log(err)
}