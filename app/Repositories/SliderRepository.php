<?php

namespace App\Repositories;

use App\Models\Slider;
use App\Repositories\Interfaces\SliderRepositoryInterface;

    class SliderRepository implements SliderRepositoryInterface{
        public function allSliders(){
            return Slider::all();
        }

        public function storeSlider($data){
            return Slider::create($data);
        }

        public function findSlider($id){
            return Slider::find($id);
        }

        public function updateSlider($data, $id){
            $slider = Slider::find($id);
            return $slider->update($data);
        }

        public function destroySlider($id){
            $slider = Slider::find($id);
            return $slider->delete();
        }
    }
