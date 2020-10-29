<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>show</title>
        <link rel="stylesheet" href="../css/styles.css" type="text/css" />
    </head>
    <body>
        <h1 id="titulo">show: {{ $name }}</h1>
        <table id="tablaShow">
            <tr>
                <td>id:</td>
                <td>{{ $id    }}</td>
            </tr>
            <tr>
                <td>name:</td>
                <td>{{ $name    }}</td>
            </tr>
            <tr>
                <td>price:</td>
                <td>{{ $price    }}</td>
            </tr>
            <tr>
                <td>date:</td>
                <td>{{ $date    }}</td>
            </tr>
            <tr>
                <td>time:</td>
                <td>{{ $time    }}</td>
            </tr>
        </table>
        <br>
        <div id="bottom">
            <a class="botones" href="{{ url('ticket/' . $id . '/edit') }}">edit</a>
            <a class="botones" href="{{ url('ticket') }}">index</a>
            <a class="botones" href="{{ url('ticket/' . $id . '/delete') }}">delete antiguo</a>
            <a class="botones" id="enlaceBorrar" href="#">delete javascript</a>
        </div>
        <form id="formDelete" action="{{ url('ticket/' . $id) }}" method="post">
            @method('delete')
            @csrf
        </form>
        <script src="{{ url('js/script.js?rand=' . uniqid()) }}"></script>
    </body>
</html>