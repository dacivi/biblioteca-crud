<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca - Libros</title>
</head>
<body>
    <h1>Libros Disponibles</h1>
    <a href="/libros/crear">Nuevo Libro</a>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($libros as $libro): ?>
        <tr>
            <td><?= htmlspecialchars($libro['isbn']) ?></td>
            <td><?= htmlspecialchars($libro['titulo']) ?></td>
            <td><?= htmlspecialchars($libro['autor']) ?></td>
            <td>
                <a href="/libros/editar?id=<?= $libro['id'] ?>">Editar</a>
                <a href="/libros/eliminar?id=<?= $libro['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>