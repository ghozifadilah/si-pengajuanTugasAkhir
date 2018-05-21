<?php
class temp_model extends Model {
	function temp_model()
	{
		parent: :Model();
	}
	function getProducts()
	{
		return $this -> db -> query ->("SELECT * FROM AA_PRODUCTS");
	}
}
?>