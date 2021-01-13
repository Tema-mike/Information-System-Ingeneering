<?php


class Insert_MySql implements IInsert {
    public function buildInsert($query) {
        $result = $query->insert();
        $result .= $query->set();

        echo $result;
    }
}