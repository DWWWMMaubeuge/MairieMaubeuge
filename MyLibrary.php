<?php
function entete()
{
        echo "<!DOCTYPE html>\n";
        echo "<html>\n";
        echo "<head>";
        echo "<title>La ville de Maubeuge</title>\n";
        echo "<link rel=\"stylesheet\" href=\"index.css\">\n";
        echo "<meta charset=\"utf-8\">\n";
        echo "<meta name=\"author\" content=\"Steven\">\n";
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
        echo"</head>\n";
        echo"<body>\n";
        echo "<header class=\"page-header\">\n";
        echo "<h1>La ville de Maubeuge</h1>\n";
        echo "</header>\n";
}


function menu( $numActif )
{                 
    echo"<nav>\n";
    echo"<div class=\"topnav\">\n";
                if ( $numActif == 0 )
                    echo "<a href=\"acceuil.php\" class=\"active\">Education</a>\n";
                else
                    echo "<a href=\"acceuil.php\" >Education</a>\n";

                if ( $numActif == 1 )
                    echo"<a href=\"localisation.php\" class=\"active\">Localisation</a>\n";
                else
                    echo"<a href=\"localisation.php\">Localisation</a>\n";

                if ( $numActif == 2 )
                    echo "<a href=\"monument.php\" class=\"active\">Les monuments</a>\n";
                else
                    echo "<a href=\"monument.php\">Les monuments</a>\n";

                if ( $numActif == 3 )
                    echo "<a href=\"activites.php\" class=\"active\">Activités</a>\n";
                else
                    echo "<a href=\"activites.php\">Activités</a>\n";

                if ( $numActif == 4 )
                    echo "<a href=\"education.php\" class=\"active\">Education</a>\n";
                else
                    echo "<a href=\"education.php\">Education</a>\n";

                if ( $numActif == 5 )
                    echo "<a href=\"contact.php\" class=\"active\">Contact</a>\n";
                else
                    echo "<a href=\"contact.php\">Contact</a>\n";

            echo"</div>\n";
        echo"</nav>\n";
}


function footer()
{
    echo "<a href=\"https://www.terre-net.fr/meteo-agricole/\" id=\"terrenet-meteo-agricole\" >M\neacute;t\neacute;o agricole - Terre-net</a>
    <script type=\"text/javascript\">\n";
        echo "var s,r,t;  r = false;   s = document.createElement(\"script\");  s.type = \"text/javascript\"; s.src =\"https://syndic.terre-net-media.fr/api-meteo-tn/?idpoint=2995150\nwidth=small\nc1=%231312a0\nc2=%23ffffff\nc3=%23ffffff\nc4=%23000000\nc5=%23efefef\";s.className = \"js-widget-terrenet\"; s.onload = s.onreadystatechange = function(){if ( !r \n\n (!this.readyState || this.readyState == \"complete\") ) { r = true;setwidgetMeteoTN();}};var t = document.getElementsByTagName(\"head\")[0];t.appendChild(s);\n";
        echo"</script>\n";
        echo "</script>\n";  
        echo "<footer>\n";
                    
        echo "<p>Delegue Company © AfpaFormation. All rights reserved.</p>\n";
      
        echo "</footer>\n";  
        echo "<script src=\"acceuil.js\"></script>\n";
        echo "<script src=\"https://cdn.jsdelivr.net/npm/darkmode-js@1.5.6/lib/darkmode-js.min.js\"></script>\n";
        echo"<script>
            function addDarkmodeWidget() {
            new Darkmode().showWidget();
        }
        window.addEventListener('load', addDarkmodeWidget);\n";
        
        echo"</body>\n";
          
    
    echo"</html>\n"; 
}