<!DOCTYPE html>
 <html lang="vi">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cập nhật thông tin</title>
     <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
     <div class="container">
         <!-- Thanh điều hướng -->
         <nav>
             <ul>
                 <li><a href="#">Home</a></li>
                 <li><a href="login.html">Đăng nhập</a></li>
                 <li><a href="#" class="active">Đăng ký</a></li>
             </ul>
         </nav>
 
         <!-- Form cập nhật -->
         <div class="register-box">
             <h2>Màn hình cập nhật</h2>
             <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
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