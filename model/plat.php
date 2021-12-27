<?php

class plat
{
	private $id ;
	private $nom ;
	private	$prix ;
	private $description;
	private $photo ;


	function __construct($nom,$prix,$description,$photo)
	{
		$this->nom=$nom;
		$this->prix=$prix;
		$this->description=$description;
		$this->photo=$photo;
	}
	
	function getid()
	{
		return $this->id;
	}
    function getnom()
    {
    	return $this->nom;
    }
    function getprix()
    {
    	return $this->prix;
    }
    function getdescription()
    {
    	return $this->description;
    }
    function getphoto()
    {
    	return $this->photo;
    }


	public function set_id($id)
		{
			$this->id = $id;
		}
	public function set_nom($nom)
		{
			$this->nom = $nom;
		}
	public function set_prix($prix)
		{
			$this->prix = $prix;
		}
	public function set_description($description)
		{
			$this->description = $description;
		}
	public function set_photo($photo)
		{
			$this->photo = $photo;
		}
	

}

?>
