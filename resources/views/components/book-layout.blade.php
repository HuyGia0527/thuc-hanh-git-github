<!DOCTYPE html>
<html>

<head>
    <title>{{$title}}</title>
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <header style='text-align:center'>
        <img src="{{asset('hinh/banner_sach.jpg')}}" width="1000px" class='container-fluid'>
    </header>
    <main>
        <div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div style="background-color: red" class="w-100 p-3 font-weight-bold text-white mt-3">
                <ul>
                    <li>
                        <a>Trang Chủ</a>
                    </li>
                    <li>
                        <a>Tiểu Thuyết</a>
                    </li>
                    <li>
                        <a>Truyện ngắn-Tản văn</a>
                    </li>
                    <li>
                        <a>Tác phẩm kinh điển</a>
                    </li>
                </ul>
            </div>
            <div><img src="{{asset('hinh/sidebar_1.jpg')}}"  class="w-100 mt-3"></div>
            <div><img src="{{asset('hinh/sidebar_2.jpg')}}" class ="mt-2 w-100"></div>
        </div>
        <div class="col-9">
            {{$slot}}
        </div>
    </main>
    <footer>
        <div class='row' style='text-align:center'>
            <div class='col-4'>TRỤ SỞ</div>
            <div class='col-4'>THÔNG TIN CHUNG</div>
            <div class='col-4'>BẢN ĐỒ</div>
        </div>
    </footer>
</body>

</html>