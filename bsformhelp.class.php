<?php
class bsformhelp
{
	function __construct($action = NULL, $id = NULL)
	{
		echo '<form role="form"';
		if((!is_null($action)) || (!is_null($id)))
		{
			 echo ' method="POST"';
		}
		if(!is_null($action))
		{
			 echo ' action="'.$action.'"';
		}
		if(!is_null($id))
		{
			 echo ' id="'.$id.'"';
		}
		echo '>'.PHP_EOL;
	}

	function input($type = 'text', $name = 'name', $label = 'Name', $value = NULL, $placeholder = NULL)
	{
		if(strtolower($type) !== 'hidden')
		{
			echo '<div class="form-group">'.PHP_EOL;
			echo '<label for="'.$name.'">'.$label.'</label>'.PHP_EOL;
		}

		echo '<input type="'.$type.'"';

		if(strtolower($type) !== 'hidden')
		{
			echo ' class="form-control"';
		}

		echo ' name="'.$name.'" id="'.$name.'"';

		if(!is_null($value))
		{
			echo ' value="'.$value.'"';
		}
		else
		{
			echo ' placeholder="'.$placeholder.'"';
		}

		echo ' />'.PHP_EOL;

		if(strtolower($type) !== 'hidden')
		{
			echo '</div><!-- .form-group -->'.PHP_EOL;
		}    
	}

	function checkbox($name = 'name', $label = NULL)
	{
		echo '<div class="checkbox">'.PHP_EOL;
		echo '<label>'.PHP_EOL;
		echo '<input type="checkbox" name="'.$name.'" id="'.$name.'">' .$label.PHP_EOL;
		echo '</label>'.PHP_EOL;
		echo '</div><!-- .checkbox -->'.PHP_EOL;
	}

	function textarea($name = 'name', $label = 'Name', $value = NULL)
	{
		echo '<textarea class="form-control" rows="3"';
		echo ' name="'.$name.'" id="'.$name.'">';
		if(!is_null($value))
		{
			echo $value;
		}
		echo '</textarea>'.PHP_EOL;
	}

	function submit($label = NULL, $class = NULL)
	{
		echo '<button type="submit" role="button" class="btn ';
		if(!is_null($class))
		{
			 echo $action;
		}
		else
		{
			 echo 'btn-default';
		}
		echo '">';
		if(!is_null($label))
		{
			 echo $label;
		}
		else
		{
			echo 'Submit';
		}
		echo '</button>'.PHP_EOL;
		echo '</form>'.PHP_EOL;
	}
}
?>