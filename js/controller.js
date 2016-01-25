var app = angular.module('kazyna_app', ['ngAnimate'])

    .controller('kazyna_main',function($scope, $http,  $filter, $window){
        // Данные для построения приложения
        $scope.catalog_filter = [
            {
                name : 'Этно дизайн',
                src : '1',
                active : 'active'
            },
            {
                name : 'Обручальные кольца',
                src : '2',
                active : ' '
            },
            {
                name : 'Кольца',
                src : '3',
                active : ' '
            },
            {
                name : 'Серьги',
                src : '4',
                active : ' '
            },
            {
                name : 'Детская коллекция',
                src : '5',
                active : ' '
            },
            {
                name : 'Кулоны',
                src : '6',
                active : ' '
            },
            {
                name : 'Остальное',
                src : '7',
                active : ' '
            }
        ]


        // Основной объект для построения окна с информацией
        $scope.catalog_window = {
            src_big : '',
            content : '',
            weight : '',
            stones : '',
            size : '',
            price : ''
        }

        // Параметр по которому происходит главная фильтрация
        $scope.filter_param = 'etno'
        $scope.filter_paran_number = 0

        // номер активной миниатюры, создан для того, что бы
        // знать какой элемент в данный момент активен и не перезаписывать его
        $scope.active_elem = 0

        // Нужно для переключения миниатюр
        $scope.width = ''

        // Начальная позиция для фильтрации массива с данными
        // который приходит с сервера
        $scope.filter_begin = 0;

        // Кол-во миниатюр на странице,
        // изменяется с размерами экрана
        $scope.filter_limit = 4;

        // Массив строк для фильтрации основного массива по его свойству
        // это свойство задается в админ панели и является определяющим фактором
        // при выборке элемента
        $scope.catalog_main_filter = [
            'etno',
            'obr_',
            'ring',
            'serg',
            'chil_collect',
            'cullon',
            'another'
        ]

        // Наблюдаемые миниатюры на странице
        // первый элемент - кол-во элементов на странице в текущий момент
        // второй элемент - кол-во всех элементов в ленте
        // третий элемент - отображает кол-во элементов в ленте на текущий момент
        // оба эти параметра выводятся на страницу при помощи деректив
        $scope.length_watch = [
            4,
            0
        ]

        // В этой функции проходит загрузка данных, инициализация и первое построение приложения
        $http.get('test.json').then(function (value) {
            $scope.catalog_thumnail = value.data;
            $scope.main_filter_func(0);

            if( document.documentElement.clientWidth > 1230){
                $scope.width = 694;
                $scope.filter_limit = 4;
                $scope.length_watch[0] = 4;
            } else if( document.documentElement.clientWidth < 1230){
                $scope.width = 519;
                $scope.filter_limit = 3;
                $scope.length_watch[0] = 3;
            } else if( document.documentElement.clientWidth < 600){
                $scope.filter_limit = $scope.length_watch[1];
            }
        });

        // Для фильтрации основного массива с данными по критерию $scope.filter_param
        // Так же обнуляет активность и положение миниатюр
        $scope.main_filter_func = function(argument){
            $scope.filter_param = $scope.catalog_main_filter[argument];
            $scope.catalog_filter[$scope.active_elem].active = ' ';
            $scope.active_elem = argument;
            $scope.length_watch[1] = $filter('filter')($scope.catalog_thumnail, $scope.filter_param).length;
            $scope.filter_begin = 0;
            $scope.length_watch[0] = $scope.filter_limit;
            $scope.thumbnail_click(0);
        }

        // нажатие на кнопку возле МИНИАТЮРЫ -> назад
        $scope.previous_button = function(){
            if($scope.filter_begin != 0) {
                if( document.querySelectorAll('.catalog_elem_thumb').length % $scope.filter_limit == 0){
                    $scope.length_watch[0] -= $scope.filter_limit;
                } else{
                    if ($scope.length_watch[2] == $scope.filter_limit){
                        $scope.length_watch[0] -= $scope.filter_limit;
                    } else{
                        $scope.length_watch[0] -= $scope.length_watch[2];
                        $scope.length_watch[2] = $scope.filter_limit;
                    }
                }

                $scope.filter_begin -= 1;
            }
        }


        // нажатие на кнопку возле МИНИАТЮРЫ -> назад
        $scope.next_button = function(){
            if($scope.filter_array() ) {

                //var filter_check_on_null = $scope.filter_begin == 0 ? 1 : $scope.filter_begin;
                //console.log(document.querySelectorAll('.catalog_elem_thumb').length);
                $scope.filter_begin += 1;
                //var init_variable = $filter('filter')($scope.catalog_thumnail, $scope.filter_param);

                if( document.querySelectorAll('.catalog_elem_thumb').length - $scope.length_watch[0] > $scope.filter_limit){
                    $scope.length_watch[2] = $scope.filter_limit;
                    $scope.length_watch[0] += $scope.filter_limit;
                }else{
                    $scope.length_watch[2] = document.querySelectorAll('.catalog_elem_thumb').length - $scope.length_watch[0];
                    $scope.length_watch[0] += document.querySelectorAll('.catalog_elem_thumb').length - $scope.length_watch[0];
                    console.log($scope.length_watch[2]);
                }
            }
        }


        // нажатие на кнопку возле МИНИАТЮРЫ -> вперед
        $scope.filter_array = function(){

            var filter_check_on_null = $scope.filter_begin + 1;

            if( (document.querySelectorAll('.catalog_elem_thumb').length - filter_check_on_null * $scope.filter_limit) > 0){
                return true;
            }
                return false;
            var init_variable = $filter('filter')($scope.catalog_thumnail, $scope.filter_param),
                filter_begin = $scope.filter_begin == 0 ? $scope.filter_limit : $scope.filter_begin;
            if(init_variable.length / filter_begin < 1 || init_variable.length / filter_begin == 1){
                return false;
            }
                return true;
        }


        // нажатие на кнопку МИНИАТЮРЫ
        $scope.thumbnail_click = function(argument) {
            var init_variable = $filter('filter')($scope.catalog_thumnail, $scope.filter_param)[argument];

            $scope.catalog_window.src_big = init_variable.src_big;
            $scope.catalog_window.content = init_variable.content;
            $scope.catalog_window.weight = init_variable.weight;
            $scope.catalog_window.stones = init_variable.stones;
            $scope.catalog_window.size = init_variable.size;
            $scope.catalog_window.price = init_variable.price;
        }

        // нажатие на стрелки в миниатюре, показываются в мобильной версии
        $scope.arrow_click = function (argument) {
            if(argument < $filter('filter')($scope.catalog_thumnail, $scope.filter_param).length ){
                if (argument > -1 ){
                    $scope.thumbnail_click(argument);
                    $scope.active_elem = argument;
                }
            }
        }

        var w = angular.element($window);
        w.bind('resize', function() {
            if( document.documentElement.clientWidth > 1230){
                $scope.width = 694;
                $scope.filter_limit = 4;
                $scope.length_watch[0] = 4;
            }

            if( document.documentElement.clientWidth < 1230){
                $scope.width = 519;
                $scope.filter_limit = 3;
                $scope.length_watch[0] = 3;
            }

            if( document.documentElement.clientWidth < 600){
                $scope.filter_limit = $filter('filter')($scope.catalog_thumnail, $scope.filter_param).length;
            }
        });
    })