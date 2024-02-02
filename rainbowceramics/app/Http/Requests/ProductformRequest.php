<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductformRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' =>[
                'required',
                'integer'

            ],
            'name' =>[
                'required' ,
                'string'

            ],
            'slug' =>[
                'required' ,
                'string'

            ],
            'shape' =>[
                'required' ,
                'string'

            ],
            'usage' =>[
                'required' ,
                'string'

            ],
            'material' =>[
                'required' ,
                'string'

            ],
            'size' =>[
                'required' ,
                'string'

            ],
            'pattern' =>[
                'string'

            ],
            'baseshape' =>[
                'required' ,
                'string'

            ],
            'brand' =>[
                'required' ,
                'string'
            ],
            'description' =>[
                'required' ,
                'string'
            ],
            'price' =>[
                'required',
                'integer'

            ],
            'quantity' =>[
                'required',
                'integer'

            ],
            'thickness' =>[
                'required' ,
                'integer'

            ],
            'diameter' =>[
                'required' ,
                'string'

            ],
            'status' =>[
                'nullable'
            ],
            'image' =>[
                'nullable',
                //'images|mimes:jpeg,png,jpg'
            ],
        ];
    }
}
