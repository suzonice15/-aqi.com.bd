@if(isset($reports ))
    <?php $i=0; $total=0;?>
    @foreach ($reports  as $report)
        <?php
        $total=$report->amount+$total;
        ?>
        <tr>

            <td> {{ ++$i }} </td>

            <td>
                {{$report->name}}
            </td>

            <td style="text-align: center">
                @if($report->status==1)
                    <span class="label label-success">Income</span>
                @else

                    <span class="label label-info">Expense</span>
                @endif
            </td>
            <td style="text-align: right">{{$report->amount}}</td>
            <td style="text-align: center">{{$report->note}}</td>
            <td style="text-align: center">{{date('d-m-Y',strtotime($report->created_at))}}</td>
        </tr>

    @endforeach
    <tr><td colspan="3" style="text-align: right">Total</td><td style="text-align: right">{{$total}}</td></tr>


@endif


