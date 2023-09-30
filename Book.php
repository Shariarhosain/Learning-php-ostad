<?php
class Book{
public $isbn;
public $bookTitle;
public  $authorName;
public $price;
public $availableQuantity;


public function __construct($isbn,$bookTitle,$authorName,$price,$availableQuantity){
    $this->isbn=$isbn;
    $this->bookTitle=$bookTitle;
    $this->authorName=$authorName;
    $this->price=$price;
    $this->availableQuantity=$availableQuantity;
}

public function  setIsbn($isbn){
    $this->isbn=$isbn;

}
public function  setBookTitle($bookTitle){
    $this->bookTitle=$bookTitle;

}
public function  setAuthorName($authorName){
    $this->authorName=$authorName;

}
public function  setPrice($price){
    $this->price=$price;
}
public function  setAvailableQuantity($availableQuantity){
    $this->availableQuantity=$availableQuantity;
}

public function  getIsbn(){
    return $this->isbn;

}
public function  getBookTitle(){
    return $this->bookTitle;

}
public function  getAuthorName(){
    return $this->authorName;

}
public function  getPrice(){
    return $this->price;
}

public function  getAvailableQuantity(){
    return $this->availableQuantity;
}

public function addQuantity($amount){
    $this->availableQuantity=$this->availableQuantity+$amount;
}
public function sellQuantity($amount){
    $this->availableQuantity=$this->availableQuantity-$amount;
}
public function showDetails(){
    echo "ISBN: ".$this->isbn."<br>";
    echo "Book Title: ".$this->bookTitle."<br>";
    echo "Author Name: ".$this->authorName."<br>";
    echo "Price: ".$this->price."<br>";
    echo "Available Quantity: ".$this->availableQuantity."<br>";
}



}

