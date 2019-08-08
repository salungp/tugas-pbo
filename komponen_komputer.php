<?php
class keyboard
{
	public $merk;
	public $warna;
	public $harga;
	public $max_press;
	public $type;

	public function setMerk($value = null)
	{
		if (is_null($value))
		{
			$this->merk = 'Default';
		} else
		{
			$this->merk = '<b>'.ucfirst($value).'</b>';
		}
	}

	public function setWarna($value = null)
	{
		if (is_null($value))
		{
			$this->warna = 'Default';
		} else
		{
			$this->warna = '<b>'.ucfirst($value).'</b>';
		}
	}

	public function setHarga($value = null)
	{
		if (is_null($value))
		{
			$this->harga = 'Default';
		} else 
		{
			$this->harga = '<b>Rp.'.$value.'</b>';
		}
	}

	public function setMP($value = null)
	{
		if (is_null($value))
		{
			$this->max_press = 'Default';
		} else
		{
			$this->max_press = '<b>'.ucfirst($value).'</b>';
		}
	}

	public function setType($value = null)
	{
		if (is_null($value))
		{
			$this->type = 'Default';
		} else
		{
			$this->type = '<b>'.ucfirst($value).'</b>';
		}
	}

	public function cetak()
	{
		echo '<h2>Keyboard</h1>'.
			 'Merk : '.$this->merk.'<br>'.
			 'Warna : '.$this->warna.'<br>'.
			 'Harga : '.$this->harga.'<br>'.
			 'Maximal ketik : '.$this->max_press.'<br>'.
			 'Type : '.$this->type.'<br><br>';

	}
}

$logitech = new keyboard();
$logitech->setMerk('logitech');
$logitech->setWarna('putih');
$logitech->setHarga(900000);
$logitech->setMP('2 juta');
$logitech->setType('wireles');
$logitech->cetak();

class mouse{

	var $merk;
	var $harga;
	var $warna;

	public function setmerk($merk=''){
		$this->merk=$merk;
	}
	public function setharga($harga=''){
		$this->harga=$harga;
	}
	public function setwarna($warna=''){
		$this->warna=$warna;
	}
	public function cetak(){
		echo 'merk:'.$this->merk;
		echo 'harga:'.$this->harga;
		echo 'warna:'.$this->warna;
	}
}
$komputer=new mouse();
$komputer->setmerk('lg');
$komputer->setharga('2000');
$komputer->setwarna('putih');
$komputer-> cetak ();


class flashdisk
{
	public $merk;
	public $harga;
	public $warna;
	public $sinyal;

	public function setMerk($value = null)
	{
		$this->merk = $value;
	}

	public function setHarga($value = null)
	{
		if (is_int($value))
		{
			$this->harga = $value;
		} else {
			$this->harga = intval($value);
		}
	}

	public function setWarna($value)
	{
		$this->warna = $value;
	}

	public function setSinyal($value)
	{
		$this->sinyal = $value;
	}

	public function cetak()
	{
		echo '<h2>Flashdisk</h2>'.
			 'Merk : '.$this->merk.'<br>'.
			 'Harga : Rp.'.$this->harga.'<br>'.
			 'Warna : '.$this->warna.'<br>'.
			 'Sinyal : '.$this->sinyal.'<br>';
	}
}

$flashdisk = new flashdisk();
$flashdisk->setMerk('smartfren');
$flashdisk->setHarga(400000);
$flashdisk->setWarna('hitam');
$flashdisk->setSinyal('4G');
$flashdisk->cetak();

class monitor
{
	var $merk;
	var $ukuran;
	var $harga;
	var $berat;

	public function setMerk($merk='')
	{
		$this->merk=$merk;
	}

	public function setUkuran($ukuran='')
	{
		$this->ukuran=$ukuran;
	}

	public function setHarga($harga='')
	{
		$this->harga=$harga;
	}

	public function setBerat($berat='')
	{
		$this->berat=$berat;
	}

	public function cetak()
	{
		echo 'Monitor';
		echo 'Merk :'.$this->merk;
		echo 'Ukuran : '.$this->ukuran;
		echo 'Harga : '.$this->harga;
		echo 'Berat : '.$this->berat;
	}
}

$monitor=new monitor();
$monitor->setMerk('LG');
$monitor->setUkuran('400 Inc');
$monitor->setHarga(4000000);
$monitor->setBerat('2 KG');
$monitor->cetak();