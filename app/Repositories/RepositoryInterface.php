<?php
 namespace  App\Repositories;
  
 
  interface RepositoryInterface{
    
    public function all();

    public function search($query);
    
    public function getById($id);

    public function store($params);

    public function update(array  $params,$id);

    public function delete($id);
}
