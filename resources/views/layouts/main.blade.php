<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/img/logo/logo.png" rel="icon">
    <title>{{ env('APP_NAME') }} - {{ $title }}</title>
    <link rel="stylesheet" href="/css/chosen.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/ruang-admin.min.css" rel="stylesheet">
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/mystyle.css">
    
</head>

<body id="page-top">
    <div id="wrapper">
        @include('partials.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('partials.topbar')

                @yield('content')

            </div>
            @include('partials.footer')
        </div>
    </div>

    @include('partials.scroll')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0661b15b8c.js" crossorigin="anonymous"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/js/ruang-admin.min.js"></script>
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/js/demo/chart-area-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    {{-- Datatables --}}
    {{-- <script src="/vendor/datatables/jquery.dataTables.min.js"></script> --}}
    <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="/js/chosen.jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var oTable = $('#dataTableHover').DataTable({
                responsive: true,
                "dom": "lrtip",
                "bLengthMenu": false,
                "bInfo": false,
                "bLengthChange": false,

            });

            // new $.fn.dataTable.FixedHeader(oTable);

            $('#lengthMenu').on('change', function () {
                let row = $("#lengthMenu").val()
                oTable.page.len(row).draw();
            });
            $('#SearchBox').keyup(function () {
                oTable.search($(this).val()).draw();
            });
            $('[data-toggle="tooltip"]').tooltip(); 
        });

    </script>

    <script>
        $(document).ready(function () {
            var oTable = $('#dataTableHover1').DataTable({
                responsive: true,
                "dom": "lrtip",
                "bLengthMenu": false,
                "bInfo": false,
                "bLengthChange": false,

            });

            // new $.fn.dataTable.FixedHeader(oTable);

            $('#lengthMenu').on('change', function () {
                let row = $("#lengthMenu").val()
                oTable.page.len(row).draw();
            });
            $('#SearchBox').keyup(function () {
                oTable.search($(this).val()).draw();
            });
            $('[data-toggle="tooltip"]').tooltip(); 
        });

    </script>

    <script>
        $(document).ready(function () {
            var oTable = $('#dataTableHover2').DataTable({
                responsive: true,
                "dom": "lrtip",
                "bLengthMenu": false,
                "bInfo": false,
                "bLengthChange": false,

            });

            // new $.fn.dataTable.FixedHeader(oTable);

            $('#lengthMenu').on('change', function () {
                let row = $("#lengthMenu").val()
                oTable.page.len(row).draw();
            });
            $('#SearchBox').keyup(function () {
                oTable.search($(this).val()).draw();
            });
            $('[data-toggle="tooltip"]').tooltip(); 
        });

    </script>

    {{-- End - Datatables --}}

    <script>
        $(document).ready(function(){
            $('#selectKategori').chosen();
        });
    </script>
</body>

</html>
