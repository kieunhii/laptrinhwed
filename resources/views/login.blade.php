<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Căn giữa màn hình */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Hộp đăng ký */
.register-box {
    background: white;
    padding: 25px;
    width: 350px;
    border-radius: 12px; /* Bo góc mềm mại */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Tiêu đề */
.register-box h2 {
    margin-bottom: 20px;
    font-size: 22px;
    color: #333;
}

/* Ô nhập liệu */
.form-control {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 8px; /* Bo góc ô nhập */
    font-size: 16px;
    outline: none;
    transition: 0.3s;
}

/* Hiệu ứng khi nhập */
.form-control:focus {
    border-color: #5a67d8;
    box-shadow: 0px 0px 5px rgba(90, 103, 216, 0.5);
}

/* Khoảng cách giữa các nhóm form */
.form-group {
    margin-bottom: 15px;
    text-align: left;
}

/* Nút đăng ký */
.btn-dark {
    background-color: #5a67d8;
    border: none;
    padding: 10px;
    font-size: 16px;
    color: white;
    border-radius: 20px; /* Bo góc nút */
    cursor: pointer;
    width: 100%;
    transition: 0.3s;
}

.btn-dark:hover {
    background-color: #434190;
}

/* Hiển thị lỗi */
.text-danger {
    font-size: 14px;
    color: red;
}

    </style>
</head>

<body>
    <div class="container">
        <!-- Thanh điều hướng -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#" class="active">Đăng nhập</a></li>
                <li><a href="{{route('user.createUser')}}">Đăng ký</a></li>
            </ul>
        </nav>

        <!-- Form đăng nhập -->
        <div class="login-box" style="width: 600px;">
            <h2>Màn hình đăng nhập</h2>
            <form method="POST" action="{{ route('user.authUser') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                </div>
                            </form>
        </div>

        <!-- Footer -->
        <footer>
            Lập trình web ©01/2024
        </footer>
    </div>
</body>

</html>