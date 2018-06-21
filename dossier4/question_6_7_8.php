Question 6 :
<?php 

/**
 * summary
 */
class Restaurant
{
   private $_id;
   private $_lat;
   private $_lng;
   private $_nomRestaurant;

    public function __construct($id,$lat,$lng,$nomRestaurant)
    {
    	$this->_id=$id;
    	$this->_lat=$lat;
    	$this->_lng=$lng;
    	$this->_nomRestaurant=$nomRestaurant;
        
    }
    public function  getId(){

    	return $this->_id;
    }
     public function  set($id){

    	 $this->_id=$id;
    }

...
  public  function  __destruct(){

  }
}
 ?>
 question 7 :
 $restaurant1= new Restaurant(...,...,...,....);


 question 8 :
 