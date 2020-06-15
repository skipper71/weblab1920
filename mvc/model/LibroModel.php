<?php

include_once 'config.php';

function getLibroById($id){
    
    global $pdo;

    $stmt = $pdo->query("SELECT * FROM libri_miguel WHERE ID = ".$id);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $results = $stmt->fetchAll();

    $return = null;
    
    foreach ($results as $result){
        $return = [];
        $return["id"]       = $result["ID"];
        $return["code"]     = $result["Codice"];       
        $return["title"]    = $result["Titolo"];       
        $return["author"]   = $result["Autore"];       
        $return["editor"]   = $result["Editore"];       
        $return["pubdate"]  = $result["DataPubblicazione"];                
    }
    
    return $return;
    
}

function getLibroByRandom(){

    global $pdo;

    $stmt = $pdo->prepare('SELECT * FROM libri_miguel ORDER BY rand() LIMIT 1');
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $results = $stmt->fetchAll();

    $return = null;
    
    foreach ($results as $result){
        $return = [];
        $return["id"]       = $result["ID"];
        $return["code"]     = $result["Codice"];       
        $return["title"]    = $result["Titolo"];       
        $return["author"]   = $result["Autore"];       
        $return["editor"]   = $result["Editore"];       
        $return["pubdate"]  = $result["DataPubblicazione"];                
    }
    
    return $return;
    
}