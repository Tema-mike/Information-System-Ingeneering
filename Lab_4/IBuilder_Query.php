<?php

interface IBuilder_Query {
    public function select($select);
    public function from($from);
    public function where($where);
    public function limit($limit);

    public function insert($insert);
    public function set($set);
}