<?php


class PgSql_Query implements IQuery, IBuilder_Query {
    //---------------IQuery methods-------------//
    //------------------------------------------//
    public function Q_select() {
        return new Select_PgSql();
    }
    public function Q_insert() {
        return new Select_PgSql();
    }

    //---------------IBuilder_Query methods-------------//
    //--------------------------------------------------//

    //Select
    public function select($select){
        echo "SELECT " . $select ;
    }
    public function from($from){
        echo " FROM " . $from;
    }
    public function where($where){
        echo " WHERE " . $where;
    }
    public function limit($limit){
        echo " LIMIT " . $limit;
    }

    //Insert
    public function insert($insert) {
        echo "INSERT INTO" . " " . $insert;
    }
    public function set($set) {
        echo " SET " . $set;
    }
}