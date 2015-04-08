<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" ng-app="bookpeace">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bookpace</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="">
        <!-- build:css css/all.css -->
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <!-- endbuild -->
        <script type="text/javascript" src="lib/angularjs/angular.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </head>
    <body ng-controller="bookpeaceController">
        <span ng-include="'templates/include/navbar.html'"></span>
    </body>
</html>