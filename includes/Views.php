<?php 

namespace Views;

//use Account;

class Views //implements Account
{
    public function addHeader()
    {
        echo "<!DOCTYPE html>
        <html lang=\"en\">
          <head>
            <meta charset=\"utf-8\">
              <title>Интерфейс пользователя</title>
              <link href=\"css/style.css\" media=\"screen\" rel=\"stylesheet\">
              <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
            
        </head> 
        <body>";
    }

    public function addFooter()
    {
      echo "<footer>© 2019 <a href=\"http://www.github.com/Starnec\">Алексей Овчинников ©</a>. Все права защищены. </footer>
      </body>
      </html>";
    }
}