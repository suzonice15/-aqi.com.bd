@extends('website.master')
@section('mainContent')

    <section>
        <div class="gap" >

            <div class="container">
                <form action="/admission" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                Successfully inserted data
                            </div>
                        </div>


                    </div>

                </form>
            </div>

        </div>
    </section>



@endsection
