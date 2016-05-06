<?php
$timestamp = time();
?>
<!doctype html>
<html lang="en" ng-app="AdviceBox">

<head>
    <meta charset="utf-8">
    <base href="/">
    <link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
</head>

<body ng-controller="MainController">

<div class="container-fluid">

    <div ng-include="'modules/Shared/views/common/header.html'"></div>

    <div ui-view id="mainView"></div>

    <div ng-include="'modules/Shared/views/common/footer.html'"></div>

</div>

<script src="components/jquery/jquery.min.js"></script>
<script src="components/bootstrap/bootstrap.min.js"></script>
<script src="components/angular/angular.min.js"></script>
<script src="components/angular-ui-router/angular-ui-router.min.js"></script>
<script src="components/angular-ui-bootstrap/ui-bootstrap-custom-0.13.1.js"></script>

<script src="app.js?<?=$timestamp?>"></script>
<script src="config/routes.js?<?=$timestamp?>"></script>

<script src="modules/Shared/shared.module.js?<?=$timestamp?>"></script>
<script src="modules/Shared/main.controller.js?<?=$timestamp?>"></script>

<script src="modules/Index/index.module.js?<?=$timestamp?>"></script>
<script src="modules/Index/index.controller.js?<?=$timestamp?>"></script>
<script src="modules/Index/index.service.js?<?=$timestamp?>"></script>

</body>
</html>
