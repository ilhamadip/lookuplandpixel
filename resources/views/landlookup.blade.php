<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LookupLand</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        iframe{
            width: 100%;
            height: 250px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container pt-2 pb-1">
            <div class="d-flex justify-content-center">
                    <button class="btn btn-success btn-sm me-2" id="btnStart">Start</button>
            </div>
        </div>
        <div class="container pt-2 pb-1">
            <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-sm me-2" id="btnPrevious">Previous All</button>
                    <button class="btn btn-primary btn-sm me-2" id="btnRandom">Random All</button>
                    <button class="btn btn-primary btn-sm me-2" id="btnNext">Next All</button>
            </div>
        </div>
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-6 p-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p> Land <span class="title">?</span></p>
                            </div>
                            <iframe class="frame" src="" frameborder="0" data-number="" id="frame1"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p> Land <span class="title">?</span></p>
                            </div>
                            <iframe class="frame" src="" frameborder="0" data-number="" id="frame2"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p> Land <span class="title">?</span></p>
                            </div>
                            <iframe class="frame" src="" frameborder="0" data-number="" id="frame3"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p> Land <span class="title">?</span></p>
                            </div>
                            <iframe class="frame" src="" frameborder="0" data-number="" id="frame4"></iframe>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $("#btnStart").click(function(){
        $(".frame").each(function(){
            var randomNumber = Math.floor(Math.random() * 5000) + 1;
            $(this).attr("src", "https://play.pixels.xyz/pixels/share/" + randomNumber);
            $(this).attr("data-number", randomNumber);
            $(this).siblings(".text-center").find("span.title").text(randomNumber);
        });
        $("#btnStart").addClass('disabled');
    });
    $("#btnRandom").click(function(){
        $(".frame").each(function(){
            var randomNumber = Math.floor(Math.random() * 5000) + 1;
            $(this).attr("src", "https://play.pixels.xyz/pixels/share/" + randomNumber);
            $(this).attr("data-number", randomNumber);
            $(this).siblings(".text-center").find("span.title").text(randomNumber);
        });
    });

    $("#btnNext").click(function(){
        $(".frame").each(function(){
            var currentNumber = parseInt($(this).attr("data-number"));
            var nextNumber = currentNumber + 1;
            if(nextNumber > 5000) nextNumber = 1; 
            $(this).attr("src", "https://play.pixels.xyz/pixels/share/" + nextNumber);
            $(this).attr("data-number", nextNumber);
            $(this).siblings(".text-center").find("span.title").text(nextNumber);
        });
    });

    $("#btnPrevious").click(function(){
        $(".frame").each(function(){
            var currentNumber = parseInt($(this).attr("data-number"));
            var previousNumber = currentNumber - 1;
            if(previousNumber < 1) previousNumber = 5000; 
            $(this).attr("src", "https://play.pixels.xyz/pixels/share/" + previousNumber);
            $(this).attr("data-number", previousNumber);
            $(this).siblings(".text-center").find("span.title").text(previousNumber);
        });
    });
});
</script>
</html>