<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CSS dan JavaScript</title> 


    <link rel="stylesheet" href="bebas.css">

    <style>
        .sembunyi{
            display: none;

        }

        .flex-center{
            display:flex;
            justify-content: center;
            align-items: center;
            min-heigth: 100vh;
        }

        .kotak-info{
            background-color: #e2e8f0;
            padding: 14px;
            margin:10;
            border:2px solid rgb(255, 255, 255);
            border-radius: 6px;


        }

    </style>

</head>
<body>

   
      <div class="flex-center">
      <div class="kartu-profile">
        <h2>LastKiss</h2>
        <P> web desain</p>
        <button onclick="info()" class="btn-detail">info lengkap</botton>
      </div>
    <div class="kotak-info sembunyi" id="infobox">
        <h1>Informasi Detail</h1>
    </div> 
<script>
    function info(){
        //alert("tombol info lengkap di click");
        let info = document.getElementById("infobox");

        info.style.display = "block";

    }
    </script>

</body>
</html>