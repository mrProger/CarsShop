<?php

$router->get("/", "PageController::index");
$router->get("login", "PageController::login");
$router->get("registration", "PageController::registration");
$router->get("news", "PageController::news");
$router->get("posts", "PageController::posts");
$router->get("car1", "PageController::car1");
$router->get("car2", "PageController::car2");
$router->get("car3", "PageController::car3");
$router->get("car4", "PageController::car4");
$router->get("car5", "PageController::car5");
$router->get("car6", "PageController::car6");
$router->get("car7", "PageController::car7");
$router->get("car8", "PageController::car8");
$router->get("car9", "PageController::car9");
$router->get("car10", "PageController::car10");
$router->get("car11", "PageController::car11");
$router->get("car12", "PageController::car12");
$router->get("cars", "PageController::cars");
$router->get("company", "PageController::company");
$router->get("contacts", "PageController::contacts");
$router->get("feedback", "PageController::feedback");
$router->get("admin", "PageController::admin");
$router->get("admin/cars", "PageController::adminCars");
$router->get("admin/feedback", "PageController::adminFeedback");
$router->get("admin/news", "PageController::adminNews");

$router->post("api/v1/login", "AuthController::login");
$router->post("api/v1/registration", "AuthController::registration");
$router->post("api/v1/logout", "AuthController::logout");
$router->post("api/v1/isAuthorized", "AuthController::isAuthorized");
$router->post("api/v1/isAdmin", "AuthController::isAdmin");
$router->post("api/v1/addFeedback", "LogicController::addFeedback");
$router->post("api/v1/getAllFeedbacks", "LogicController::getAllFeedbacks");
$router->post("api/v1/createOrder", "LogicController::createOrder");
$router->post("api/v1/getOrders", "LogicController::getOrders");
$router->post("api/v1/addPost", "PostController::addPost");
$router->post("api/v1/getPosts", "PostController::getPosts");
$router->post("api/v1/getAllPosts", "PostController::getAllPosts");
$router->post("api/v1/getPostById", "PostController::getPostById");
$router->post("api/v1/getLastPostId", "PostController::getLastPostId");