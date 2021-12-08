@if(isset($inquiry))

    <?php $i=$inquiry->perPage() * ($inquiry->currentPage()-1);?>

    @foreach ($inquiry as $row)
        <tr>

            <td> {{ ++$i }} </td>

            <td>

                {{$row->name}}

            </td>
            <td>
                {{$row->phone}}
            </td>
            <td>
                {{$row->email}}
            </td>


            <td>{{date('d-m-Y',strtotime($row->created_time))}}</td>


            <td>

                <?php if($row->status==1) {?>


                    <button type="button" class="btn btn-success messageView" data-id="{{$row->inquiry_id }}" data-toggle="modal" data-target="#message-view">
                        <i class="fa fa-fw fa-check"></i>
                    </button>
                    <?php } else { ?>
                    <button type="button" class="btn btn-info messageView" data-id="{{$row->inquiry_id }}" data-toggle="modal" data-target="#message-view">
                        <i class="fa fa-fw fa-eye"></i>
                    </button>
                    <?php }?>



                <a title="delete" href="{{ url('admin/inquery/delete') }}/{{ $row->inquiry_id }}" onclick="return confirm('Are you want to delete this Product')">
                <span class="glyphicon glyphicon-trash btn btn-danger"></span>
            </a>
            </td>
        </tr>

    @endforeach
    <tr>
        <td colspan="9" align="center">
            {!! $inquiry->links() !!}
        </td>
    </tr>

@endif


<div class="modal fade" id="message-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Message View</h4>
            </div>
            <div class="modal-body" id="table_data">

                <span id="message_show"></span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right messageClose" data-dismiss="modal">Close</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>



    $(document).on('click','.messageView',function () {

        var inquery=  $(this).data("id");


        if (inquery) {
            $.ajax({
                url: "{{url('/')}}/contact/message/show",
                method: "POST",
                data: {
                    inquery: inquery,

                    "_token": "{{ csrf_token() }}",
                },
                success: function (result) {
                    var message=result.message;
                    $("#message_show").text(message);
                    $( "#form_submit" ).prop( "disabled", true );


                }
            });
        }
    });

    $(document).on('click','.messageClose',function () {







    });
</script>