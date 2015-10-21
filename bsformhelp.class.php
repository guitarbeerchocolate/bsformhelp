<?php
class bsformhelp
{
	function __construct($action = NULL, $id = NULL)
	{
		
	}

	function holder($action = NULL, $id = NULL, $s = NULL, $submitlabel = NULL, $submitclass = NULL)
	{
		$output = NULL;
		$output .= '<form role="form"';
		if((!is_null($action)) || (!is_null($id)))
		{
			 $output .= ' method="POST"';
		}
		if(!is_null($action))
		{
			 $output .= ' action="'.$action.'"';
		}
		if(!is_null($id))
		{
			 $output .= ' id="'.$id.'"';
		}
		$output .= '>'.PHP_EOL;
		if(!is_array($s))
		{
			$output .= $s;	
		}
		else
		{
			foreach ($s as $field)
			{
				$output .= $field;
			}
		}
		$output .= '<button type="submit" role="button" class="btn ';
		if(!is_null($submitclass))
		{
			 $output .= $submitclass;
		}
		else
		{
			 $output .= 'btn-default';
		}
		$output .= '">';
		if(!is_null($submitlabel))
		{
			 $output .= $submitlabel;
		}
		else
		{
			$output .= 'Submit';
		}
		$output .= '</button>'.PHP_EOL;
		$output .= '</form>'.PHP_EOL;
		return $output;
	}

	function input($type = 'text', $name = 'name', $label = 'Name', $value = NULL, $placeholder = NULL)
	{
		$output = NULL;
		if(strtolower($type) !== 'hidden')
		{
			$output .= '<div class="form-group">'.PHP_EOL;
			$output .= '<label for="'.$name.'">'.$label.'</label>'.PHP_EOL;
		}

		$output .= '<input type="'.$type.'"';

		if(strtolower($type) !== 'hidden')
		{
			$output .= ' class="form-control"';
		}

		$output .= ' name="'.$name.'" id="'.$name.'"';

		if(!is_null($value))
		{
			$output .= ' value="'.$value.'"';
		}
		else
		{
			$output .= ' placeholder="'.$placeholder.'"';
		}

		$output .= ' />'.PHP_EOL;

		if(strtolower($type) !== 'hidden')
		{
			$output .= '</div><!-- .form-group -->'.PHP_EOL;
		}
		return $output;   
	}

	function checkbox($name = 'name', $label = NULL)
	{
		$output = NULL;
		$output .= '<div class="checkbox">'.PHP_EOL;
		$output .= '<label>'.PHP_EOL;
		$output .= '<input type="checkbox" name="'.$name.'" id="'.$name.'">' .$label.PHP_EOL;
		$output .= '</label>'.PHP_EOL;
		$output .= '</div><!-- .checkbox -->'.PHP_EOL;
		return $output;
	}

	function textarea($name = 'name', $label = 'Name', $value = NULL)
	{
		$output = NULL;
		$output .= '<textarea class="form-control" rows="3"';
		$output .= ' name="'.$name.'" id="'.$name.'">';
		if(!is_null($value))
		{
			$output .= $value;
		}
		$output .= '</textarea>'.PHP_EOL;
		return $output;
	}
}
?>