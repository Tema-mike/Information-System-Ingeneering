<?php


class Select_PgSql implements ISelect {

    public function buildSelect($query) {
        $result = $query->select();
        $result .= $query->from();
        $result .= $query->where();
        $result .= $query->limit();

        echo $result;
    }
}