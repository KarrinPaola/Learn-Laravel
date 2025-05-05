<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Web Với Đầy Đủ Class</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .navbar {
            background-color: #444;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .navbar__link {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        .layout {
            display: flex;
            flex: 1;
        }

        .sidebar {
            width: 220px;
            background-color: #f4f4f4;
            padding: 15px;
            box-shadow: inset -1px 0 0 #ddd;
        }

        .sidebar__title {
            margin-top: 0;
        }

        .sidebar__list {
            list-style: none;
            padding: 0;
        }

        .sidebar__item {
            margin: 8px 0;
        }

        .sidebar__link {
            text-decoration: none;
            color: #333;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
        }

        .main-content__title {
            margin-top: 0;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
    @yield('styles')
</head>

<body>
    <header class="header">
        <h1 class="header__title">Trang Web Mẫu</h1>
    </header>

    <nav class="navbar">
        <a href="#" class="navbar__link">Trang chủ</a>
        <a href="#" class="navbar__link">Giới thiệu</a>
        <a href="#" class="navbar__link">Liên hệ</a>
    </nav>

    <div class="layout">
        <aside class="sidebar">
            <h3 class="sidebar__title">Sidebar</h3>
            <ul class="sidebar__list">
                <li class="sidebar__item"><a href="#" class="sidebar__link">Mục 1</a></li>
                <li class="sidebar__item"><a href="#" class="sidebar__link">Mục 2</a></li>
                <li class="sidebar__item"><a href="#" class="sidebar__link">Mục 3</a></li>
            </ul>
        </aside>

        <main class="main-content">
            @yield('content')
        </main>
    </div>

    <footer class="footer">
        &copy; 2025 Trang web của bạn. Mọi quyền được bảo lưu.
    </footer>
</body>
@yield('scripts')

</html>
