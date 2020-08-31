<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    // function outText() {
    //     var data = {
    //         message: "Peribahasa Hari ini: <br>",
    //         quote: "Tes <br>",
    //         date: Date()
    //     }
    //     document.getElementById('theText').innerHTML += data.message + data.quote + data.date + '<br><br>';
    // }

    $(document).ready(function(){
        $("button").click(function() {
        var data = {
            message: "Peribahasa Hari ini: <br>",
            date: Date()
        }
            $.ajax({
                url: "quotes.txt",
                success: function(result) {
                    let storage = result.split(",");
                    let display = [];
                    display.push(storage.pop());
                    for(i = 0; i < display.length; i++){
                        $("#theText").append(data.message + display[i] + "<br>" + data.date + "<br><br>");
                    }
                }
            })
        })
    });
</script>
</head>
<body>
<button>Tampilkan</button>

<div class="container">
    <p id="theText"></p>
</div>


</body>
</html>