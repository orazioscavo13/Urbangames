<?php

function increment_tournament_state($id){
    $db=  connect_urbangames();
    $db->query("LOCK TABLES torneo{write}");
    $id=(int)$id;
    $query=$db->prepare("UPDATE torneo SET state = state+1 WHERE id = ?");
    $query->execute(array($id));
    $db->query("UNLOCK TABLES");
}

function decrement_tournament_state($id){
    $db=  connect_urbangames();
    $db->query("LOCK TABLES torneo{write}");
    $id=(int)$id;
    $query=$db->prepare("UPDATE torneo SET state = state-1 WHERE id = ?");
    $query->execute(array($id));
    $db->query("UNLOCK TABLES");
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

