<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio#1 José Alemán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Materias</h1>
        <?php
        require_once 'db.php';

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $materias = getMaterias($nombre);
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Profesor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($materias as $materia) : ?>
                        <tr>
                            <td><?= $materia->id ?></td>
                            <td><?= $materia->nombre ?></td>
                            <td><?= $materia->profesor ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php
        }
        ?>
        <form action="index.php" method="get">
            <div>
                <label for="nombre" class="form-label">Nombre de la materia</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Buscar</button>
        </form>
    </div>
</body>
</html>