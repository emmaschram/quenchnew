var ImageApp = angular.module("ImageApp", ["ngRoute"]);

ImageApp.config([
  "$routeProvider", "$locationProvider",
  function ($routeProvider, $locationProvider) {
    
    $locationProvider.html5Mode(true);
    $routeProvider.when(
      "/insertimage", {
        templateUrl: "view/insertimage.html"
      }
    ).when(
      "/imageinfo", {
        templateUrl: "view/imageinfo.html"
      }
    ).when(
      "/feed", {
        templateUrl: "view/feed.html"
      }
    ).when(
      "/login", {
        templateUrl: "view/login.html"
      }
    ).when(
      "/password", {
        templateUrl: "view/password.html"
      }
    ).when(
      "/user", {
        templateUrl: "view/user.html"
      }
    ).when(
      "/aboutimage", {
        templateUrl: "view/aboutimage.html"
      }
    ).when(
      "/userfeed", {
        templateUrl: "view/userfeed.html"
      }
    ).when(
      "/comments", {
        templateUrl: "view/editcomments.html"
      }
    ).otherwise(
      {redirectTo: "/login"}
    );
  }
]);