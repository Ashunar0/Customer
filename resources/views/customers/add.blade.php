<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Add New Customer</title>
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
        .form-container {
            width: 50%;
            margin: 0 auto;
        }
        form {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .form-group .btn-submit {
            background-color: #444444;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-group .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <h3>Customer Management System</h3>
    </div>
    <h1>新規顧客追加</h1>
    <div class="form-container">
        <form action="/customers" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">名前</label>
                <input type="text" name="customer[name]">
            </div>
            <div class="form-group">
                <label for="kana">かな</label>
                <input type="text" name="customer[kana]">
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="customer[email]">
            </div>
            <div class="form-group">
                <label for="course_id">コース</label>
                <select id="course_id" name="customer[course_id]">
                    <option value="">選択してください</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="classroom_id">所属教室</label>
                <select id="classroom_id" name="customer[classroom_id]">
                    <option value="">選択してください</option>
                    @foreach ($classrooms as $classroom)
                        <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="phone_number">電話番号</label>
                <input type="text" name="customer[phone_number]">
            </div>
            <div class="form-group">
                <label for="prefecture">都道府県</label>
                <input type="text" name="customer[prefecture]">
            </div>
            <div class="form-group">
                <label for="city">市区町村</label>
                <input type="text" name="customer[city]">
            </div>
            <div class="form-group">
                <label for="street">丁目・番地・建物名</label>
                <input type="text" name="customer[street]">
            </div>
            <div class="form-group">
                <label for="birthdate">生年月日</label>
                <input type="date" name="customer[birthdate]">
            </div>
            <div class="form-group">
                <label for="age">年齢</label>
                <input type="text" name="customer[age]">
            </div>
            <div class="form-group">
                <label for="gender">性別</label>
                <input type="text" name="customer[gender]">
            </div>
            <div class="form-group">
                <label for="university">大学</label>
                <input type="text" name="customer[university]">
            </div>
            <div class="form-group">
                <label for="faculty">学部</label>
                <input type="text" name="customer[faculty]">
            </div>
            <div class="form-group">
                <label for="department">学科</label>
                <input type="text" name="customer[department]">
            </div>
            <div class="form-group">
                <label for="grade">学年</label>
                <input type="text" name="customer[grade]">
            </div>
            <div class="form-group">
                <label for="highschool">高校</label>
                <input type="text" name="customer[highschool]">
            </div>
            <div class="form-group">
                <label for="emergency_contact">緊急連絡先</label>
                <input type="text" name="customer[emergency_contact]">
            </div>
            <div class="form-group">
                <button type="submit" class="btn-submit">追加</button>
            </div>
        </form>
    </div>
</body>
</html>
