@extends("layouts.principal")

@section("hijos")
<html>
<head>
    <title>Agenda App</title>
</head>
<body>
    <header>
        <h1>Agenda App</h1>
    </header>
    <main>
        <section class="description">
            <br>
            <h2>Descripción</h2>
            <br>
            <p>La Agenda App es una aplicación móvil diseñada para ayudarte a organizar tus contactos de manera eficiente. Mantén tu vida en orden y nunca olvides algo importante.</p>
        </section>
        <section class="download">
            <br>
            <h2>Vista Principal</h2>
            <br>
            <th>
                <form action="persona">
                <button type="submit" class="btn btn-info">Agenda Personas</button>
                </form>
            </th>
        </section>
    </main>
    <footer>
        <br>
        <p>&copy; 2024 Agenda App. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
@endsection