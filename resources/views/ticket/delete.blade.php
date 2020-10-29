<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delete</title>
        <link rel="stylesheet" href="../../css/styles.css" type="text/css" />
    </head>
    <body>
        <div id="contentDelete">
            <h1>¿Seguro que quieres borrar el ticket {{ $name }} que cuesta {{ $price }} euros?</h1>
            <form action="{{ url('ticket/' . $id) }}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="destroy"/>
            </form>
        </div>
        <div id="bottomDelete">
            <a class="botones" href="{{ url('ticket') }}">index</a>
            <a class="botones" href="{{ url('ticket/' . $id) }}">show</a>
            <a class="botones" href="{{ url('ticket/' . $id . '/edit') }}">edit</a>
        </div>
    </body>
</html>