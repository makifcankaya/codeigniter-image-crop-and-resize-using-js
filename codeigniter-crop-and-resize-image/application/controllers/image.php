<?php

	class IMAGE extends CI_Controller
	{

		function index()
		{
			$this->load->view('image');
		}

		function imageAdd()
		{
			$data = $_POST['image'];

       		 list($type, $data) = explode(';', $data);
       		 list(, $data)      = explode(',', $data);

        	$data = base64_decode($data);
        	$imageName = time().'.png';

        	file_put_contents('assest\images\ '.$imageName, $data); //it will add that path...   
      	    echo 'done';
		}
		
	}

?>