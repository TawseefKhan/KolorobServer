<?php

// My common functions
function join_table($parent, $joins){
    $arr = array();
    $i = 0;

    $nodes = $parent::get();


    $i=0;
    foreach($nodes as $node)
    {

        $arr[$i] = $node;

        foreach ($joins as $join) {
            $arr[$i][$join["variable"]] = $join["node"]::where($join["to"], $node->$join["from"])->get();
        }

        $i++;
    }
    return $arr;
}
