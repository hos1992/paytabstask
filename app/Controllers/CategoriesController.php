<?php namespace App\Controllers;
use App\Models\Category;

class CategoriesController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function index()
	{
	    $data['parent_cats'] = $this->model->getAllParentCategories();
		return view('categories/index', $data);
	}

	public function getSubCategories($parent_id){
        $data['sub_cats'] = $this->model->getSubCategories($parent_id);
        return view('categories/ajax/sub_categories', $data);
    }

}
