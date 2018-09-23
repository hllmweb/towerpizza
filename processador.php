<?php
    session_start();
    if(!isset($_SESSION["carrinho"])){
        $_SESSION["carrinho"] = array();
    }

    function array_retirar_a_posicao_informada($array, $pos){
        if(array_key_exists($pos, $array)){
            unset($array[$pos]);
        }
            return $array;
    }
   
    if(isset($_GET["add_carrinho"])):
        $id_item            = $_POST["id_item"];
        $produto_titulo     = $_POST["produto_titulo"];
        $qtd                = $_POST["qtd"];
        $tamanho            = $_POST["tamanho"][0];
        $valor_item         = $_POST["valor_item"];
        $valor_item_atual   = $_POST["valor_item_atual"];
        $obs                = $_POST["obs"];

        /*if(!isset($_SESSION["carrinho"][$id_item])){
            $_SESSION["carrinho"][$id_item] = 1;
        }else{
            $_SESSION["carrinho"][$id_item] += 1;
        }*/
        
        $array_dados = array("id_item" => $id_item, "produto_titulo" => $produto_titulo, "qtd" => $qtd, "tamanho" => $tamanho,"valor_item_atual" => $valor_item_atual, "obs" => $obs);
        
        array_push($_SESSION["carrinho"],$array_dados);
        echo json_encode($_SESSION["carrinho"]);


        /*foreach($_SESSION["carrinho"] as $list):
           echo $list;
        endforeach;*/

    endif;


    if(isset($_GET["del_carrinho"])):
       $id_item = intval($_POST["id_item"]);

        // $arr = array_retirar_a_posicao_informada($_SESSION["carrinho"], $id_item);
        // print_r($arr);
        
        //array_splice($_SESSION["carrinho"],$id_item,count($_SESSION["carrinho"]));
        //unset($_SESSION["carrinho"][$id_item]);
        //print_r($_SESSION["carrinho"]);
        // echo json_encode($_SESSION["carrinho"]);

       if(isset($_SESSION["carrinho"])):
            unset($_SESSION["carrinho"][$id_item]);
            //array_splice($_SESSION["carrinho"],$id_item,1);
            echo json_encode(array_values($_SESSION["carrinho"]));
            
       endif;
    
    

    endif;
    
?>