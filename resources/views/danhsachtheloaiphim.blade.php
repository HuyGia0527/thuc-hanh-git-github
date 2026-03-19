@foreach ($theloaiphim as $theloai)
    Thể loại tên tiếng anh: {{$theloai -> genre_name}} | Thể loại tên tiếng việt: {{$theloai -> genre_name_vn}} <br>
@endforeach