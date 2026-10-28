<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Nuevo Disco - Tienda de Música Tec</title>
    </head>
    <body>
        <h1>Tienda de Música Tec</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="discos.php">Catálogo de Música</a>
            <a href="alta-disco.php">Agregar Música +</a>
        </nav>
        <main>
            <section>
                <h2>Agregar Nuevo Álbum / Disco</h2>
                <form action="#" method="post">
                    <label for="nombre">Nombre del álbum:</label>
                    <input type="text" name="nombre" id="nombre" required><br><br>

                    <label for="categoria">Artista / Categoría:</label>
                    <input type="text" name="categoria" id="categoria" required><br><br>

                    <label for="precio">Precio ($):</label>
                    <input type="number" step="0.01" name="precio" id="precio" required><br><br>

                    <button type="submit">Agregar Álbum</button>
                </form>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Tienda de Música Tec. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>