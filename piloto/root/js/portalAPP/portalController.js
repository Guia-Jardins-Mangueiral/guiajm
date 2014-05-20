// DICA:
// Usar SimpleHTTPServer como servidor http para testes
//
// jnaves@skynet:~/Dropbox/courses/angular-course/ep10$ python -m SimpleHTTPServer
// Serving HTTP on 0.0.0.0 port 8000 ...

// necessário definir a dependência ngRoute
var serviceApp = angular.module('portalAPP', ['ngRoute']);

// Note: Providers can only be injected into config functions. Thus you could not inject $routeProvider into PhoneListCtrl. 
serviceApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
                when('/home', {templateUrl: 'pages/produtosServicos.html', controller: 'portalController'}).
                when('/cadastrese', {templateUrl: 'pages/cadastrese.html', controller: 'portalController'}).
//                when('/create', {templateUrl: 'create.html', controller: 'portalController'}).
//                when('/delete', {templateUrl: 'list.html', controller: 'portalController'}).
                otherwise({
                    redirectTo: '/home'
                });
    }
]);

// habilita CORS // para navegar entre domínios diferentes
serviceApp.config(['$httpProvider', function($httpProvider) {
        $httpProvider.defaults.useXDomain = true;
        delete $httpProvider.defaults.headers.common['X-Requested-With'];
    }]);


serviceApp.service('statesService', function($http, $rootScope) {

    // inserir aqui os serviços REST

    this.getJson = function (jsonName,callback) {
        $http.get('js/portalAPP/'+jsonName+'.json').success(callback)
            .error(function(data, status, headers, config) {alert('arquivo "'+jsonName+'.json" nao encontrado');});
    }

    // exemplo
//    this.getStates = function(callback) {
//        $http.get('http://statesapi.apiary.io/app.apiary.io/states').success(callback);
//    };

});


// Inicialização
serviceApp.run(function($rootScope, $location, statesService) {
    
    // carrega os parâmetros do portal
    statesService.getJson('parametros',function(data){$rootScope.parametros = data;})
    
    // carrega os produtos e serviços
    statesService.getJson('produtosServicos',function(data) { $rootScope.produtosServicos = data; });

    // carrega os itens do menu lateral
    $rootScope.tituloMenuLateral = "Condomínio";
    statesService.getJson('menuLateral',function(data) { $rootScope.menuLateral = data; });
    
    // carrega os itens do carrossel de banners
    statesService.getJson('banners',function(data){ $rootScope.banners = data; });

    // carrega os itens do carrossel de banners
    statesService.getJson('produtosServicos',function(data){ $rootScope.produtos = data; });
    
    
});

//--- AQUI VAI O CONTROLLER (agora mais magro)
serviceApp.controller('portalController', function($scope, $location, statesService) {

    $scope.includes = {
        menuTopo: 'includes/menuTopo2.html',
        menuLateral: 'includes/menuLateral.html',
        banners: 'includes/banners.html',
        produtosServicos: 'includes/produtosServicos.html',
        detalharItem: 'includes/detalharItem.html'
    };
    
//    $scope.larguraPagina = 55;
//    $scope.minWidth = "400px;"
    
    // esconder ou exibir o banner;
    $scope.bannerExibido = true;
    $scope.exibirBanner   = function(){ $scope.bannerExibido = true; }
    $scope.esconderBanner = function(){ $scope.bannerExibido = false; }
    
    $scope.filtroProdutos = "";
    

//    $scope.filtro = "";
//
//    $scope.today = statesService.getToday();
//    $scope.letras = statesService.getLetters();
//
//    $scope.addState = function() {
//        statesService.addStateIntoCollection($scope.estado, $scope.capital, 1000);
//        $location.path('#home');
//    };
//
//    $scope.deleteState = function(index) {
//        statesService.removeStateFromCollection(index);
//        $location.path('#home');
//    };

});
