<?php

namespace App\Http\Requests\Dashboard\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize()
   {
      return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules()
   {
      return [
         'buyer_id'        => 'nullable|integer',
         'freelancer_id'   => 'nullable|string',
         'service_id'      => 'nullable|integer',
         'file'            => 'nullable|max:1024',
         'note'            => 'required|string|max:10000',
         'expired'         => 'nullable|date',
         'order_status_id' => 'nullable|integer',
      ];
   }
}
