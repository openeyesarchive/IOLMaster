<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 1/28/14
 * Time: 5:04 PM
 * To change this template use File | Settings | File Templates.
 */

class EyeMeasurements {
	public $AxialLength;
	public $OpticalACD;
	public $TargetRefraction;
	public $AverageKs;

	public function GetKsForIOLCalculations()
	{
		$ks = new Ks();
		$ks->AverageKs = $this->AverageKs;
		return $this->ks;
	}
}
