@extends('layouts.master')
@section('pageTitle')
    All Gelary    List
@endsection
@section('mainContent')
<div class="box-body">
    <div class="row">
        <div class="col-md-2  pull-right">
<a href="{{url('/admin/gelary/create')}}" class="form-control btn btn-success">
    Add New Gelary

</a>      </div>


    </div>
    <br/>
    <div class="table-responsive">

        <table  class="table table-bordered table-striped   ">
            <thead>
            <tr>
                <th>Sl</th>

                <th>Gelary Name</th>

                <th>Picture</th>
                <th>Serial</th>
                <th>Registration date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

               @include('admin.gelary.pagination')
            </tbody>

        </table>

    </div>

    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

</div>

<script>
    $(document).ready(function(){

        function fetch_data(page, query)
        {
          $.ajax({
                type:"GET",
                url:"{{url('products/pagination')}}?page="+page+"&query="+query,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        $(document).on('keyup input', '#serach', function(){
            var query = $('#serach').val();
            var page = $('#hidden_page').val();
            if(query.length >0) {
                fetch_data(page, query);
            } else {
                fetch_data(1, '');
            }
        });


        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            var query = $('#serach').val();
            fetch_data(page, query);
        });

    });
</script>


@endsection

