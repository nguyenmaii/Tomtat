bai1: -Laravel là một php framework mới , trải qua nhiều phiên bản cập nhật thì hiện tại nó đang ở
version 5.3 .
Để cài đặt laravel thì cấu hình yêu cầu
PHP >= 5.6.4
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
-Có 2 cách để cài laravel đó là:
+ cài laravel bằng comporser.exe.
+ Cài bằng composer.phar.
Bài 2:Cấu trúc của laravel
Bài 3:  Route trong Larave
Route trong Larvel cũng như các framework khác  đều có chức năng là định ra các dạng resquest(hsy còn gọi là url) định sẵn và
cũng có các action( hành động) do chúng ta định nghĩa cho nó .
-Route::get tiếp nhận URL với phương thức GET ,cú pháp là Route::get($url, $action);
-Route::post tiếp nhận URL với phương thức POST, cú pháp Route::post($url, $action);
-Route::match cú pháp Route::match('phuong thuc', 'url', 'action');
-Route::any cú pháp là Route::any($url, $action);
-Route::resource()là một chức năng giúp chúng ta Xây dựng RESTful(websevice) một cách nhanh chóng
cú pháp Route::resource('url', 'tencontroller', 'tuybien');có 2 cách để tạo là tạo bằng tay và dùng lệnh
laravel
-Route::gorup() Route::group($attr, $handle);
Bài 6 View Trong Laravel
-View Trong Laravel thì bắt buộc phải được nằm trong thư mục resources/views
và phải có đuôi là .php hoặc .blade.php
-Để tạo các thư mục con cho view thì các bạn chỉ cần tạo một thư mục nữa trong resources/views
thì larver cũng chấp nhận đó là view
-Gọi view trong route:
Route::get('duogndanroute', function(){
return view('tenview', 'dataneuco');
});
-Truyền dữ liêu cho view
+Dùng compact().
compact('tencuabientruyenvao')
+Dùng with().
view('tenview')->with('key', 'value');
+Dùng Mảng.
view('tenview', ['key' => 'value']);
Bài 7: Blade template engine trong Laravel
-Tạo blade template trong Laravel.
+đặt nó trong thư mục resources/views (view trong laravel)
+Và tên file của blade template phải kết thúc bằng .blade.php
-Sử dụng blade template.
-Template inheritance (kế thừa giao diện).
+Đầu tiên mình sẽ tạo ra 1 blade template có tên master.blade.php ở
đường dẫn resoures\views\master.blade.php.
+Và sau đó mình tạo tiếp một file home.blade.php ở đường dẫn resoures\views\home.blade.php
Bài 9:Tạo controller trong Laravel.
có 2 cách tạo
+ tạo bằng tay
+Tạo bằng lệnh có sẵn php artisan make:controller controllername;
-Sử dụng dụng các action trong Controllers.
+Để truyền tham số trong action Controllers thì nó hoàn toàn giống PHP thuần
Route::get('a/{name}/{age}','homecontroller@index')->where(['name'=>'[a-zA-Z]+','age'=>'[0-9]+']);
Bài 10: Query Builder trong Laravel
- Cấu hình database.
-Sử dụng Query Builder.
+Lấy tất cả dữ liệu trong bảng"  DB::table('tablename')->get()
+Select cột trong bảng. DB::table('tablename')->select('columnfirst','columnsecond')->get();










