<!DOCTYPE html>
<html>
<head>
    <title>Thêm sách mới</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; }
        form { max-width: 400px; margin: auto; }
        input, button { width: 100%; padding: 10px; margin: 10px 0; }
        label { font-weight: bold; }
    </style>
</head>
<body>
    <h2>Thêm sách mới</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/books') }}" method="POST">
        @csrf
        <label for="bookName">Tên sách</label>
        <input type="text" name="bookName" id="bookName" required>

        <label for="bookCode">Mã sách</label>
        <input type="text" name="bookCode" id="bookCode" required>

        <label for="bookAuthor">Tác giả</label>
        <input type="text" name="bookAuthor" id="bookAuthor" required>

        <button type="submit">Thêm sách</button>
    </form>
</body>
</html>
