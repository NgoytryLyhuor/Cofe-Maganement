<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Image;
use File;
class FoodController extends Controller
{
    //
    public function Food(){
        return view('admin.foods.food');
    }
    
    public function FoodAndDrink(){
        $allData = Food::all();
        return view("admin.food.food_drink_food",compact('allData'));
    }

    public function FoodAll(){
        $allData = Food::Where("type",'=','Food')->OrderBy('id','ASC')->get();
        return view("admin.food.food_all",compact('allData'));
    }

    public function FoodDrink(){
        $allData = Food::Where("type",'=','Drink')->OrderBy('id','ASC')->get();
        return view("admin.food.food_drink",compact('allData'));
    }

    public function FoodInsert(){
        return view('admin.food.food_insert');
    }

    public function FoodStore(Request $request){
        $image = $request->file('image');
        $image_name = rand(1,999999999999).'-'.$image->getClientOriginalName();
        Image::make($image)->save('foods/'.$image_name);

        Food::insert([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $image_name,
            'type' => $request->type,
            'qty' => 0
        ]);

        return redirect()->route('food.drink.food');
    }

    public function FoodEdit($id){
        $editData = Food::FindOrFail($id);
        return view('admin.food.food_edit',compact('editData'));
    }

    public function FoodUpdate(Request $request, $id){

        if($request->type == "Select Type of food"){
            $type = $request->old_type;
        }
        else{
            $type = $request->type;
        }

        if($request->file('image')){
            $image = $request->file('image');
            $image_name = rand(1,999999999999).'-'.$image->getClientOriginalName();
            Image::make($image)->save('foods/'.$image_name);
            Food::FindOrFail($id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $image_name,
                'type' => $type,
            ]);
        }
        else{
            Food::FindOrFail($id)->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $request->old_image,
                'type' => $type,
            ]);
        }
        
        return redirect()->route('food.drink.food');
    }

    public function FoodDelete($id){
        $food = Food::findOrFail($id);
        
        unlink("foods/".$food->image);
        
        $food->delete();
        return back();
    }
}
