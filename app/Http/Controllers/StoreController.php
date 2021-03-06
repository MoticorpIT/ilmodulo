<?php

namespace App\Http\Controllers;

use App\Store;
use App\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /** CHECK IF USER IS LOGGED IN */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** SHOW TABLE OF ALL STORES (INDEX) */
    public function index()
    {
        $stores = Store::orderBy('created_at', 'desc')->get();
        return view('admin.stores.index', compact('stores'));
    }


    /** CREATE NEW STORE FORM (CREATE) */
    public function create()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('admin.stores.create', compact('categories'));
    }


    /** SAVE NEW STORE TO DATABASE (STORE) */
    public function store(Request $request)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'is_active' => 'required',   
        ]);
        /* CREATE NEW STORE */
        $store = new Store(
            [
                'name' => $request->name,
                'is_active' => $request->is_active,
            ]
        );
        /* SAVE NEW STORE TO DATABASE */
        $store->save();
        $store->categories()->attach($request->category);
        /* CONFIRM CREATION AND REDIRECT USER */
        if(!$store->save()) {
            session()->flash('message', 'Contact Manager. ERROR: Store did not get created');
        } else {
            session()->flash('message', 'Store Created Successfully');
        }
        return redirect()->route('stores.index');
    }


    /** EDIT A STORE FORM (EDIT) */
    public function edit(Store $store)
    {
        /* GET THE CATEGORY */
        $categories = Category::where('is_active', 1)->get();
        /* SHOW THE EDIT FORM FOR THE STORE */
        return view('admin.stores.edit', compact('store', 'categories'));
    }
    

    /** SAVE EDITED STORE TO DATABASE (UPDATE) */
    public function update(Request $request, Store $store)
    {
        /* VALIDATE DATA COMING IN FROM FORM */
        $this->validate(request(), [
            'name' => 'required',
            'is_active' => 'required',   
        ]);
        /* CREATE UPDATED STORE */
        $store->update(
            [
                'name' => $request->name,
                'is_active' => $request->is_active,
            ]
        );
        /* SAVE UPDATED STORE TO DATABASE */
        $store->categories()->sync($request->category);
        /* CONFIRM CREATION AND REDIRECT USER */
        if(!$store->update()) {
            session()->flash('message', 'Contact Manager. ERROR: Store did not update');
        } else {
            session()->flash('message', 'Store Updated Successfully');
        }
        return redirect()->route('stores.index');
    }

}
