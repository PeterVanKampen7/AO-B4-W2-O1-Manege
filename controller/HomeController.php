<?php
require(ROOT . "model/HomeModel.php");

function index(){
	render("home/index");	
}

function user(){
	render("home/user");
}

function storeUser(){
    //Maak een nieuwe bebruiker aan met de data uit het formulier en sla deze op in de database
	$data = ["name" => trim_input($_POST['name']), "adress" => trim_input($_POST['adress']), "phone" => trim_input($_POST["phone"])];
    createUser($data);
    //Stuur de gebruiker naar index
    redirect("userList");
}

function userList(){
	render("home/userList", getAllUsers());
}

function editUser($id){
	render("home/userEdit", getUser($id));
}

function userEdit(){
	$data = ["id" => trim_input($_POST["id"]), "name" => trim_input($_POST['name']), "adress" => trim_input($_POST['adress']), "phone" => trim_input($_POST["phone"])];
    changeUser($data);
    //Stuur de gebruiker naar index
    redirect("userList");
}

function deleteUser($id){
	destroyUser($id);
	redirect("userList");
}

function horse(){
	render("home/horse");
}

function horseList(){
	render("home/horseList");
}

function reservation(){
	render("home/reservation");
}

function reservationList(){
	render("home/reservationList");
}

function redirect($location){
    header("Location: ". URL . 'home/' . $location);
}