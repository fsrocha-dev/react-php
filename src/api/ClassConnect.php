<?php
abstract class ClassConnect{
    protected function ConnectDB()
    {
        try{
            $Con=new PDO("mysql:host=localhost;dbname=react-php","root","");
            return $Con;
        }catch(PDOExeption $e){
            return $e->getMessage();
        }
    }
}