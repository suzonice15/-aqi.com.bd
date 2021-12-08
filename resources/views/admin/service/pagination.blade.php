@if(isset($services))
    <?php $i=0;?>
    @foreach ($services as $service)
        <tr>

            <td> {{ ++$i }} </td>

            <td>

               {{$service->service_name}}

            </td>
            <td><?php echo  $service->service_icon  ?></td>
            <td> <img  width="50" src="{{ asset('/uploads') }}/service/{{ $service->service_image }}"></td>


            <td>{{$service->order_by}}</td>
            <td>{{date('d-m-Y',strtotime($service->created_at))}}</td>

            <td>
                <a title="edit" href="{{ url('admin/service') }}/{{ $service->service_id }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="{{ url('admin/service/delete') }}/{{ $service->service_id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach


@endif


