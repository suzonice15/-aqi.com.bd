@extends('layouts.master')
@section('pageTitle')
    Student View
@endsection
@section('mainContent')
    <div class="box-body">


        <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <tbody>
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>


                    <td>

                    </td>
                    <td>

                    </td>
                    <td style="float: right;"><img width="100"
                                                   src="{{url('/uploads/users')}}/{{$admission->student_picture}}"></td>
                </tr>

                <tr>
                    <td style="width: 11%;">
                        Name (Bangla):
                    </td>
                    <td colspan="5">
                        {{$admission->name_bn}}
                    </td>

                    <td style="width: 10%;">
                        Birth Day:
                    </td>
                    <td colspan="3" style="width: 15%;">
                        {{date("d-m-Y",strtotime($admission->birth_day))}}
                    </td>

                </tr>

                <tr>
                    <td style="width: 11%;">
                        Name(English):
                    </td>
                    <td colspan="5">
                        {{$admission->name_en}}
                    </td>

                    <td style="width: 10%;">
                        Blood Group:
                    </td>
                    <td style="width: 15%;">
                        {{$admission->blood_group}}
                    </td>

                </tr>


                <tr>
                    <td style="width: 11%;">
                        Present Address:
                    </td>
                    <td>
                        {{$admission->present_address}}
                    </td>

                    <td style="width: 10%;">
                        Post Office:
                    </td>
                    <td style="width: 15%;">
                        {{$admission->post_office}}
                    </td>
                    <td style="width: 10%;">
                        Thana:
                    </td>
                    <td style="width: 15%;">
                        {{$admission->thana}}
                    </td>

                    <td style="width: 10%;">
                        District:
                    </td>
                    <td style="width: 15%;">
                        {{$admission->district}}
                    </td>


                </tr>
                <tr>
                    <td>Permanent:</td>
                    <td colspan="8">{{$admission->parmanent_address}}</td>
                </tr>


                <tr>
                    <td style="width: 11%;">
                        Father Name:
                    </td>
                    <td colspan="2">
                        {{$admission->father_name}}
                    </td>

                    <td style="width: 10%;">
                        Education
                    </td>
                    <td colspan="2" style="width: 15%;">
                        {{$admission->fahter_education}}
                    </td>
                    <td style="width: 10%;">
                       Ocupation
                    </td>
                    <td style="width: 15%;">
                        {{$admission->father_ocupation}}
                    </td>
                </tr>

                <tr>
                    <td style="width: 11%;">
                        Father NID:
                    </td>
                    <td colspan="2">
                        {{$admission->nid}}
                    </td>


                    <td style="width: 10%;">
                        Mobile
                    </td>
                    <td colspan="5" style="width: 15%;">
                        {{$admission->father_mobile}}
                    </td>
                </tr>

                <tr>
                    <td style="width: 11%;">
                        Mother Name:
                    </td>
                    <td colspan="2">
                        {{$admission->mother_name}}
                    </td>

                    <td style="width: 10%;">
                        Ocupation
                    </td>
                    <td colspan="2" style="width: 15%;">
                        {{$admission->mother_ocupation}}
                    </td>
                    <td style="width: 10%;">
                        Mobile
                    </td>
                    <td style="width: 15%;">
                        {{$admission->mother_mobile}}
                    </td>
                </tr>

                <tr>
                    <td style="width: 11%;">
                       Gardian Name:
                    </td>
                    <td colspan="5">
                        {{$admission->gardian_name}}
                    </td>

                    <td style="width: 10%;">
                      Relation:
                    </td>
                    <td colspan="3" style="width: 15%;">
                        {{$admission->gardian_relation}}
                    </td>

                </tr>

                <tr>
                    <td style="width: 11%;">
                        Address:
                    </td>
                    <td colspan="5">
                        {{$admission->gardian_address}}
                    </td>

                    <td style="width: 10%;">
                       Mobile :
                    </td>
                    <td style="width: 15%;">
                        {{$admission->gardian_mobile}}
                    </td>

                </tr>



                <tr>
                    <td colspan="2" style="width: 15%;">
                        Where he want to admit :
                    </td>
                    <td colspan="6">
                        {{$admission->student_hall}}
                    </td>

                </tr>

                @if($admission->madrasah_division)


                    <tr>
                        <td style="width: 11%;">
                          Madrasah Division:
                        </td>
                        <td colspan="8">
                            {{$admission->madrasah_division}}
                        </td>

                    </tr>
                    @else

                    <tr>
                        <td style="width: 11%;">
                            Scholl Division:
                        </td>
                        <td colspan="8">
                            {{$admission->school_division}}
                        </td>

                    </tr>

                    @endif


                </tbody>

            </table>

        </div>


    </div>


@endsection

