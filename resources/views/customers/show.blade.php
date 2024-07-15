<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Customer Details</title>
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
            text-align: center;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
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
        }
        .button-group a:hover, .button-group button:hover {
            background-color: #45a049;
        }
        .delete-button {
            background-color: #444444;
        }
        .delete-button:hover {
            background-color: #e53935;
        }
        .customer-details {
            width: 50%;
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
            background-color: #f2f2f2;
        }
        .back-button {
            margin-top: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .back-button a {
            text-decoration: none;
            background-color: #444444;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .back-button a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <h3>Customer Management System</h3>
    </div>
    <h1>Customer Details</h1>
    <div class="button-group">
        <a href="/customers/{{ $customer->id }}/edit">Edit</a>
        <form action="/customers/{{ $customer->id }}" id="from_{{ $customer->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button" onclick="deleteCustomer({{ $customer->id }})">Delete</button>
        </form>
    </div>
    <div class="customer-details">
        <table>
            <tr>
                <th>名前</th>
                <td>{{ $customer->name }}</td>
            </tr>
            <tr>
                <th>かな</th>
                <td>{{ $customer->kana }}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $customer->email }}</td>
            </tr>
            <tr>
                <th>コース</th>
                <td>{{ $customer->course->name }}</td>
            </tr>
            <tr>
                <th>所属拠点</th>
                <td>{{ $customer->classroom->name }}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{ $customer->phone_number }}</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{ $customer->prefecture }}{{ $customer->city }}{{ $customer->street }}</td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td>{{ $customer->birthdate }}</td>
            </tr>
            <tr>
                <th>年齢</th>
                <td>{{ $customer->age }}</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{{ $customer->gender }}</td>
            </tr>
            <tr>
                <th>大学</th>
                <td>{{ $customer->university }}</td>
            </tr>
            <tr>
                <th>学部</th>
                <td>{{ $customer->faculty }}</td>
            </tr>
            <tr>
                <th>学科</th>
                <td>{{ $customer->department }}</td>
            </tr>
            <tr>
                <th>学年</th>
                <td>{{ $customer->grade }}</td>
            </tr>
            <tr>
                <th>高校</th>
                <td>{{ $customer->highschool }}</td>
            </tr>
            <tr>
                <th>緊急連絡先</th>
                <td>{{ $customer->emergency_contact }}</td>
            </tr>
            <tr>
                <th>メモ</th>
                <td>{{ $customer->notes }}</td>
            </tr>
            <!-- 他の詳細情報もここに追加できます -->
        </table>
    </div>
    <div class="back-button">
        <a href="/">Back to Customer List</a>
    </div>
    <script>
        function deleteCustomer(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</body>
</html>
