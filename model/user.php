<?php
class user{
	private $pseudo;
	private $fullname ;
	private $password ;
	private $telephone; 
    private $email;
	private $role;
	
	function __construct($pseudo,$fullname,$password,$telephone,$email,$role)
	{
		$this->pseudo=$pseudo;
		$this->fullname=$fullname;
		$this->password=$password;
		$this->telephone=$telephone;
		$this->email=$email;
		$this->role=$role;

	}

	function getpseudo(){return $this->pseudo;}
	function getfullname(){return $this->fullname;}
    function getpassword(){return $this->password;}
    function gettelephone(){return $this->telephone;}
	function getemail(){return $this->email;}
	function getrole(){return $this->role;}


	public function set_pseudo($pseudo)
		{
			$this->pseudo = $pseudo;
		}
	public function set_fullname($fullname)
		{
			$this->nom = $nom;
		}
	public function set_password($password)
		{
			$this->password = $password;
		}
	public function set_telephone($telephone)
		{
			$this->telephone = $telephone;
		}
	public function set_email($email)
		{
			$this->email = $email;
		}
	public function set_role($role)
		{
			$this->role = $role;
		}
}
?>