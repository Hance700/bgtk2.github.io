
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
    <title>Багетная мастерская</title>
       <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/craftyslide.css" />
    
    
    </head>
    
<body>
  <div id="header">
      <name class="softelite"><a href="index.html"><img src="img/logo.png"></a></name>
    <!--========================================================================================================= Меню вверхнее -->
       <ul class="menu_one">
            <li><font size="5" color="red" face="Arial">Каталог товара</font></li>
           <li><font size="5" color="red" face="Arial">Доставка</font></li>
           <li><font size="5" color="red" face="Arial">Стоймость товара</font>f</li>
           <li><font size="5" color="red" face="Arial">Где купить</font></li>
           <li><font size="5" color="red" face="Arial">Карта сайта</font></li>
        </ul>
    <!--============================================================================================================ Меню вверхнее end -->
    </div>
        <!-------------------------------------------------------------------------------------------------------------- Меню левое -->
   <nav_left>
   <ul class="menu_left">
       <li><h2>Каталог</h2></li>
       <li>Рамки </li>
       <li>Заказать</li>
       <li>Купить</li>
       </ul>
    </nav_left>
        <!---------------------------------------------------------------------------------------------------------- Меню левое end -->
   
   
    <div id="footer">
        
         <sort class="sort">
                <sort id="sort"><strong>Сортировать по цене</strong></sort>
        </sort>
         
         <free class="content"></free>
        </div>
    
    
    <div id="panel_one">
             <!--====================================================================================================================НАЧАЛО СЛАЙД ШОУ-->            
<div id="slideshow">
  <ul>
    <li>
      <img src="img/modul/baget1.jpg" title="Lorem ipsum dolor sit amet" />
    </li>
    
    <li>
      <img src="img/modul/baget2.jpg" title="Lorem ipsum dolor sit amet" />
    </li>
    
    <li>           
      <img src="img/modul/slide-3.jpg" title="Lorem ipsum dolor sit amet" />
    </li>	                         
  </ul>
</div>
             <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
      <script src="js/craftyslide.min.js"></script>
      
      <script>
        $("#slideshow").craftyslide();
      </script>
             </div>
<!--=====================================================================================================================КОНЕЦ СЛАЙД ШОУ-->
             
    </body>
</html>