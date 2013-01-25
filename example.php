<?php
// include our class, unless you are using an autoloader?
include "abnlookup.class.php";

$abn_search_string = "11111111111"; // you can assign your post/get var or abn string here
 
try{
    $abnlookup = new abnlookup($abn_guid);
    try{
        $result = $abnlookup->searchByAbn($abn_search_string); 
 
        // display all results
        echo "<pre>";
        print_r($result);
        echo "</pre>";
 
        // also display by variables using object notation.
        echo "<pre>";
        $result->ABRPayloadSearchResults->response;
        echo "</pre>";
 
    } catch    (Exception $e){
        throw $e;
    }
 
} catch(Exception $e){
    echo $e->getMessage();
}
