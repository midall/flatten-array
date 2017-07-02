<?php
$input_array = array( '8', array( '2' ), array( array( '9' ), array( '5' ) ), array( array( array( '11' ), '7', '81' ) ) );

/**
 * Function to find recursively array elements and convert them into a flatten array
 * 
 * @param <array> $main_array
 * @param <array> $return
 * 
 */
function flatten_array( $main_array, $final_arr )
{
	for( $i = 0; $i <= count( $main_array ); $i++ )
	{
		if( is_array( $main_array[$i] ) )
		{
			$final_arr = flatten_array( $main_array[$i], $final_arr );
		}
		else
		{
			if( isset( $main_array[$i] ) )
			{
				$final_arr[] = $main_array[$i];
			}
		}
	}
	return $final_arr;
}

$final_array = flatten_array( $input_array, array() );

?>
