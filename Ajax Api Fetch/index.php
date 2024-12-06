<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax API Fetch</title>


    <script>

        let funTeste = (response) => {
            console.log(response.text().then((data) => {
                document.getElementById('dados').innerHTML = data;
            }));
        }
        let funClick = () => {
            fetch('teste.php').then(funTeste);
        }
        let loadFun = () => {
            window.document.getElementById('btn').addEventListener('click', funClick);
        }
        window.onload = loadFun;

    </script>

</head>

<body>
    <h1>Ajax com Fetch API</h1>
    <button id="btn">Carregar Dados</button>
    <span id="dados"></span>
</body>

</html>