<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'short_name'=>$this->short_name,
            'code'=>$this->code,
            'sku'=>$this->sku,
            'description'=>$this->description,
            'company_name'=>$this->company->name,
            'product_category_id'=>$this->product_category_id,
            'category_name'=>$this->product_category->name,
            'product_brand_id'=>$this->product_brand_id,
            'brand_name'=>$this->product_brand->name,
            'product_group_id'=>$this->product_group_id,
            'group_name'=>$this->product_group->name,
            'unit_of_measurement_id'=>$this->unit_of_measurement_id,
            'unit_of_measurement_name'=>$this->unit_of_measurement->name,
            'unit_of_measurement_short_name'=>$this->unit_of_measurement->short_name,
            'alert_quantity'=>$this->alert_quantity,
            'selling_price'=>$this->selling_price,
            'discount'=>$this->discount,
            'creator_user_id'=>$this->creator_user_id,
            'creator_user_name'=>$this->creator_user->name,
            'updator_user_id'=>$this->creator_user_id,
            'updator_user_name'=>$this->updator_user?$this->updator_user->name:null,
            'href'=>[
                'product'=>route('products.show',$this),
            ],
        ];
    }
}
