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

function storeHorse(){
	//Maak een nieuwe bebruiker aan met de data uit het formulier en sla deze op in de database
	$data = ["name" => trim_input($_POST['name']), "breed" => trim_input($_POST['breed']), "age" => trim_input($_POST["age"]), "jump" => trim_input($_POST["jump"])];
    createHorse($data);
    //Stuur de gebruiker naar index
    redirect("horse");
}

function storePony(){
	//Maak een nieuwe bebruiker aan met de data uit het formulier en sla deze op in de database
	$data = ["name" => trim_input($_POST['name']), "breed" => trim_input($_POST['breed']), "age" => trim_input($_POST["age"]), "height" => trim_input($_POST["height"])];
    createPony($data);
    //Stuur de gebruiker naar index
    redirect("horse");
}

function horseList(){
	render("home/horseList", getAllHorses());
}

function deleteHorse($id){
	destroyHorse($id);
	redirect("horseList");
}

function editHorse($id){
	render("home/horseEdit", getHorse($id));
}

function horseEdit(){
	$data = ["id" => $_POST['id'],"name" => trim_input($_POST['name']), "breed" => trim_input($_POST['breed']), "age" => trim_input($_POST["age"]), "jump" => trim_input($_POST["jump"]), "height" => trim_input($_POST["height"])];
	changeHorse($data);

	redirect("horseList");
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