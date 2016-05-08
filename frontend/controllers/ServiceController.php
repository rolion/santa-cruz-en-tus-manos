<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Pointmongo;

class ServiceController extends Controller{
	const COLEGIO='colegio';
	const HOSPITAL='hospital';
	const PLAZA='plaza';

	public function actionParque(){
		set_time_limit(0);
		 ini_set('memory_limit', '-1');
		 $this->getDistrict('11','001031',self::PLAZA);
		/* $this->getDistrict('3','001031',self::PLAZA);
		 $this->getDistrict('4','001031',self::PLAZA);
		 $this->getDistrict('1','001031',self::PLAZA);
		 $this->getDistrict('2','001031',self::PLAZA);*/
		
	}
	private function getDistrict($district, $id,$type){
			$response=file_get_contents('http://200.119.197.136/datahub.svc/distrito/'.$district.'/?idclasidicador='.$id);
			
			$this->saveSearch(json_decode($response),$type);
	}
	public function actionColegio(){
		set_time_limit(0);
		 ini_set('memory_limit', '-1');
		
			 $this->getDistrict('11','80103',self::COLEGIO);
			/* $this->getDistrict('3','80103',self::COLEGIO);
			 $this->getDistrict('4','80103',self::COLEGIO);
			 $this->getDistrict('1','80103',self::COLEGIO);
			 $this->getDistrict('2','80103',self::COLEGIO);*/
			
			 $this->getDistrict('11','80104',self::COLEGIO);
			/* $this->getDistrict('3','80104',self::COLEGIO);
			 $this->getDistrict('4','80104',self::COLEGIO);
			 $this->getDistrict('1','80104',self::COLEGIO);
			 $this->getDistrict('2','80104',self::COLEGIO);*/
	}
	public function actionHospital(){
		set_time_limit(0);
		 ini_set('memory_limit', '-1');
		 	$this->getDistrict('11','851101',self::COLEGIO);
			/* $this->getDistrict('3','851101',self::COLEGIO);
			 $this->getDistrict('4','851101',self::COLEGIO);
			 $this->getDistrict('1','851101',self::COLEGIO);
			 $this->getDistrict('2','01034',self::COLEGIO);*/

			 $this->getDistrict('11','851102',self::COLEGIO);
			/* $this->getDistrict('3','851102',self::COLEGIO);
			 $this->getDistrict('4','851102',self::COLEGIO);
			 $this->getDistrict('1','851102',self::COLEGIO);
			 $this->getDistrict('2','851102',self::COLEGIO);*/

	}
	private function saveSearch($response,$type){
		
		$response=$response->{'JSONData3Result'};
		//var_dump($response);
		$count=0;
		foreach ($response as $key => $value) {
			if($count>100)
				return;
			else{
				$count++;
			}
			$point=new Pointmongo();
			$point->latitud=$value->{'Latitud'};
			$point->longitud=$value->{'Longitud'};
			$point->manzana=$value->{'Manzana'};
			$point->distrito=$value->{'distrito'};
			$point->uv=$value->{'UV_ET'};
			$point->barrio=$value->{'barrio'};
			$dir='Lado_'.$value->{'Lado'};
			switch ($value->{'Lado'}) {
				case 'A':
					$point->direccion=$value->{'Lado_A'};
					break;
				case 'B':
					$point->direccion=$value->{'Lado_B'};
					break;
				case 'C':
					$point->direccion=$value->{'Lado_C'};
					break;
				case 'D':
					$point->direccion=$value->{'Lado_D'};
					break;
				default:
					$point->direccion='';
					break;
			} 
			$point->numeropuerta=$value->{'NroPuerta'};
			$point->nombre=$value->{'NombreRef'};
			$point->actividadeconomica=$value->{'EstEconomico'};
			$point->type=$type;
			$point->save();
		}		
	}
	public function actionDistric(){
		$model = new Pointmongo();
		$model->getDistric();

		//var_dump($re);
	}
	
	public function actionIndex(){


		$response=file_get_contents('http://200.119.197.136/datahub.svc/distrito/11/?idclasidicador=70201');
		$a=json_decode($response)->{'JSONData3Result'};
	}

}