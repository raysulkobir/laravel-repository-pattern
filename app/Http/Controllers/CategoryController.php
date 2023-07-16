<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = session('pagination_per_page');
        $per_page = (!empty($per_page)) ? $per_page : 20;
        $page     = (!empty($_GET['page'])) ? $_GET['page'] : 1;
        $offset   = ($page * $per_page) - $per_page;

        // $customers   = Customer::orderBy('id', 'DESC')->paginate($per_page);
        $title       = "Customer List";
        $description = "Some description for the page";
        $categories   = $this->categoryRepository->allCatagories();
        return view('category.index', compact('title', 'description', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create new Customer";
        $description = "Some description for the page";
        return view('category.create', compact('title', 'description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'upload/category/';
            $image->move($destinationPath, $img, 'public');
            $validatedData['image'] = $destinationPath.$img;
        }
        return $this->categoryRepository->storeCategory($validatedData);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($language, $id)
    {
        $category = $this->categoryRepository->findCategory($id);
        $title = "Create new Customer";
        $description = "Some description for the page";
        return view('category.edit', compact('title', 'description', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $language, $id)
    {

        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $category = Category::find($id);
            if($category){
                if (File::exists($category->image)) {
                    File::delete($category->image);
                }
            }

            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'upload/category/';
            $image->move($destinationPath, $img, 'public');
            $validatedData['image'] = $destinationPath . $img;
        }
        return $this->categoryRepository->updateCategory($validatedData, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($language, $id)
    {
        // if(File::exists('upload/category/1689415766.jpg')){
        //    return File::delete('upload/category/1689415766.jpg');
        // }else{
        //     return "else";
        // }
        // return File::exists('upload/category/1689415766.jpg');

        return $this->categoryRepository->destroyCategory($id);
    }
}
