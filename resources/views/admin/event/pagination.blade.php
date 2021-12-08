@if(isset($events))
    <?php $i=0;?>
    @foreach ($events as $event)
        <tr>

            <td> {{ ++$i }} </td>

            <td>

               {{$event->event_name}}

            </td>
        
            <td> <img  width="50" src="{{ asset('/uploads') }}/event/{{ $event->event_picture }}"></td>


            <td>{{$event->order_by}}</td>
            <td>{{date('d-m-Y',strtotime($event->created_at))}}</td>

            <td>
                <a title="edit" href="{{ url('admin/event') }}/{{ $event->event_id }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="{{ url('admin/event/delete') }}/{{ $event->event_id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach


@endif


