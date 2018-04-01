<?php

function getAllTasks()
{
$db = new PDO("mysql:host=localhost;dbname=potok01", "root", "");

    $statement = $db->query("SELECT * FROM tasks");

    $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $tasks;
}

function getOneTask($id) 
{
    $db = new PDO("mysql:host=localhost;dbname=potok01", "root", "");

    $statement = $db->prepare("SELECT * FROM tasks WHERE id=:id");

    $statement->bindParam("id", $id);
    
    $statement->execute();

    $task = $statement->fetch(PDO::FETCH_ASSOC);

    return $task;
}

function store($title)
{
    $db = new PDO("mysql:host=localhost;dbname=potok01", "root", "");

    $statement = $db->prepare("INSERT INTO tasks (title) VALUES (:title)");

    $statement->bindParam("title", $title);

    $statement->execute();

    header("Location: /");
}

function update($id, $title)
{
    $db = new PDO("mysql:host=localhost;dbname=potok01", "root", "");

    $statement = $db->prepare("UPDATE tasks SET title=:title WHERE id=:id");

    $statement->bindParam("title", $title);
    $statement->bindParam("id", $id);

    $statement->execute();

    header("Location: /");
}

function delete($id)
{
    $db = new PDO("mysql:host=localhost;dbname=potok01", "root", "");

    $statement = $db->prepare("DELETE FROM tasks WHERE id=:id");
    $statement->bindParam("id", $id);
    $statement->execute();

    header("Location: /");
}