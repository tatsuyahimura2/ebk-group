<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sistem eBK</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

        <style>
            @media screen and (min-width: 676px) {
                .modal-dialog {
                max-width: 1300px; /* New width for default modal */
                }

                
            }

            
        </style>
        
    </head>
    
    <body class="font-sans antialiased">
        
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
    </body>

    <!-- script tambah row -->

    <script type="text/javascript">
 
        $(document).on('click','#addMore',function(){
            
            $('.table').show();

            var bidang_tugas = $("#bidang_tugas").val();
            //var penilaian_1 = $("#penilaian_1").val();
            var sasaran = $("#sasaran").val();
            var pencapaian_1 = $("#pencapaian_1").val();
            //var status_sasaran = $("#status_sasaran").val();
            var source = $("#document-template").html();
            var template = Handlebars.compile(source);

            var data = {
                bidang_tugas: bidang_tugas,
                sasaran: sasaran,
                pencapaian_1: pencapaian_1,
                //penilaian_1: penilaian_1,
                //status_sasaran: status_sasaran
            }

            var html = template(data);
            $("#addRow").append(html)
        
            //total_ammount_price();
            //total_jumlah();
            //divideBy();
        });

        $(document).on('click','.removeaddmore',function(event){
            $(this).closest('.delete_add_more_item').remove();
            //total_ammount_price();
            //total_jumlah();
            //divideBy();
        });

        

        //function total_ammount_price() {
            //var sum = 0;
            //$('.penilaian_1').each(function(){
            //var value = $(this).val();
            //if(value.length != 0)
            //{
                //sum += parseFloat(value);
            //}
            //});
            //$('#estimated_ammount').val(sum);
        //}
//
        //function total_jumlah() {
            //var colCount = $(".penilaian_1").length;
            //$('#jumlah').val(colCount);
        //}
//
        //function divideBy() {
//        
            //var a = $("#estimated_ammount").val();
            //var b = $("#jumlah").val();
            //var purata = a/b;
            //$("#purata").val(purata);
//           
        //}

        $(document).on('click','#addMoreAkhir',function(){
            
            $('.table').show();

            var bidang_tugas1 = $("#bidang_tugas1").val();
            //var penilaian_1 = $("#penilaian_1").val();
            var sasaran1 = $("#sasaran1").val();
            var pencapaian_2 = $("#pencapaian_2").val();
            var status_sasaran = $("#status_sasaran").val();
            var source = $("#document-template").html();
            var template = Handlebars.compile(source);

            var data = {
                bidang_tugas1: bidang_tugas1,
                sasaran1: sasaran1,
                pencapaian_2: pencapaian_2,
                //penilaian_1: penilaian_1,
                status_sasaran: status_sasaran
            }

            var html = template(data);
            $("#addRowAkhir").append(html)
        
            //total_ammount_price();
            //total_jumlah();
            //divideBy();
        });

        $(document).on('click','.removeaddmore',function(event){
            $(this).closest('.delete_add_more_item').remove();
            //total_ammount_price();
            //total_jumlah();
            //divideBy();
        });

        <!-- Button Cipta Hapus Semua -->
        $(function() {
        function TimePeriod() {
            var now = new Date();

            if ((now.getMonth() + 1) == 1 || (now.getMonth() + 1) == 12) {
            $("#mediumButton1").show();
            $("#mediumButtonHapus").show();
            } else {
            $("#mediumButton1").hide();
            $("#mediumButtonHapus").hide();
            }
        }

        TimePeriod();
        });

        <!-- Button ulasan -->
        $(function() {
        function TimePeriod() {
            var now = new Date();

            if ((now.getMonth() + 1) == 11 || (now.getMonth() + 1) == 12) {
            $("#ButtonUlasan").show();
            } else {
            $("#ButtonUlasan").hide();
            }
        }

        TimePeriod();
        });

        <!-- Button Kekal Pinda Gugur -->
        $(function() {
        function TimePeriod() {
            var now = new Date();

            if ((now.getMonth() + 1) == 11 || (now.getMonth() + 1) == 12) {
            $("#dropdownMenuButton").show();
            } else {
            $("#dropdownMenuButton").hide();
            }
        }

        TimePeriod();
        });

        <!-- Button Tambah -->
        $(function() {
        function TimePeriod() {
            var now = new Date();

            if ((now.getMonth() + 1) == 11 || (now.getMonth() + 1) == 12) {
            $("#mediumButtonAkhir").show();
            } else {
            $("#mediumButtonAkhir").hide();
            }
        }

        TimePeriod();
        });

        function copyEvent(id)
        {
            var str = document.getElementById(id);
            window.getSelection().selectAllChildren(str);
            document.execCommand("Copy")
        }
        
    </script>

    
    <script>
        // display a modal (Big modal)
        $(document).on('click', '#BigButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#BigModal').modal("show");
                    $('#BigBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        // display a modal (medium modal)
        $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModal').modal("show");
                    $('#mediumBody').html(result).show();
                    
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        $(document).on('click', '#mediumButton1', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModal1').modal("show");
                    $('#mediumBody1').html(result).show();
                    
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        $(document).on('click', '#mediumButtonP1', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModalP1').modal("show");
                    $('#mediumBodyP1').html(result).show();
                    
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        $(document).on('click', '#mediumButtonp2', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModalp2').modal("show");
                    $('#mediumBodyp2').html(result).show();
                    
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        $(document).on('click', '#mediumButtonAkhir', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModalAkhir').modal("show");
                    $('#mediumBodyAkhir').html(result).show();
                    
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        $(document).on('click', '#mediumButtonKekal', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModalKekal').modal("show");
                    $('#mediumBodyKekal').html(result).show();
                    
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        $(document).on('click', '#mediumButtonPinda', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModalPinda').modal("show");
                    $('#mediumBodyPinda').html(result).show();
                    
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

        $(document).on('click', '#mediumButtonGugur', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModalGugur').modal("show");
                    $('#mediumBodyGugur').html(result).show();
                    
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

    </script>

    <!-- purata 2 digit -->

    <!--<script type="text/javascript">
            $(document).ready(function () {
                $(".purata").change(function() {
                    $(this).val(parseFloat($(this).val()).toFixed(2));
                });
            });
    </script>-->
    

    

    <!-- Check Box -->
    <script>
        $(document).ready(function(){
            $(".check").click(function(){
                $("#myCheck").prop("checked", true);
            });
            $(".uncheck").click(function(){
                $("#myCheck").prop("checked", false);
            });
        });

        
    </script>
</html>
