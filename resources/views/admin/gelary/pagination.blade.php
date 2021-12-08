@if(isset($gelarys))
    <?php $i=0;?>
    @foreach ($gelarys as $gelary)
        <tr>

            <td> {{ ++$i }} </td>

            <td>

               {{$gelary->gelary_name}}

            </td>
        
            <td> <img  width="50" src="{{ asset('/uploads') }}/gelary/{{ $gelary->gelary_picture }}"></td>


            <td>{{$gelary->order_by}}</td>
            <td>{{date('d-m-Y',strtotime($gelary->create_at))}}</td>

            <td>
                <a title="edit" href="{{ url('admin/gelary') }}/{{ $gelary->gelary_id }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="{{ url('admin/gelary/delete') }}/{{ $gelary->gelary_id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach


@endif


