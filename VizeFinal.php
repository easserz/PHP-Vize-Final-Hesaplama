<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://i.hizliresim.com/rj8m6pt.jpg" type="image/x-icon">
    <title>Vize Final Hesaplama By eaS</title>
</head>
<body>
        <table border=1 cellpadding=10 cellspacing=0 align=center>
            <caption><b><h2>Vize Final Hesaplama</h2></b></caption>
            <form action="#" method="post">
                <tr>
                    <th><label for="vize">Vize : </label><input type="text" name="vize"></th>
                </tr>
                <tr>
                    <th><label for="final">Final : </label><input type="text" name="final"></th>
                </tr>
                <tr>
                    <th><input type="submit" value="Hesapla"></th>
                </tr>
            </form>
        </table>
</body>
</html>
<?php
    if($_POST){
        class VizeFinal{
            public $vize,$final,$sonuc;

            public function __construct($gvize,$gfinal){
                $this->vize=$gvize;
                $this->final=$gfinal;
                return 0;
            }

            public function __destruct(){
                $sonuc = ($this->vize*0.4)+($this->final*0.6);
                if($this->final>=50){
                    if($sonuc>=60)
                        echo "<h3><br><center><span style=color:green>Geçtiniz !</span><br>Ortalamanız : <span style=color:green>$sonuc</span></center></h3>";
                    else
                        echo "<h3><br><center><span style=color:red>Kaldınız !</span><br>Ortalamanız : <span style=color:red>$sonuc</span></center></h3>";
                    }
                else
                    echo "<h3><br><center>Final Notunuz 50'nin Altında Olduğu İçin <span style=color:red>Kaldınız</span> !</center></h3><h3><center>Final Notunuz : <span style=color:red>{$this->final}</span></center></h3>";
            }
        }
        $veas=new VizeFinal($_POST["vize"],$_POST["final"]);
    }
?>