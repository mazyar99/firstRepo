<div style="text-align: center;background-color:#2d3748ff;">
    <h1>hello dear <span style="color: red">{{$name}}</span></h1>
    {!! ($text) !!}<br>
    <p style="color: chocolate">This email is just for test sir don't answer</p><br>
    <a href="https://www.google.com"><img src="{{$message->embed(public_path('Capture.PNG'))}}" alt="img-pic"
                                          width="200px"
                                          title="do not click on this pic stupid"></a><br>
    <a href="https://www.google.com">go back to website</a>
</div>
