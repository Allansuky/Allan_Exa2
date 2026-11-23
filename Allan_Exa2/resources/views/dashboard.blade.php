<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body { margin: 0; min-height: 100vh; font-family: Arial, sans-serif; background: #f3f4f6; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 16px 32px; background: #1f2937; color: white; }
        main { max-width: 900px; margin: 48px auto; padding: 32px; background: white; border-radius: 12px; box-shadow: 0 8px 24px rgba(31,41,55,.08); }
        button { border: 0; border-radius: 6px; padding: 10px 16px; background: #ef4444; color: white; cursor: pointer; }
    </style>
</head>
<body>
    <header>
        <strong>Panel principal</strong>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    </header>
    <main>
        <h1>¡Bienvenido, {{ auth()->user()->name }}! </h1>
        <p>Has iniciado sesión correctamente.</p>
    </main>
</body>
</html>
