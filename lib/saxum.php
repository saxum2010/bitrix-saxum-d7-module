<?php

namespace Saxum\D7;

use Saxum\D7\DataTable;

class Saxum{

    public static function get() {
        $result = DataTable::getList(
                        array(
                            'select' => array('*')
        ));
        $row = $result->fetch();
        print "<pre>"; print_r($row); print "</pre>";
        return $row;
    }

}
