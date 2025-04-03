<!DOCTYPE html>
 <html lang="vi">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Màn hình chi tiết</title>
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
         <div class="detail-box">
             <h4 class="text-center">Màn hình chi tiết</h4>
             <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                        </tr>
                    </tbody>
                </table>
             <div class="text-center">
                 <button class="btn btn-primary">Chỉnh sửa</button>
             </div>
         </div>
     </div>
 
     <!-- Footer -->
     <div class="footer">
         Lập trình web © 01/2024
     </div>
 
 </body>
 </html>