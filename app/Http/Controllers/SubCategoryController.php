<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public $subcategories;
    public $subcategory;
    public $categories;

    public function index(){
        $this->categories=  Category::all();
        return view('admin.sub-category.add' ,['categories' => $this->categories]);
    }
    public function create(Request $request){
        SubCategory::newSubCategory($request);
        return redirect()->back()->with('message','Sub-Category info create successfully');
    }

    public function manage(){
        $this->subcategories  = SubCategory::orderBy('id','desc')->get();
        return view('admin.sub-category.manage',['subCategories'=>$this->subcategories]);
    }
    public function edit($id){
        $this->subcategory = SubCategory::find($id);
        $this->categories  = Category::all();
        return view('admin.sub-category.edit',[
            'subCategory'=>$this->subcategory,
            'categories' => $this->categories
        ]);
    }
    public function update(Request $request, $id){
        SubCategory::updateSubCategory($request,$id);
        return redirect('/manage-sub-category')->with('message','Sub-Category info updated Successfully');
    }
    public function delete(Request $request, $id){
        SubCategory::deleteSubCategory($id);
        return redirect()->back()->with('message','Sub-Category Info deleted Successfully');
    }
}
