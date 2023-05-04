let label = document.getElementById('label');
label.innerText = 'this text from js';
let data = fetch('../api/api_test.php')
.then(response => response.json())
.then(data => label.innerText = data.name)
.catch(err => console.log(err));