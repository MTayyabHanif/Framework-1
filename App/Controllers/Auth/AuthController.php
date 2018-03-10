<?php

/**
 * SilverEngine  - PHP MVC framework
 *
 * @package   SilverEngine
 * @author    SilverEngine Team
 * @copyright 2015-2017
 * @license   MIT
 * @link      https://github.com/SilverEngine/Framework
 */

namespace App\Controllers\Auth;

use Silver\Core\Bootstrap\Facades\Request;
use Silver\Core\Controller;
use Silver\Http\Session;
use Silver\Http\Validator;
use Silver\Http\View;

class AuthController extends Controller
{
    private $model_name = false;
    private $table = false;

    public function login()
    {
        return View::make('auth.login');
    }

    public function register()
    {

        return View::make('auth.register');

    }

    public function try_login()
    {
        $req = Request::all();



        $val = Validator::check($req, [
           'name' => 'min:50',
           'title' => 'min:15',
        ]);

        if(Validator::pass()){
            dd('meet the conditions');
        }
        else{
            Session::set('errors', 'you dont have enough characters...');
        }
        ndd($val, true);
        dd($req, true);

        return View::make('test.index');
    }

}
