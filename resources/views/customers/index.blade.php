<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Customer</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .top-bar {
                background-color:#666666;
                color: #fff;
                padding: 10px 20px;
                text-align: left;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: left;
            }
            h1 {
                text-align: center;
                margin-bottom: 20px;
            }
            .button-group {
                display: flex;
                justify-content: flex-end;
                margin-bottom: 20px;
            }
            .button-group form {
                margin-left: 10px;
            }
            .button-group a, .button-group button {
                text-decoration: none;
                background-color: #444444;
                color: white;
                padding: 0 20px;
                border-radius: 5px;
                transition: background-color 0.3s ease;
                border: none;
                cursor: pointer;
                display: inline-block;
                line-height: 40px;
                text-align: center;
                font-weight: 600;
                margin-left: 10px;
            }
            .button-group a:hover, .button-group button:hover {
                background-color: #45a049;
            }
            .add-button {
            background-color: #444444;
            }
            .add-button:hover {
                background-color: #e53935;
            }
            .customers {
                width: 80%;
                margin: 0 auto;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #dddddd;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
        </style>
    </head>
    <body>
        <div class="top-bar">
            <h3>Customer Management System</h3>
        </div>
        <h1>Customers List</h1>
        <div class="button-group">
            <a href="/customers/search">Search</a>
            <a href="/customers/add">Add New Customer</a>
        </div>
        <div class='customers'>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>名前</th>
                        <th>仮名</th>
                        <th>メールアドレス</th>
                        <th>コース</th>
                        <th>所属教室</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>
                                <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
                            </td>
                            <td>{{ $customer->kana }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->course->name }}</td>
                            <td>{{ $customer->classroom->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>