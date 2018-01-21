<?php
/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is an override of function in the original order.php class
* Made by Roger Ek from instructions in nemops:
* http://nemops.com/prestashop-replace-order-references-with-ids/#.WlZgs6jiYdU
*/
Class Order extends OrderCore
{
 public static function generateReference()
{
    $last_id = Db::getInstance()->getValue('
        SELECT MAX(id_order)
        FROM '._DB_PREFIX_.'orders');
    return str_pad((int)$last_id + 1, 6, '000000', STR_PAD_LEFT);
 
}
}
