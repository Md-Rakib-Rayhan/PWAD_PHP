<?php

class student{
    public $id;
    public $name;
    public $batch;
    public $result_data;
    public $file;

    public function __construct($file){
        $this->file = $file;

        
    }

    public function result($s_id){
        $this->id = $s_id;

        $data = file($this->file);
        foreach ($data as $value) {
            list($id, $name, $batch, $result) = explode(" ", $value);
            if($id == $this->id){
                $this->id = $id;
                $this->name = $name;
                $this->batch = $batch;
                $this->result_data = $result;
            }

            }
            if(isset($this->result_data)){
                return "Your Result is ". $this->result_data;
            }else{
                return "Sorry data not Found";
            }
        }
        
        
    }



?>