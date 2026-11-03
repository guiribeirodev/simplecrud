<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Adicionar Novo Usuário</h1>
    <?php if (!empty($error)) { ?>
        <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
    <?php } ?>
    <form method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>