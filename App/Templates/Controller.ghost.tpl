<?php echo '<?php'; ?>

namespace App\Controllers;

use Silver\Core\Controller;
use Silver\Http\View;

/**
* {{{$name}}} controller
*/
class {{{ucfirst($name)}}}Controller extends Controller
{
    public function get()
    {
        echo "Welcome in {{$name}} controller. This file is on App/Controllers/";
        //return View::make('');
    }

    public function post()
    {
        echo 'Methode: post';
    }

    public function put()
    {
        echo 'Methode: put';
    }

    public function delete()
    {
        echo 'Methode: delete';
    }
}
