<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body>
        <h1 id="titulo">Index</h1>
        <div id="resultado">
            @if(Session::get('op') !== null)
                <h2>
                    Resultado de la operación:
                    {{ Session::get('op') }}
                    {{ Session::get('result') }}
                    {{ Session::get('id') }}
                </h2>
            @endif
        </div>
        <table id="tabla">
            <tr>
                <th>id #</th>
                <th>name</th>
                <th>price</th>
                <th>show</th>
                <th>edit</th>
                <th>delete antiguo</th>
                <th>delete</th>
            </tr>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket['id'] }}</td>
                    <td>{{ $ticket['name'] }}</td>
                    <td>{{ $ticket['price'] }}</td>
                    <td><a href="{{ url('ticket/' . $ticket['id']) }}">show</a></td>
                    <td><a href="{{ url('ticket/' . $ticket['id'] . '/edit') }}">edit</a></td>
                    <td><a href="{{ url('ticket/' . $ticket['id'] . '/delete') }}">delete</a></td>
                    <td><a data-id="{{ $ticket['id'] }}" class="enlaceBorrar" href="#">delete javascript</a></td>
                </tr>
            @endforeach
        </table>
        <form id="formDelete" action="{{ url('ticket') }}" method="post">
            @method('delete')
            @csrf
        </form>
        <a id="botonIndex" href="{{ url('ticket/create') }}">create</a>
        <script src="{{ url('js/script.js?rand=' . uniqid ()) }}"></script>
    </body>
</html>