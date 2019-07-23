<?php
/**
 * Created by PhpStorm.
 * User: FirsInDaFire
 * Date: 23.07.2019
 * Time: 19:19
 */
class FirsApi
{
    public $tokens;
    public $token;
    public $action;
    public function __construct($token, $action)
    {
        $this->tokens = ['dimon','nastya','roma','danil','slava', 'max'];
        $this->token = $token;
        $this->action = $action;
    }

    public  function checkToken()
    {
        return in_array($this->token, $this->tokens);
    }

    public function returnResponse()
    {
        switch ($this->action) {
            case 'getCars':
                return $this->actionGetCars();
                break;
            case 'getCountries':
                return $this->actionGetCountries();
                break;
            case 'getPlayers':
                return $this->actionGetPlayers();
                break;
            case 'getDrugs':
                return $this->actionGetDrugs();
                break;
        }
    }

    private function actionGetPlayers()
    {
        return ['1'=>'Pit Sumpras', '2' => 'Rafael Nadal', '3' => 'Roger Federer'];
    }

    private function actionGetCars()
    {
        return ['1'=>'Toyota Apex', '2' => 'Volkswagen Polo', '3' => 'Audi A8'];
    }

    private function actionGetCountries()
    {
        return ['1'=>'Ukraine', '2' => 'USA', '3' => 'Germany'];
    }
    private function actionGetDrugs()
    {
        return ['1'=>'Cannabis', '2' => 'MDMA', '3' => 'NBOM'];
    }
}