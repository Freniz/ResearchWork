<?php
require_once "renderer_class.php";

class RendererController{

	public function rendering()
	{
		$json_data = json_decode( file_get_contents('sample.json') );
		foreach ($json_data as $k => $v) {
			if($k == 'formName')
				$formname = $v;
			if($k == 'sections')
				$sections = $v;
		}
		$header = '<h1>'.$formname.'</h1>';
		print_r($header);
		foreach ($v as $val_content) {
			
			foreach ($val_content as $key => $val_data) {

				if($key == 'fields'){
					foreach ($val_data as $val_field) {
						print_r($this->getdata($val_field));
						
					}
				}
			}
		}

	}

	public function getData( $param ){
		$input = new Renderer();
		switch ( $param->type ) {
			case 'text':
				return $input->text($param);
				break;
			case 'textarea':
				return $input->textarea($param);
				break;
			case 'password':
				return $input->password($param);
				break;
			case 'select':
				return $input->select($param);
				break;
			case 'radio':
				return $input->radio($param);
				break;
			case 'checkbox':
				return $input->checkbox($param);
				break;
			case 'richText':
				return $input->richtext($param);
				break;

		}
	}

}




