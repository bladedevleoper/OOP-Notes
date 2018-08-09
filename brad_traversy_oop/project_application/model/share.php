<?php

class ShareModel extends Model
{
    public function Index()
    {
       $this->query('SELECT * FROM shares');
       $rows = $this->resultsSet();
        //as we need to pass the results to the view, we need to do the following:
        return $rows; 
    }
}