<?php
class MessagesController{
	public function indexAction(){
		include'index.php';
		}
		public function newAction(){
			
			}
	}
	$mc=new MessagesController;
	echo $mc->indexAction();

?>