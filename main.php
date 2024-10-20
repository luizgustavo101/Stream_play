<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-color: rgb(0, 0, 0);
    }

    form {
        background-color: rgb(126, 204, 228);
        padding: 20px;
        width: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-radius: 10px;
        border: 3px solid white;
    }

    .div {
        margin-top: 30px;
        margin-bottom: 20px;
    }

    input {
        all: unset;
        border-bottom: 1px solid black;
        font-size: 1.2rem;
        transition: 1s;
        width: 30%;
        background-color: transparent;
    }

    label {
        font-family: sans-serif;
        display: block;
    }

    input:focus {
        width: 100%;
    }

    input:hover {
        width: 100%;
    }

    button[type="submit"] {
        all: unset;
        text-align: center;
        margin-top: 10px;
        padding: 5px;
        background-color: white;
        cursor: pointer;
        transition: .3s;
        border-radius: 20px;
        box-shadow: 2px 2px 2px  rgba(0, 0, 0, 0.404);
        font-family: Arial, Helvetica, sans-serif;
    }

    button[type="submit"]:hover {
        background-color: rgb(0, 0, 0);
        color: white;
    }

    button[type="submit"]:active {
        scale: .9;
    }
</style>

<body>
    <header>

    </header>
    <form action="" method="get">
        <div class="div">
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" required>
        </div>
        <div class="div">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required minlength="8">
        </div>
        <button type="submit">Confirmar</button>
    </form>
</body>

</html>