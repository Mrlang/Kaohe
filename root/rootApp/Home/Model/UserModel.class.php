<?php 
	namespace Home\Model;
	use Think\Model;

	class UserModel extends Model {
		protected $user;
		public function __construct(){
			parent::__construct();
			$user = new M('user'); 
		}
		public function login($username){
			echo " $username";
			$user->select();
		}

		public function sign(){

		}

		public function getinfo(){

		}
		public function sh() {
			echo "sh";
		}
	}
			
			
		
