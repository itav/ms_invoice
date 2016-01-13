<?php
/**
 * Created by PhpStorm.
 * User: Magdalena
 * Date: 2016-01-12
 * Time: 14:18
 */

namespace Itav\Invoice;


class InvoiceController
{
    public function helloAction()
    {
        return new Response(phpinfo());
    }
}