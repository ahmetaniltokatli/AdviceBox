app.config(['$stateProvider', '$urlRouterProvider', '$locationProvider', function ($stateProvider, $urlRouterProvider, $locationProvider) {

    $locationProvider.html5Mode({
        enabled: true,
        requireBase: true
    });

    $urlRouterProvider.when('', '/');

    // Redirect any unresolved url
    $urlRouterProvider.otherwise("/404");

    $stateProvider

        .state('404', {
            url: "/404",
            templateUrl: "modules/Content/404.view.html",
            data: {
                requireLogin: false
            }
        })

        .state('index', {
            url: "/",
            templateUrl: "modules/Index/index.view.html?" + new Date().getTime(),
            controller: "IndexController",
            data: {
                requireLogin: false
            }
        })

}]);