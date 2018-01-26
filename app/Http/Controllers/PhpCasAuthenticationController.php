<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpCAS;

class PhpCasAuthenticationController extends Controller
{
  
  public function __construct(){
    phpCAS::client(CAS_VERSION_2_0,'autenticacao.ufba.br',443,'/ca');
    phpCAS::setNoCasServerValidation();  
  }   
  
    public function index()
    {         
      if (phpCAS::isAuthenticated())
      {         
        return view('phpcas');        
      }
      else{
        PhpCasAuthenticationController::login();
      }     
    }
 
    public function login()
    {
      if (!phpCAS::isAuthenticated()){
        phpCAS::forceAuthentication();        
      }      
    }
  
    public function logoutfunction()
    {
      if (phpCAS::isAuthenticated()){
         phpCAS::logout();        
      }
      else{
        PhpCasAuthenticationController::login();
      }
    }
    
    public function infophpcas(){
       
      if (!phpCAS::isAuthenticated()){    
        $Verif = 'Login';
        return $Verif;
      }
      else{
        $Verif = 'Usuário: ' . phpCAS::getUser();
        return $Verif;
      }
    }
}
