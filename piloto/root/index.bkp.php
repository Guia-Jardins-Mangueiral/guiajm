<?Php
error_reporting(E_ALL);
$conn = mysql_connect("127.0.0.1", "root", "");
mysql_select_db('jm', $conn);

$result = mysql_query("select * from uf");

if (!$result) {
    die('Invalid query: ' . mysql_error());
}


echo "<pre>";
while ($row = mysql_fetch_assoc($result)) {
    echo $row['sigla'] . " ";
    echo $row['nome'];
    echo chr(10);
}
die();
?>

<!DOCTYPE html>
<html lang="en" ng-app="gmAPP">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <script src="http://code.angularjs.org/1.0.1/angular-1.0.1.min.js"></script>

        <title>Shop Homepage Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/shop-homepage.css" rel="stylesheet">

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

        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

    </head>

    <body ng-controller="indexControler">

        <script type="text/javascript" src="js/indexController.js"></script>

        <div ng-include="templates.menuTopo"></div>

        <div class="container">

            <div class="row">

                <div ng-include="templates.menuLateral"></div>

                <div class="col-md-9">

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

                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#">Produtos</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li style="float:right" class="col-md-6">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="o que vc procura?">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </span>

                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="row" style="border-left:solid 1px #DDDDDD;padding-top:10px;">


                        <div class="col-sm-4 col-lg-4 col-md-4" ng-repeat="item in produtos">
                            <div class="thumbnail">
                                <img src="{{item.imagem}}" data-toggle="modal" href="#myModal" style="cursor:pointer;">
                                <div class="caption">
                                    <h4 class="pull-right">R$ {{item.preco}}</h4>
                                    <h4><a href="#" data-toggle="modal" data-target="#myModal" onclick='$("#modalContent").load("detalhar-item.html");'>{{item.produto}}</a>
                                        <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" onclick='$( "#modalContent" ).load( "detalhar-item.html" );'> -->
                                    </h4>
                                    <p>{{item.descricao}}</p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right">15 reviews</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <h4><a href="#">Like this template?</a>
                            </h4>
                            <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                            <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- /.container -->


        <!-- ---------------------------------------------------------------------------------------------------------- -->
        <!-- Modal ---------------------------------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------------------------------------- -->
        <!-- <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch demo modal</a> -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width:1220px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>

                    <!-- o conteúdo da modal será inserido aqui -->
                    <div class="modal-body" id="modalContent" ng-include="templates.detalhe"></div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ---------------------------------------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------------------------------------- -->


        <div class="container">

            <hr>

            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Company 2013 - Template by <a href="http://maxoffsky.com/">Maks</a>
                        </p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="../meteor-scroll-to-fixed-master/scroll-to-fix.js"></script>

        <script>
                        /*$(document).ready(function() {
                         $('#menuLateral').scrollToFixed({marginTop: 69});
                         })*/
        </script>
    </body>

</html>
