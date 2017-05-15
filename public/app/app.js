var app = angular.module('employeeRecords', []);

app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
});

app.constant('API_URL', 'http://localhost:8000/api/v1/');

const APP_MODULE = 'Employees Database';
