<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;
use App\Models\AttributeValue;

class AttributeController extends Controller
{

    public function attributeCreatePage()
    {
        return view('admin.pages.attribute.pages.CreateAttribute');
    }

    public function attributeCreateProcess(Request $request)
    {

        $attribute = new Attribute();
        $attribute->title = $request->title;
        $attribute->description = $request->description;
        $attribute->status = 'active';
        $attribute->created_by = session()->get('user')->id;
        $attribute->save();

        $variant_values = $request->variant_values;

        foreach ($variant_values as $variant_value)
        {
            $attribute_value = new AttributeValue();
            $attribute_value->attribute_id = $attribute->id;
            $attribute_value->value = $variant_value;
            $attribute_value->save();
        }

        return redirect()->back()->with('success', 'Attribute Created Successfully');

    }

    public function attributeValues(Request $request)
    {
        $attribute = Attribute::where('id', $request->id)->first();
        return view('admin.pages.product.widgets.SelectedAttribute', ['attribute' => $attribute]);
    }
}
