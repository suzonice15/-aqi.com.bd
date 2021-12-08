@if(isset($teams))
    <?php $i=0;?>
    @foreach ($teams as $team)
        <tr>

            <td> {{ ++$i }} </td>

            <td>

               {{$team->team_title}}

            </td>
            <td><?php echo  $team->team_name  ?></td>
            <td> <img  width="50" src="{{ asset('/uploads') }}/{{ $team->team_picture }}"></td>


            <td>{{$team->order_by}}</td>
            <td>{{date('d-m-Y',strtotime($team->created_at))}}</td>

            <td>
                <a title="edit" href="{{ url('admin/teams') }}/{{ $team->team_id }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="{{ url('admin/teams/delete') }}/{{ $team->team_id }}" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    @endforeach


@endif


