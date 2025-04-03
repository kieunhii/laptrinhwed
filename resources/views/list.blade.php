<!DOCTYPE html>
 <html lang="vi">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Danh sách User</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css"> <!-- Liên kết file CSS -->
 </head>
 <body>
 
     <!-- Thanh điều hướng -->
     <div class="navbar-custom">
         <span><b>Lập trình web</b></span>
         <span><a href="#">Home</a> | <a href="#">Đăng xuất</a></span>
     </div>
 
     <div class="container">
         <h4 class="text-center mt-3">Danh sách user</h4>
 
         <!-- Bảng danh sách user -->
         <table class="table table-bordered">
             <thead class="table-light">
                 <tr>
                     <th>#</th>
                     <th>Username</th>
                     <th>Email</th>
                     <th>Thao tác</th>
                 </tr>
             </thead>
             <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
         </table>
 
         <!-- Phân trang -->
         <nav>
             <ul class="pagination">
                 <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item"><a class="page-link" href="#">Next</a></li>
             </ul>
         </nav>
     </div>
 
     <!-- Footer -->
     <div class="footer">
         Lập trình web © 01/2024
     </div>
 
 </body>
 </html>