<html>
    <head>
        <title>Pernyataan</title>
    </head>
    <body>
        <h1>Hay cantik</h1>
        <img src="https://c.tenor.com/Z8ezUHZzcLoAAAAC/love.gif" alt="">
        <h1>Mau Gak Jadi Pacarku ??</h1>
        <button id="btn_mau" onclick="alert('I Love You')">Mau</button>
        <button id="btn_gak" onpointerenter="gamau(this)" onfocus="gamau(this)" style="position: absolute; left: 70px;">Gak Mau</button>
    </body>

    <script>
        function gamau(id){
            var mau = document.getElementById("btn_mau");
            var i = Math.floor(Math.random() * 500) + 70;
            var j = Math.floor(Math.random() * 100) + mau.offsetTop;

            id.style.left = i + "px";
            id.style.top = j + "px";
        }
    </script>
</html>