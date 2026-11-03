<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>

<body>
    <h1>Editar Usuário</h1>
    <form method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="<?= $data['name'] ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $data['email'] ?>" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>

</html>