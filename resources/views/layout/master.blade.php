<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Nhat Anh Ceo</title>
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <link href="{{ asset('css/bootrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
    <script src="../assets/js/demo.js"></script>
    <script>
        $(document).ready(function () {
            $('#sreach').keyup(function (){
                var text = $(this).val();
                 $.ajax({
                    url:"{{ route('search') }}",
                     type:"POST",
                     dataType: 'json',
                     data:{ _token: "{{ csrf_token() }}",text : text},
                     success:function (data){
                        $('.sreach1').css('display','block');
                         var html="<table class='table ant'>";
                        for(var value in data){
                            html+="<tr style='cursor: pointer' class='check_sreach' data='"+data[value].ma+"'>" +
                                    "" +
                                        "<td style='text-align: center'>" +
                                            data[value].ten +
                                        "</td>" +
                                        "<td>" +
                                            data[value].phong_ban.ten +
                                        "</td>" +
                                    "" +
                                "</tr>" +
                            ""
                        }
                         html +="</table>";
                         $('.sreach1').html(html);
                     }
                 })

            });
            $(document).on('click','.check_sreach',function (){
                var data_check = $(this).attr('data');
                $.ajax({
                    url:"{{ route('qtydisc') }}",
                    type:"POST",
                    dataType: 'json',
                    data:{ _token: "{{ csrf_token() }}",data_check : data_check},
                    success:function (data){
                        var html='';
                        console.log(data);
                        for(var value in data){
                            html += '    <div class="card stacked-form">\n' +
                                '        <div class="card-header ">\n' +
                                '            <h4 class="card-title">THÔNG TIN NHÂN VIÊN</h4>\n' +
                                '        </div>\n' +
                                '        <div class="card-body ">\n' +
                                '                <input type="hidden" name="_method" value="PUT">\n' +
                                '                <div class="form-group">\n' +
                                '                    <label for="ma_nhan_vien">Mã nhân viên</label>\n' +
                                '                    <input type="text" placeholder="1" readonly="" value="'+data[value].ma+'" class="form-control" id="ma_nhan_vien" name="ma">\n' +
                                '                </div>\n' +
                                '                <div class="form-group">\n' +
                                '                    <label for="ten">Tên nhân viên</label>\n' +
                                '                    <input type="text" value="'+data[value].ten+'" class="form-control" id="ten" name="ten">\n' +
                                '                </div>\n' +
                                '                <div class="form-group">\n' +
                                '                    <label for="dien_thoai">Điện thoại</label>\n' +
                                '                    <input type="text" value="'+data[value].dien_thoai+'" class="form-control" id="dien_thoai" name="dien_thoai">\n' +
                                '                </div>\n' +
                                '                <div class="form-group">\n' +
                                '                    <label for="dia_chi">Địa chỉ</label>\n' +
                                '                    <input type="text" value="'+data[value].dia_chi+'" class="form-control" id="dia_chi" name="dia_chi">\n' +
                                '                </div>\n' +
                                '                <div class="form-group">\n' +
                                '                    <label for="ngay_sinh">Ngày sinh</label>\n' +
                                '                    <input type="date" value="'+data[value].ngay_sinh+'" class="form-control" id="ngay_sinh" name="ngay_sinh">\n' +
                                '                </div>\n' +
                                '                <div class="form-group">\n' +
                                '                    <label for="ma_phong_ban">Tên phòng ban</label>\n' +
                                '                    <input type="date" value="2001-10-10" class="form-control" id="ngay_sinh" name="ngay_sinh">\n' +
                                '                </div>\n' +
                                '        </div>\n' +
                                '    </div>'
                        }
                        $('.content').html(html);
                    }
                })
            });
            $('.sreach1').mouseleave(function (){
                $(this).html('');
                $(this).css('display','none');
            })
        })
    </script>
</head>
<body>
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<div class="wrapper">
    <div class="main-panel">
    @include('layout.navbar')
        <div class="content">
            <div class="notification">
                <p class="detail_notification">
                    @if(Session::has('error'))
                        {{ Session::get('error') }}
                    @endif
                </p>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <nav>
            <ul class="footer-menu">
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
            </ul>
            <p class="copyright text-center">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="https://www.creative-tim.com/">Quan li nhan vien</a>, change is good!
            </p>
        </nav>
    </div>
</footer>
</div>
</div>
</body>
</html>
