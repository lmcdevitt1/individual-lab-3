<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    <style>
        /* This places the tables side-by-side and gives them nice spacing */
        .menu-container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            border: 1px solid #191a1d;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #191a1d;
            text-align: center;
            vertical-align: middle;
        }

    </style>
</head>
<body>
<div class="container">
        @yield('content')
    </div>
<h1>Items</h1>

<div class="menu-container">

    <table>
        <caption>Computer</caption>
        <tr>
            <td>Name</td>
            <td>Make</td>
            <td>Model</td>
            <td>Price</td>
        </tr>

        <tbody>
        @foreach ($items ?? [] as $item)
            @if(stripos($item->name, 'Computer') !== false)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->make }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->price_range }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>${{ number_format($item->price_range, 2) }}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <!-- RIGHT TABLE: Iced Coffee -->
    <table>
        <thead>
        <tr>
            <caption>Computer</caption>
            <th>Name</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items ?? [] as $item)
            @if(stripos($item->name, 'Computer') !== false)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->make }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->price_range }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>${{ number_format($item->price_range, 2) }}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
