<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id='mytxt' style='width: 50%; margin: 0px auto; text-align: center'>hello</h1>



    <script>
        let mytxt = document.querySelector('#mytxt');
        let txt_arr = 'hello this is sparta how can i help you today cat car nonsens how to see my name in front of a building'.split(' ');
        
        let synthesizedText = '';
        let count = 25000;

        for(let i = 0; i < count; i++){
            let randIdx = Math.floor(Math.random() * (txt_arr.length - 1)) - 1;
            synthesizedText += ' '+txt_arr[randIdx];
        }

        mytxt.innerText = synthesizedText;
    </script>
</body>
</html>