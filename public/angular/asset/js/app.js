(function() {
  var app = angular.module('bibleApp', []);


  app.controller('BibleController', ['$http', function($http){
    var bible = this;
    bible.data = [];
    $http.get('/bible/book-api').success(function(data){
      bible.data = data;
    });

  }]);

})();
