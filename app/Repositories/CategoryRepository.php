<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\File;

    class CategoryRepository implements CategoryRepositoryInterface{
        public function allCatagories(){
            return Category::all();
        }

        public function storeCategory($data){
            Category::create($data);
            return redirect()->route('category.index', app()->getLocale())->with('create', 'Category created successfully !');
        }

        public function findCategory($id){
            return Category::find($id);
        }

        public function updateCategory($data, $id){
            Category::findOrFail($id)->update($data);
            return redirect()->route('category.index', app()->getLocale())->with('create', 'Category created successfully !');
        }

        public function destroyCategory($id){
            $category = Category::find($id);
                if (!empty($category)) {
                    if (File::exists($category->image)) {
                        File::delete($category->image);
                    }
                    $category->delete();
                }
            return back();
        }



    }
