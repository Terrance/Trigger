<?
if (isset($_GET["q"])) {
    if (!file_exists("/var/data/rb")) {
        http_response_code(503);
    }
    return;
}
?><html>
    <head>
        <title>Error 404 (Not Found)!!1</title>
        <link rel="icon" href="http://g.etfv.co/http://www.google.com">
<?
if (isset($_GET["d"])) {
    if (file_exists("/var/data/rb")) {
        unlink("/var/data/rb");
        $out = "Undeployed";
    } else {
        fclose(fopen("/var/data/rb", "w"));
        $out = "Deployed";
    }
?>
        <script>
        document.title = ">> <? print $out; ?>";
        setTimeout("document.title = \"Error 404 (Not Found)!!1\";", 2000);
        </script>
<?
} else {
    $i = strtolower($_GET["i"]);
    if ($i) {
        $is = Array("kfc" => "http://img259.imageshack.us/img259/8619/2204355.swf",
                    "gotye" => "http://www.youtube.com/watch?v=8UVNT4wvIGY",
                    "nyan" => "http://nyan.cat",
                    "rroll" => "http://www.youtube.com/watch?v=dQw4w9WgXcQ");
        if (array_key_exists($i, $is)) {
            header("Location: rb.php#" . $is[$i]);
        }
    }
?>
        <script>
        var ajax = (window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP"));
        var url;
        function poll() {
            ajax.open("GET", "rb.php?q", true);
            ajax.send();
        }
        function checkHash() {
            var u2 = location.hash.substring(1);
            if (u === u2) {
                setTimeout("checkHash()", 100);
            } else {
                document.location.reload();
            }
        }
        ajax.onreadystatechange = function()
        {
            if (ajax.readyState == 4 && ajax.status == 200) {
                window.location = location.hash.substring(1);
            } else {
                setTimeout("poll();", 5000);
            }
        }
        var u = location.hash.substring(1);
        checkHash();
        if (u && u !== "???") {
            document.title = ">> Trigger set";
            setTimeout("document.title = \"Error 404 (Not Found)!!1\"; poll();", 2000);
        } else {
            document.title = ">> Trigger missing";
            setTimeout("document.title = \">> Add # then URL\";", 2000);
            setTimeout("document.title = \">> To end of address\";", 4000);
            setTimeout("document.title = \"Error 404 (Not Found)!!1\";", 6000);
        }
        </script>
<?
}
?>
        <style>
        body {
            margin: 0;
        }
        iframe {
            border: 0;
            height: 100%;
            width: 100%;
        }
        </style>
    </head>
    <body>
        <iframe src="http://www.google.com/404"></iframe>
    </body>
</html>

