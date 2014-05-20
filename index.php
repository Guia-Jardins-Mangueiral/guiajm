<!DOCTYPE html>
<html ng-app>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guia JM</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="css/app.css">
        <script src="bower_components/angular/angular.js"></script>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Guia JM</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Página Principal</a></li>
                        <li><a href="#contact">Agenda</a></li>
                        <li><a href="#about">Condomínio</a></li>
                        <li><a href="#about">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="container">
            <div ng-controller="CarouselCtrl">
                <div style="height: 305px">
                    <carousel interval="myInterval">
                        <slide ng-repeat="slide in slides" active="slide.active">
                            <img ng-src="{{slide.image}}" style="margin:auto;">
                            <div class="carousel-caption">
                                <h4>Slide {{$index}}</h4>
                                <p>{{slide.text}}</p>
                            </div>
                        </slide>
                    </carousel>
                </div>
            </div>
        </header>
        
        <p>Nothing here {{'yet' + '!'}}</p>
        
        
        <script>
        var CtrlProdutosServicosList = function($scope) {
            $scope.nome = "Claudio";
            
            $scope.bannerAnuncios = [
                {
                    'titulo' : 'Solee Comunicacao',
                    'url' : ''
                }
            ];
        };
        
        
        
        angular.module('myModule', ['ui.bootstrap']);
        
        function CarouselCtrl($scope) {
            $scope.myInterval = 5000;
            
            var slides = $scope.slides = [];
            
            $scope.addSlide = function() {
                var newWidth = 600 + slides.length;
                slides.push({
                    image: 'http://placekitten.com/' + newWidth + '/300',
                    text: ['More','Extra','Lots of','Surplus'][slides.length % 4] + ' ' + ['Cats', 'Kittys', 'Felines', 'Cutes'][slides.length % 4]
                });
            };
            
            for (var i=0; i<4; i++) {
                $scope.addSlide();
            }
        }
        </script>
        
    </body>
</html>
