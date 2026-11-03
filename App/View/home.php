<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP PHP</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <a href="./index.php:?route=create">Adicionar Novo Usuário</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($users as $u) { ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['name'] ?></td>
                <td><?= $u['email'] ?></td>
                <td>
                    <a href="./index.php:?route=edit&id=<?= $u['id'] ?>">Editar</a>
                    <a href="./index.php:?route=delete&id=<?= $u['id'] ?>" onclick="return confirm('Deseja excluir este usuário?')">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>