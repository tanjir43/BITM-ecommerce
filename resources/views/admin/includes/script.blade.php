<!-- CORE PLUGINS-->
<script src="{{asset('/')}}asset/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="{{asset('/')}}asset/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}asset/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{asset('/')}}asset/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="{{asset('/')}}asset/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>
<script type="text/javascript">
    $(function() {
        $('#summernote').summernote();
        $('#summernote_air').summernote({
            airMode: true
        });
    });
</script>

<script>
    $(document).on('change','#categoryId',function () {
    var categoryId = $(this).val();
    $.ajax({
        method: 'GET',
        url:'{{url('/get-sub-category-by-id')}}',
        data:{id: categoryId},
        dataType:'json',
        success: function (res) {
            var option ='';
            option += '<option value="" disabled selected> -- Select Sub Category Name -- </option>'
            $.each(res,function (key, value) {
                option += '<option value="'+value.id+'">'+value.name+'</option>';
            });
            $('#subCategoryId').empty().append(option);
        },
        error:function (e) {
            console.log(e);
        }
    });
    });
</script>
