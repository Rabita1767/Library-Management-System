<?php


$option = $_POST['booktype'];

if ($option == 'ITF')
  {
    require('itf.php');
                    
  }

if ($option =='EC')
  {
    require('ec.php');
    
  }
  if ($option =='IPE')
  {
    require('ipe.php');
       
  }
  if ($option =='DS')
  {
    require('ds.php');
    
  }
  if ($option =='OOP')
  {
    require('oop.php');
    echo($word); 
  }
  if ($option =='DB')
  {
    require('db.php');
    echo($word); 
  }
  if ($option =='CG')
  {
    require('cg.php');
    echo($word); 
  }
  if ($option =='MP')
  {
    require('mp.php');
    echo($word); 
  }
  if ($option =='Web')
  {
    require('web.php');
    echo($word); 
  }
  if ($option =='Accounting')
  {
    require('accounting.php');
    echo($word); 
  }
?>

