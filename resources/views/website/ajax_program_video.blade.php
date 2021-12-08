

<div class="row">

            @if($videoLists)
                @foreach($videoLists['items'] as $videoList)

<?php

                if(empty($videoList['id']['videoId'])){
                    continue;
                }

            ?>

                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="post-bx brd-rd5 blog-grid-cont">
                            <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/{{$videoList['id']['videoId']}}">
                            </iframe>

                            <div class="text-center text-black"  style="
    background-color: #07914E;
    color: white;
    margin-top: -5px;
    margin-bottom: 4px;
    height: 50px;
"> <a    data-youtube-id="{{$videoList['id']['videoId']}}"
                                                                     class="video-banner js-trigger-video-modal"  target="_blank"
                                                                     href="http://www.youtube.com/watch?v={{$videoList['id']['videoId']}}"> {{$videoList['snippet']['title']}}</a></div>
                        </div>
                    </div>


                @endforeach
            @endif

</div>