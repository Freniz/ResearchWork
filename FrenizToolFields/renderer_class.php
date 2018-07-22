<?php
class Renderer{

public function text($data)
{
	$template = '<div id="'.$data->id.'" data-name= "'.$data->props->dataName.'" class="'.$data->props->dataName.' form-group">
		            <label  class="col-sm-2 control-label">'.$data->props->label.'</label>
		            <div class="col-sm-10">
		              <input class="form-control" id="Input" type="text">
		            </div>
		          </div>';

    return $template;

}

public function textarea($data)
{
	// $label = $data['label'];
	$template = '<div id="'.$data->id.'" data-name= "'.$data->props->dataName.'" class="'.$data->props->dataName.' form-group">
		            <label class="col-sm-2 control-label">'.$data->props->label.'</label>
		            <div class="col-sm-10">
              			<textarea class="form-control" rows="5" id="textarea"></textarea>
		            </div>
		          </div>';

    return $template;

}

public function password($data)
{
	// $label = $data['label'];
	$template = '<div id="'.$data->id.'" data-name= "'.$data->props->dataName.'" class="'.$data->props->dataName.' form-group">
		            <label class="col-sm-2 control-label">'.$data->props->label.'</label>
		            <div class="col-sm-10">
		              <input class="form-control" id="Input" type="password">
		            </div>
		          </div>';

    return $template;

}

public function select($data)
{
	// $label = $data['label'];
	foreach ($data->props->listOfValues as $key => $value) {
		$listOfValues .= '<option value="'.$value->value.'">'.$value->label.'</option>';
	}
	$template = '<div id="'.$data->id.'" data-name= "'.$data->props->dataName.'" class="'.$data->props->dataName.' form-group">
		            <label class="col-sm-2 control-label">'.$data->props->label.'</label>
		            <div class="col-sm-10">
		              <select class="form-control" id="sell">
		                '.$listOfValues.'
		              </select>
		            </div>
		          </div>';

    return $template;

}

public function radio($data)
{
	foreach ($data->props->listOfValues as $key => $value) {
		$listOfValues .= '<label class="radio-inline"><input type="radio" value="'.$value->value.'">'.$value->label.'</label>';
	}
	$template = '<div id="'.$data->id.'" data-name= "'.$data->props->dataName.'" class="'.$data->props->dataName.' form-group">
		            <label class="col-sm-2 control-label">'.$data->props->label.'</label>
		            <div class="col-sm-10">
		            '.$listOfValues.'
		            </div>
		          </div>';

    return $template;

}

public function checkbox($data)
{
	foreach ($data->props->listOfValues as $key => $value) {
		$listOfValues .= '<label class="checkbox-inline"><input type="checkbox" value="'.$value->value.'">'.$value->label.'</label>';
	}
	$template = '<div id="'.$data->id.'" data-name= "'.$data->props->dataName.'" class="'.$data->props->dataName.' form-group">
		            <label class="col-sm-2 control-label">'.$data->props->label.'</label>
		            <div class="col-sm-10">
		            '.$listOfValues.'
		            </div>
		          </div>';

    return $template;

}

public function richtext($data)
{
	// $label = $data['label'];
	$script = '<script src="js/tinymce/tinymce.min.js"></script>
				<!-- <script src="js/tinymce/plugins/table/plugin.min.js"></script> -->
				<script src="js/tinymce/plugins/paste/plugin.min.js"></script>
				<script>
					tinymce.init({
					  selector: "textarea#'.$data->id.'",
					  height: 500,
					  theme: "modern",
					  plugins: [
					    "advlist autolink link image lists charmap print preview hr anchor pagebreak",
						"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
						"save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern codesample"
					  ],
					  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table codesample"
					});
						
				</script>';

	$template = '<div id="'.$data->id.'" data-name= "'.$data->props->dataName.'" class="'.$data->props->dataName.' form-group">
		            <label class="col-sm-2 control-label">'.$data->props->label.'</label>
		            <div class="col-sm-10">
              			<textarea id="'.$data->id.'" class="form-control" rows="5" id="textarea"></textarea>
		            </div>
		          </div>';

    return $script.$template;

}




}