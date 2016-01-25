var app = angular.module('kazyna_app', ['ngAnimate'])

    .controller('kazyna_main',function($scope, $http,  $filter, $window){
        $scope.catalog_window = {
            src_big : '',
            content : '',
            weight : '',
            stones : '',
            size : '',
            price : ''
        }

        window.filter_begin = 0;
        $scope.filter_param = 'etno'
        $scope.active_elem = 0
        $scope.width = ''
        $scope.filter_begin = 0;
        $scope.filter_limit = 4
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
        $scope.catalog_thumnail = []
        $scope.catalog_main_filter = [
            'etno',
            'obr_',
            'ring',
            'serg',
            'chil_collect',
            'cullon',
            'another'
        ]
        $scope.length_watch = [
            4,
            0
        ]

        $http.get('test.json').then(function (value) {
            $scope.catalog_thumnail = value.data;
            $scope.thumbnail_click(-1);
            $scope.length_watch[1] = $filter('filter')($scope.catalog_thumnail, $scope.filter_param).length;

            if( document.documentElement.clientWidth > 1230){
                $scope.width = 694;
                $scope.filter_limit = 4;
            }

            if( document.documentElement.clientWidth < 1230){
                $scope.width = 519;
                $scope.filter_limit = 3;
            }

            if( document.documentElement.clientWidth < 600){
                $scope.filter_limit = $scope.length_watch[1];
            }

            //$scope.test_funt = function() {
            //
            //    if( document.documentElement.clientWidth > 1230){
            //        $scope.width = 659;
            //    }
            //
            //    if( document.documentElement.clientWidth < 1230){
            //        $scope.width = 519;
            //    }
            //
            //    if( document.documentElement.clientWidth < 600){
            //        $scope.filter_limit = $filter('filter')($scope.catalog_thumnail, $scope.filter_param).length;
            //        console.log($scope.filter_limit);
            //    }
            //}
        });

        $scope.main_filter_func = function(argument){
            $scope.filter_param = $scope.catalog_main_filter[argument];
            $scope.catalog_filter[$scope.active_elem].active = ' ';
            $scope.active_elem = argument;
            //$scope.catalog_filter[argument].active = 'active';
            $scope.length_watch[1] = $filter('filter')($scope.catalog_thumnail, $scope.filter_param).length;
            $scope.thumbnail_click(0);
        }

        $scope.previous_button = function(){
            if($scope.filter_begin != 0) {

                var filter_check_on_null = $scope.filter_begin == 0 ? 1 : $scope.filter_begin;

                $scope.filter_begin -= 1;
                $scope.length_watch[0] -= document.querySelectorAll('.catalog_elem_thumb').length - filter_check_on_null * $scope.filter_limit;
            }
        }

        $scope.next_button = function(){
            if($scope.filter_array() ) {

                var filter_check_on_null = $scope.filter_begin == 0 ? 1 : $scope.filter_begin;

                $scope.filter_begin += 1;
                var init_variable = $filter('filter')($scope.catalog_thumnail, $scope.filter_param);

                if( (document.querySelectorAll('.catalog_elem_thumb').length - filter_check_on_null * $scope.filter_limit) > 4){
                    $scope.length_watch[0] += 4;
                }else{
                    $scope.length_watch[0] += document.querySelectorAll('.catalog_elem_thumb').length - filter_check_on_null * $scope.filter_limit;
                }
            }
        }

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

        $scope.thumbnail_click = function(argument) {

            if (argument == -1 ){
                var init_variable = $filter('filter')($scope.catalog_thumnail, $scope.filter_param)[0];
            }else {
                var init_variable = $filter('filter')($scope.catalog_thumnail, $scope.filter_param);
                    init_variable = $filter('limitTo')(init_variable, $scope.filter_limit, $scope.filter_begin)[argument];

            }
            $scope.catalog_window.src_big = init_variable.src_big;
            $scope.catalog_window.content = init_variable.content;
            $scope.catalog_window.weight = init_variable.weight;
            $scope.catalog_window.stones = init_variable.stones;
            $scope.catalog_window.size = init_variable.size;
            $scope.catalog_window.price = init_variable.price;
        }

        $scope.arrow_click = function (argument) {
            console.log($scope.filter_limit);
            if(argument < $filter('filter')($scope.catalog_thumnail, $scope.filter_param).length ){
                $scope.thumbnail_click(argument);
                if (argument > -1 ){
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