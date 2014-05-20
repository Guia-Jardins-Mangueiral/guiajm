var gmAPP = angular.module("gmAPP", []);

gmAPP.controller("indexController", function indexController($scope) {

            $scope.templates = {
                menuTopo: 'template/templateMenuTopo2.html',
                menuLateral: 'template/templateMenuLateral.html',
                detalhe: 'detalharItem.html'
            };

            // $scope.template = 'detalharItem.html';

            $scope.banners = [
                {
                    active: 'active',
                    source: 'http://css-tricks.com/examples/ImageWipes/images/banner-2.jpg',
                    tooltip: 'aaa'
                },
                {
                    active: '',
                    source: 'http://www.dnnsmart.net/desktopmodules/DNNGo_EffectCollection/ImageHandler.ashx?width=800&height=300&HomeDirectory=/Portals/0/icon/Team1/&fileName=triworks_abstract26_002.jpg&q=1&PortalId=0',
                    tooltip: 'bbb'
                },
                {
                    active: '',
                    source: 'http://www.joomlahackers.net/demosite/images/slideimages/001.jpg',
                    tooltip: 'ccc'
                }, ];


            $scope.tituloMenuLateral = "Condomínio";
            $scope.menuLateral = [
                {nome: 'Informativos', link: '#informativos'},
                {nome: '2ª via de boleto', link: '#boleto'},
                {nome: 'Registro de Visitantes', link: '#visitantes'},
                {nome: 'Eventos', link: '#eventos'},
                {nome: 'Agendamento de Churrasqueiras', link: '#churrasqueiras'},
                {nome: 'Mural de Recados', link: '#mural'}
            ];


            $scope.produtos = [
                {
                    imagem: 'http://www.artepratica.com/especiais/especialfineart/files/stacks_image_6.png',
                    produto: 'First Product',
                    descricao: 'See more snippets like this online store item at Bootsnipp - http://bootsnipp.com.',
                    preco: '24,99',
                    estrelas: 5
                },
                {
                    imagem: 'http://lorenzorodriguez.com.br/imoveis/wp-content/uploads/2014/03/image-83-320x150.jpeg',
                    produto: 'Second Product',
                    descricao: 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    preco: '64,99',
                    estrelas: 4
                },
                {
                    imagem: 'http://kitsivanov.orgfree.com/images/templatemo_image_01.jpg',
                    produto: 'Third Product',
                    descricao: 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    preco: '74,99',
                    estrelas: 4
                },
                {
                    imagem: 'http://e-see.com/apps/brandfm/guidelines/hpa/image-bg1.jpg',
                    produto: 'Fourth Product',
                    descricao: 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    preco: '84,99',
                    estrelas: 3
                },
                {
                    imagem: 'http://e-see.com/apps/brandfm/guidelines/hpa/image-bg2.jpg',
                    produto: 'Fifth Product',
                    descricao: 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    preco: '94,99',
                    estrelas: 4
                },
                {
                    imagem: 'http://www.lcwlegal.com/images/sitecontent/115363_ImageUpload.jpg',
                    produto: 'Last Product',
                    descricao: 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    preco: '200,00',
                    estrelas: 4
                },
            ]
        }
);
