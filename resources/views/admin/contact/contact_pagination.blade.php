@if(isset($inquiry))
    <?php $i=$inquiry->perPage() * ($inquiry->currentPage()-1);?>

    @foreach ($inquiry as $row)
        <tr>

            <td> {{ ++$i }} </td>

            <td>

                {{$row->contact_fist_name}}   {{$row->contact_last_name}}

            </td>
            <td>
                {{$row->contact_phone}}
            </td>
            <td>
                {{$row->contact_email}}
            </td>

            <td>
                {{$row->message}}
            </td>


            <td>{{date('d-m-Y',strtotime($row->created_at))}}</td>

            <td>


                <a title="delete" href="{{ url('admin/contact/delete') }}/{{ $row->contact_id }}" onclick="return confirm('Are you want to delete this Product')">
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


