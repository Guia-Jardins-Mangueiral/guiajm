<?Php
//error_reporting(E_ALL);
//$conn = mysql_connect("127.0.0.1", "root", "");
//mysql_select_db('jm', $conn);
//
//$result = mysql_query("select * from uf");
//
//if (!$result) {
//    die('Invalid query: ' . mysql_error());
//}


/*echo "<pre>";
while ($row = mysql_fetch_assoc($result)) {
    echo $row['sigla'] . " ";
    echo $row['nome'];
    echo chr(10);
}*/
?>

<!DOCTYPE html>
<!-- diretiva ng-app -->
<html ng-app="portalAPP">

    <head>
        <meta charset="utf-8" />
        <title>Guia Mangueiral</title>
        <script>
            document.write('<base href="' + document.location + '" />');
        </script>

        <script data-require="angular.js@1.2.x" src="http://code.angularjs.org/1.2.4/angular.js" data-semver="1.2.1"></script>
        <script data-require="angular.js@1.2.x" src="http://code.angularjs.org/1.2.4/angular-route.js" ></script>
        <script data-require="angular.js@1.2.x" src="http://code.angularjs.org/1.2.4/i18n/angular-locale_pt-br.js" ></script>

        <script type="text/javascript" src="js/portalAPP/portalController.js"></script>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/shop-homepage.css" rel="stylesheet">


        <!-- Latest compiled and minified JavaScript -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        <style>
            <!--
            body { 
                background: url(img/meioambiente.png) no-repeat bottom left fixed; 
                -webkit-background-size: 30%;
                -moz-background-size: 30%;
                -o-background-size: 30%;
                background-size: 30%;
            }
            -->
        </style>

    </head> 

    <!-- define um controller para este trecho da tela -->
    <!-- diretiva ng-controller -->
    <body ng-controller="portalController">

        <div ng-include="includes.menuTopo"></div>

        <div class="container" style="width:{{parametros.larguraPagina}}%;padding:0px;">

<!--            <div class="row">-->
<!--                <div ng-include="includes.menuLateral"></div>-->

                <div class="col-md-12" id="divConteudo">

                    <!-- banners.html -->
                    <div class="row carousel-holder" style="display:none;width:860px;height:326px;margin:13px 0px 20px 0px !important;" ng-show="bannerExibido">
                        <div class="row carousel-holder">

                            <div class="col-md-12">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="1500">

                                    <!-- ------------------------------------------------------------ -->
                                    <!-- ----------------------- angularjs -------------------------- -->
                                    <!-- ------------------------------------------------------------ -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="{{$index}}" class="{{item.active}}" ng-repeat="item in banners"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item {{item.active}}" ng-repeat="item in banners">
                                            <img class="slide-image" src="{{item.source}}" alt="{{item.tooltip}}">
                                            <div class="carousel-caption">
                                                <h3><a href="#" style="color:white;">Description</a></h3>
                                                <p>Detalhamento da empresa...</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- ------------------------------------------------------------ -->
                                    <!-- ------------------------------------------------------------ -->

                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>

                        </div>                        
                    </div>
                    <!-- produtosServicos.html -->
                    <ng-view style="width:{{parametros.larguraPagina}}%"/>

                </div>

<!--            </div>  div class row -->

        </div>
        <!-- /.container -->


        <!-- ---------------------------------------------------------------------------------------------------------- -->
        <!-- Modal ---------------------------------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------------------------------------- -->
        <!-- <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a> -->
        <div ng-include="includes.detalharItem"></div>
        <!-- ---------------------------------------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------------------------------------- -->

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
                    /*$(document).ready(function() {
                     $('#menuLateral').scrollToFixed({marginTop: 69});
                     })*/
        </script>

    </body>

</html>
